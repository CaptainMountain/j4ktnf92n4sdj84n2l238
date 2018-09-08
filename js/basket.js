/*****************************BASKET(basket.js)*************************/
"use strict";

function Cart($parent, logon, $basketOnTop) {
    this.logon = logon;
    this.id_user = logon.user === null ? null : logon.user.id;
    this.products = [];
    this.$parent = $($parent);
    this.$basketOnTop = $($basketOnTop);

    if (this.$parent.length !== 0) {
        this.$parent.find(".Checkout").css("top", "" + ((this.products.length) * 162 + 326) + "px");
        $("#ClearCart").on('click', () => {
            this.clearFullCart();
        });
    }

    this.download(this.id_user);


}

/**
 * Загружает корзину, если пользователь залогинен
 * @param id_user {int}
 */
Cart.prototype.download = function (id_user) {
    if (id_user !== null) {
        $.post({
            url: settings.apiUrl + 'getBasket.json',
            async: false,
            dataType: 'json',
            data: {id_user},
            success: function (data) {
                if (data.result === 1) {
                    let page = this.resultToObjects(data.products);
                    this.init();
                }
                else {
                    this.clearFullCart();
                    alert(data.errorMessage);
                }
            },
            context: this
        });
    }
    else {
        this.$basketOnTop.css("display", "none");
    }
};

/**
 *
 * @param data {{id,name,product_page_URL,price,currency,img_URL,img_alt,quantity,shipping_price,rating,characteristics}}
 */
Cart.prototype.resultToObjects = function (data) {
    let newProduct = null;
    for (let product of data) {
        newProduct = new CartProduct(this, product);
        this.products.push(newProduct);
    }
};

Cart.prototype.init = function () {
    //инициализируем корзину в верхней части страницы
    if (this.$basketOnTop != null) {
        this.$basketOnTop.css("display", "block");
        this.$basketOnTop.find(".Basket__Count").text(this.products.length);
        this.$basketOnTop.find(".DropDownMenu .Column .CartProduct").remove();
        let $summary = this.$basketOnTop.find(".Summary");
        for (let product of this.products) {
            product.initBasketRow($summary);
        }
    }
    //инициализируем корзину в теле страницы
    if (this.$parent !== null) {
        //this.$parent.empty();
        this.$parent.find(".RowProduct").remove();

        for (let product of this.products) {
            product.initCartRow(this.$parent);
        }
        //двигаем кнопку заказа. она position absolute, т.к. является частью формы, но отображается снаружт формы
        this.$parent.find(".Checkout").css("top", "" + (this.products.length * 162 + 326) + "px")
    }
    //обновляем сумму по корзине
    this.updateTotal();
};

/**
 * Посчитать сумму по корзине
 * @returns {number}
 */
Cart.prototype.calculateTotal = function () {
    let ret = 0;
    for (let product of this.products) {
        ret += product.quantity * product.price;
    }
    return ret;
};

Cart.prototype.updateTotal = function () {
    if (this.$basketOnTop != null) {
        this.$basketOnTop
            .find(".Summary .Right")
            .text("$" + this.calculateTotal());
        if (this.products.length > 0) {
            this.$basketOnTop
                .find(".Basket__Count")
                .css("display", "flex")
                .text(this.products.length);
        }
        else {
            this.$basketOnTop
                .find(".Basket__Count")
                .css("display", "none");
        }
    }
    if (this.$parent != null) {
        //логически не понимаю, в чем была задумка дизайнера,
        // когда делал 2 поля, поэтому цифры будут одинаковые
        $("#SubTotal").text("$" + this.calculateTotal());
        $("#GrandTotal").text("$" + this.calculateTotal());
    }
};

/**
 * Удалить продукт из корзины в строчном представлении (запускаяется кнопкой обработчиком удаления)
 * @param $div
 * @param product {CartProduct}
 */
Cart.prototype.removeProductRowFromCart = function (product) {
    this.products.splice(this.products.indexOf(product), 1);
    if (product.$divOnBody !== null) product.$divOnBody.remove();
    if (product.$divOnTop !== null) product.$divOnTop.remove();
    this.$parent.find(".Checkout").css("top", "" + ((this.products.length) * 162 + 326) + "px");
    this.updateTotal();
};

/**
 * Очистить корзину в памяти и на экране
 */
Cart.prototype.clearFullCart = function () {
    this.products = [];
    this.$basketOnTop.find(".Basket__Count").text("");
    this.$basketOnTop.find(".DropDownMenu .Column .CartProduct").remove();

    this.$parent.find(".RowProduct").remove();
    this.$parent.find(".Checkout").css("top", "" + ((this.products.length) * 162 + 326) + "px");

    //не хватает оповещения сервера об очистке корзины
    console.log("здесь должно быть оповещение сервера об очистке корзины целиком");
};


/*********************************************************************************/

/**
 *
 * @param cart {Cart}
 * @param obj {{id,name,product_page_URL,price,currency,img_URL,img_alt,quantity,shipping_price,rating,characteristics}}
 * @constructor
 */
function CartProduct(cart, obj) {
    Product.call(this, obj);
    this.quantity = obj.quantity;
    this.shipping_price = obj.shipping_price;
    this.rating = obj.rating;
    this.characteristics = [];

    this.cart = cart;
    this.$insertBefore = null;

    this.full_price = this.price * this.quantity + this.shipping_price;
    this.$divOnTop = null; //HTML элемент, соответствующий данному продукту в шапке
    this.$divOnBody = null; //HTML элемент, соответствующий данному продукту на странице корзины

    let newCharacteristic = null;

    for (let characteristic of obj.characteristics) {
        newCharacteristic = new Characteristic(characteristic);
        this.characteristics.push(newCharacteristic);
    }
}

CartProduct.prototype = Object.create(Product.prototype);
CartProduct.prototype.constructor = CartProduct;

/**
 * Инициализирует товар в корзине в основной части страницы (память -> HTML)
 * @param $parent - инициализируемый товар
 */
CartProduct.prototype.initCartRow = function ($parent) {
    this.$parent = $($parent);

    let $div = $('<div />', {class: "RowProduct"});
    this.$parent.append($div);
    this.$divOnBody = $div;

    //Detail
    let $divDetail = $('<div />', {class: "Detail"});
    $div.append($divDetail);
    let $divDetailA = $('<a />', {"href": this.product_page_URL});
    $divDetail.append($divDetailA);
    let $divDetailALeft = $('<div />', {class: "Left"});
    $divDetailA.append($divDetailALeft);
    let $divDetailALeftImg = $('<img />', {
        class: "ProductImg",
        "src": this.img_URL,
        "alt": this.img_alt
    });
    $divDetailALeft.append($divDetailALeftImg);

    let $divDetailARight = $('<div />', {class: "Right"});
    $divDetailA.append($divDetailARight);
    let $divDetailARightH3 = $('<h3 />', {});
    $divDetailARightH3.text(this.name);
    $divDetailARight.append($divDetailARightH3);
    for (let characteristic of this.characteristics) {
        characteristic.init($divDetailARight);
    }

    //UnitPrice
    let $divUnitPrice = $('<div />', {class: "UnitPrice"});
    $div.append($divUnitPrice);
    let $divUnitPriceP = $('<p />', {class: "Value"});
    let price = this.currency === "$" ? this.currency + this.price : this.price + " " + this.currency;
    $divUnitPriceP.text(price);
    $divUnitPrice.append($divUnitPriceP);

    //Quantity
    let $divQuantity = $('<div />', {class: "Quantity"});
    $div.append($divQuantity);
    let $divQuantityInput = $('<input />', {
        "type": "text",
        "pattern": "[0-9]*",
        "title": "количество товара должно быть цифрой",
        "value": this.quantity
    });
    $divQuantity.append($divQuantityInput);

    //Shipping
    let $divShipping = $('<div />', {class: "Shipping"});
    $div.append($divShipping);
    let $divShippingP = $('<p />', {class: "Value"});
    price = this.currency === "$" ? this.currency + this.price : this.price + " " + this.currency;
    price = this.price === 0 ? "FREE" : price;
    $divShippingP.text(price);
    $divShipping.append($divShippingP);

    //Price
    let $divPrice = $('<div />', {class: "Price"});
    $div.append($divPrice);
    let $divPriceP = $('<p />', {class: "Value"});
    price = this.currency === "$" ? this.currency + this.full_price : this.full_price + " " + this.currency;
    $divPriceP.text(price);
    $divPrice.append($divPriceP);

    //Action
    let $divAction = $('<div />', {class: "Action"});
    $div.append($divAction);
    let $divActionButton = $('<div />', {class: "ClearBtn fas fa-times-circle"});
    $divAction.append($divActionButton);


    //Навешиваем все обработчики
    $divQuantityInput.on('input', () => {
        this.changeProductCount($divQuantityInput, $divPriceP);
    });

    $divActionButton.on('click', () => {
        this.removeProductRowFromCart();
    });
};


/**
 * Инициализирует товар в корзине в шапке страницы (память -> HTML)
 * @param $insertBefore - элемент, перед которым вставляется товар корзины
 */
CartProduct.prototype.initBasketRow = function ($insertBefore) {
    this.$insertBefore = $($insertBefore);

    let $div = $('<div />', {class: "CartProduct Row"});
    $div.insertBefore(this.$insertBefore);
    this.$divOnTop = $div;
    //this.$parent.append($div);

    let $divA = $('<a />', {"href": this.product_page_URL});
    $div.append($divA);

    let $divAImg = $('<img />', {
        "src": this.img_URL,
        "alt": this.img_alt
    });
    $divA.append($divAImg);

    let $divAAbout = $('<div />', {class: "AboutProduct Column"});
    $divA.append($divAAbout);
    let $divAAboutH5 = $('<h5 />', {});
    $divAAboutH5.text(this.name);
    $divAAbout.append($divAAboutH5);

    let stars = new Stars(this.rating);
    stars.init($divAAbout);

    let $divAAboutSpan = $('<span />', {class: "CountPrice Row Pink"});
    $divAAbout.append($divAAboutSpan);
    let $divAAboutSpanCount = $('<span />', {class: "Count"});
    $divAAboutSpanCount.text(this.quantity);
    $divAAboutSpan.append($divAAboutSpanCount);
    $divAAboutSpan.append("<span class=\"Size_mini\">&nbsp;&nbsp;x&nbsp;&nbsp;</span>");
    let $divAAboutSpanPrice = $('<span />', {class: "Price"});
    $divAAboutSpanPrice.text(this.price);
    $divAAboutSpan.append($divAAboutSpanPrice);

    let $divAClear = $('<div />', {class: "ClearBtn fas fa-times-circle"});
    $divA.append($divAClear);
    $divAClear.on('click', (event) => {
        event.preventDefault();
        this.removeProductRowFromBasket();
    });

    /*
    //Навешиваем все обработчики
    $divQuantityInput.on('input', () => {
        this.changeProductCount($divQuantityInput, $divPriceP);
    });

    $divActionButton.on('click', () => {
        this.removeProductRowFromCart($div);
    });
    */
};


/**
 * Пересчитать количество товаров в страничном представлении корзины
 * @param $divQuantityInput
 * @param $divPriceP
 */
CartProduct.prototype.changeProductCount = function ($divQuantityInput, $divPriceP) {
    let newVal = +$divQuantityInput.val();
    if (newVal >= 0) {
        this.quantity = newVal;
        this.full_price = this.price * this.quantity + this.shipping_price;
        let price = this.currency === "$" ? this.currency + this.full_price : this.full_price + " " + this.currency;
        $divPriceP.text(price);
    }
    else if (isNaN(newVal)) {
        $divQuantityInput.val("1");
        $divPriceP.text("1");
    }
};

/**
 * Удалить продукт из корзины (обработчик кнопки в строчном представлении)
 */
CartProduct.prototype.removeProductRowFromCart = function () {
    this.removeProductFromServerCart();
    this.cart.removeProductRowFromCart(this);
};

/**
 * Удалить продукт из корзины (обработчик кнопки удаления в корзине в шапке страниц)
 */
CartProduct.prototype.removeProductRowFromBasket = function () {
    this.removeProductFromServerCart();
    this.cart.removeProductRowFromCart(this);
};

/**
 * Оповестить сервер об удалении товара из корзины
 * @param cartProduct {CartProduct}
 */
CartProduct.prototype.removeProductFromServerCart = function () {
    let id = this.id;
    if (this.id_user !== null) {
        $.post({
            url: settings.apiUrl + 'deleteFromBasket.json',
            dataType: 'json',
            data: {
                "id_user": this.cart.id_user,
                "id_product": this.id
            },
            success: function (data) {
                console.log("product " + id + " removed from cart");
            },
            context: this
        });
    }
};

/*******************************************************************************/

/**
 * Характеристики товара для тела страницы корзины
 * @param obj {{name,value}}
 * @constructor
 */
function Characteristic(obj) {
    this.name = obj.name;
    this.value = obj.value;
}

Characteristic.prototype.init = function ($parent) {
    this.$parent = $($parent);

    let $div = $('<div />', {class: "Parameter"});
    this.$parent.append($div);

    let $name = $('<p />', {class: "Name"});
    $name.text(this.name);
    $div.append($name);

    let $value = $('<p />', {class: "Value"});
    $value.text(this.value);
    $div.append($value);

};

/****************************************************************/

/**
 * Класс - панель звезд, означающих оценку товара, позволяющих оценивать товар кликом по нему
 * @param starsCount
 * @constructor
 */
function Stars(starsCount) {
    this.starsCount = starsCount;
    //console.log(starsCount);
}

Stars.prototype.init = function ($parent) {
    this.$parent = $($parent);
    let newStar = null;

    let $div = $('<div />', {class: "Stars Row"});
    this.$parent.append($div);

    //Estimated
    let $estimated = $('<div />', {class: "Estimated"});
    $div.append($estimated);
    for (let i = 0; i < 5; i++) {
        newStar = new Star(this.starsCount - i);
        newStar.init($estimated);
    }

    //Estimate
    let $estimate = $('<div />', {class: "Estimate"});
    $div.append($estimate);
    for (let i = 0; i < 5; i++) {
        newStar = new Star(0);
        newStar.init($estimate);
    }
};


/****************************************************************/

/**
 * Класс - звезда (используется для отображения оценки товара)
 * @param starsCount {number} - число от 0 до 1. если 0, звезда не активна. если 1, активна. если 0.5, то активна половина звезды
 * @constructor
 */
function Star(starsCount) {
    //получаем 0, 0.5 или 1
    //if (starsCount < 0) this.starsCount = 0;
    //else this.starsCount = Math.round((starsCount - Math.floor(starsCount)) * 2) / 2;
    this.starsCount = starsCount;
    //console.log(starsCount, this.starsCount);
}

Star.prototype.init = function ($parent) {
    this.$parent = $($parent);

    let $div = $('<div />', {class: "Star Row"});
    this.$parent.append($div);

    //HalfStar
    let $halfStar = $('<div />', {class: "HalfStar fas fa-star-half"});
    $div.append($halfStar);

    //FullStar
    let $fullStar = $('<div />', {class: "FullStar fas fa-star"});
    $div.append($fullStar);

    //EmptyStar
    let $emptyStar = $('<div />', {class: "EmptyStar far fa-star"});
    $div.append($emptyStar);

    //делаем активной необходимую звезду
    if (this.starsCount > 0) {
        let temp = Math.round((this.starsCount - Math.floor(this.starsCount)) * 2) / 2;
        if (this.starsCount >= 1 || temp === 1) $fullStar.addClass("Active");
        else {
            if (this.starsCount > 0 && temp !== 0) $halfStar.addClass("Active");
        }
    }
};