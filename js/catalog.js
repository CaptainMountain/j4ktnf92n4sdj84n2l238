/*****************************CATALOG(catalog.js)*************************/
"use strict";

function Catalog($parent) {
    this.pages = [];
    this.$parent = $($parent);
    this.download({page_number: 1, id_category: 1});
}

/**
 * Загружает страницу, если она не загружена
 * @param request_data {{page_number, id_category}}
 */
Catalog.prototype.download = function (request_data) {
    let page = this.isDownloaded(request_data);
    if (page === null) {
        $.post({
            url: settings.apiUrl + 'catalogData.json',
            dataType: 'json',
            data: request_data,
            success: function (data) {
                if (data.result === 1) {
                    page = this.resultToObjects(request_data, data);
                    this.init(page);
                }
                else {
                    alert(data.errorMessage);
                }
            },
            context: this
        });
    }
    else {
        this.init(page);
    }
};

/**
 * Проверяет, загружена ли уже страница, если загружена возвращает ее. Если нет, возвращает Null
 * @returns {Page} Если страница загружена возвращает ее. Если нет, возвращает Null
 * @param request_data {{page_number, id_category}}
 */
Catalog.prototype.isDownloaded = function (request_data) {
    for (let page of this.pages) {
        if (page.page_number === request_data.page_number
            && page.id_category === request_data.id_category) return page;
    }
    return null;
};

/**
 * Разобрать данные с сервера и преобразовать в объекты необходимого типа
 * @param data {{result,page_number,total_pages,[]products,errorMessage}}
 * @param request_data {{page_number, id_category}}
 * @returns {Page}
 */
Catalog.prototype.resultToObjects = function (request_data, data) {
    let new_element = new Page(data, request_data.id_category);
    this.pages.push(new_element);
    return new_element;
};

/**
 * Формирует страницу каталога на основе имеющейся в памяти информации.
 * Если там null, ничего не делает
 * @param page {Page}
 */
Catalog.prototype.init = function (page) {
    this.$parent.empty();
    page.init(this.$parent);
};

/**************************************************************************/
/**
 * Содержит страницу каталога с товарами
 * @param obj {{result,page_number,total_pages,[]products,errorMessage}}
 * @param id_category {int}
 * @constructor
 */
function Page(obj, id_category) {
    this.$parent = null;
    this.page_number = obj.page_number;
    this.id_category = id_category;
    this.products = [];
    let newProduct = null;

    for (let product of obj.products) {
        newProduct = new Product(product);
        this.products.push(newProduct);
    }
}

Page.prototype.init = function ($parent) {
    this.$parent = $($parent);

    //this.$parent.empty();
    for (let product of this.products) {
        product.init(this.$parent);
    }
};


/**************************************************************************/


/**
 * Класс - реализующий картинку-ссылку в верхнем выпадающем меню
 * @param $parent
 * @param obj {{id, name, product_page_URL, price,currency,img_URL,img_alt}}
 * @constructor
 */
function Product(obj) {
    this.$parent = null;

    this.id = obj.id;
    this.name = obj.name;
    this.product_page_URL = obj.product_page_URL;
    this.price = obj.price;
    this.currency = obj.currency;
    this.img_URL = obj.img_URL;
    this.img_alt = obj.img_alt;
}

Product.prototype.SVG = String('<svg class="BasketSvgWhite" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"\n' +
    '                         viewBox="0 0 32 29" style="enable-background:new 0 0 32 29;" xml:space="preserve" width="32" height="29">\n' +
    '                        <g>\n' +
    '                            <g>\n' +
    '                                <line class="st0" x1="5.3" y1="1" x2="1.3" y2="1"></line>\n' +
    '                            </g>\n' +
    '                            <g>\n' +
    '                                <line class="st0" x1="5.3" y1="1" x2="10.6" y2="19.4"></line>\n' +
    '                            </g>\n' +
    '                            <g>\n' +
    '                                <line class="st0" x1="14.1" y1="6.9" x2="30.8" y2="7"></line>\n' +
    '                            </g>\n' +
    '                            <g>\n' +
    '                                <line class="st0" x1="25.3" y1="19.4" x2="30.8" y2="7"></line>\n' +
    '                            </g>\n' +
    '                            <g>\n' +
    '                                <line class="st0" x1="10.6" y1="19.4" x2="25.3" y2="19.4"></line>\n' +
    '                            </g>\n' +
    '                            <g>\n' +
    '                                <circle class="st1" cx="9.4" cy="26.2" r="1.6"></circle>\n' +
    '                            </g>\n' +
    '                            <g>\n' +
    '                                <circle class="st1" cx="26.1" cy="26.2" r="1.6"></circle>\n' +
    '                            </g>\n' +
    '                            <g>\n' +
    '                                <circle class="st2" cx="9.5" cy="26.2" r="0.8"></circle>\n' +
    '                            </g>\n' +
    '                            <g>\n' +
    '                                <circle class="st2" cx="26.1" cy="26.2" r="0.8"></circle>\n' +
    '                            </g>\n' +
    '                        </g>\n' +
    '                    </svg>');

/**
 * Создать HTML элемент и присоединить в меню
 */
Product.prototype.init = function ($parent) {
    this.$parent = $($parent);

    let $article = $('<article />', {class: "Product"});
    this.$parent.append($article);

    let $a = $('<a />', {
        class: "Product__Link",
        href: this.product_page_URL
    });
    $article.append($a);

    //раздел с фото
    let $photo = $('<div />', {class: "Product__Photo"});
    $a.append($photo);

    let $img = $('<img />', {
        class: "Product__Image",
        "src": this.img_URL,
        "alt": this.img_alt
    });
    $photo.append($img);

    let $btn = $('<div />', {class: "Product__AddBtn"});
    $photo.append($btn);

    $btn.append(this.SVG + "Add to Cart");

    //раздел Info
    let $info = $('<div />', {class: "Product__Info"});
    $a.append($info);

    let $h2 = $('<h2 />', {class: "Product__Name"});
    $h2.text(this.name);
    $info.append($h2);

    let $span = $('<span />', {class: "Product__Price Color_pink"});
    let price = this.currency === "$" ? this.currency + this.price : this.price + " " + this.currency;
    $span.text(price);
    $info.append($span);
};

