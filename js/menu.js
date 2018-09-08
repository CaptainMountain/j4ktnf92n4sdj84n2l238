/*****************************TOP MENU (menu.js)*************************/

function MenuTop($parent) {
    this.products = [];
    this.$parent = $($parent);
    this.download();
}

MenuTop.prototype.download = function () {
    $.post({
        url: settings.apiUrl + 'menu.json',
        dataType: 'json',
        data: {},
        success: function (data) {
            if (data.result === 1) {
                this.resultToObjects(data);
                this.init();
            }
            else {
                alert(data.errorMessage);
            }
        },
        context: this
    });

};

/**
 * Разобрать данные с сервера и преобразовать в объекты необходимого типа
 * @param data {result,[]elements,errorMessage}
 * @returns {*}
 */
MenuTop.prototype.resultToObjects = function (data) {
    let new_element = null;

    if (data.hasOwnProperty("products")) {
        for (let i in data.products) {
            new_element = new MenuTopElement(data.products[i]);
            this.products.push(new_element);
        }
    }
};

/**
 * Формирует верхнее меню на основе данных в переменной объекта content.
 * Если там null, ничего не делает
 */
MenuTop.prototype.init = function () {

    this.$parent.empty();

    let $ul= $('<ul />', {});
    this.$parent.append($ul);

    for (let elem of this.products) {
        elem.init($ul);
    }

};

/************************************************************************************/

/**
 * Класс - реализующий один элемент в верхнем меню
 * @param obj {{visible_name,href,drop_down_menu}}
 * @constructor
 */
function MenuTopElement(obj) {
    this.$parent = null;
    this.name = obj.visible_name;
    this.href = obj.href;
    this.products = [];
    this.$elements = null;

    let new_element = null;

    for (let i in obj.drop_down_menu) {
        new_element = new MenuTopElementColumn(obj.drop_down_menu[i]);
        this.products.push(new_element);
    }
}

MenuTopElement.prototype.init = function ($parent) {
    let new_element = null;
    this.$parent = $($parent);

    //добавляем элементы на страницу
    let $li = $('<li />');
    this.$parent.append($li);

    let $a = $('<a />', {"href": this.href});
    $a.text(this.name);
    $li.append($a);
    let $triangle = $('<div />', {class: "Square10"});
    $li.append($triangle);
    this.$elements = $('<div />', {class: "DropDownMenu Row Swing-in-top-fwd"});
    $li.append(this.$elements);

    for (let elem of this.products) {
        elem.init(this.$elements);
    }
};

/************************************************************************************/

/**
 * Класс - реализующий столбец в верхнем выпадающем меню
 * @param obj {{column_index,column_elements}}
 * @constructor
 */
function MenuTopElementColumn(obj) {
    this.$parent = null;
    this.index = obj.column_index;
    this.products = [];
    this.$elements = null;

    let new_element = null;

    for (let i in obj.column_elements) {
        if (obj.column_elements[i].hasOwnProperty("src")) {
            new_element = new MenuTopElementColumnPicture(obj.column_elements[i]);
        }
        else {
            new_element = new MenuTopElementColumnPart(obj.column_elements[i]);
        }
        this.products.push(new_element);
    }
}

MenuTopElementColumn.prototype.init = function ($parent) {
    let new_element = null;
    this.$parent = $($parent);

    //добавляем элементы на страницу
    this.$elements = $('<div />', {class: "Column"});
    for (let elem of this.products) {
        elem.init(this.$elements);
    }
    this.$parent.append(this.$elements);
};

/************************************************************************************/

/**
 * Класс - реализующий отдельную именованную часть столбца в верхнем выпадающем меню
 * @param obj
 * @constructor
 */
function MenuTopElementColumnPart(obj) {
    this.$parent = null;
    this.name = obj.part_name;
    this.products = [];
    this.$name = null;
    this.$elements = null;

    let new_element = null;

    for (let i in obj.part_elements) {
        if (obj.part_elements[i].hasOwnProperty("name")) {
            new_element = new MenuTopElementColumnPartLink(obj.part_elements[i]);
            this.products.push(new_element);
        }
    }
}

/**
 * Добавляет часть меню в переданный в параметре столбец
 * @param $parent
 */
MenuTopElementColumnPart.prototype.init = function ($parent) {
    let new_element = null;
    this.$parent = $($parent);

    //добавляем имя
    this.$name = $('<h4 />', {});
    this.$name.text(this.name);
    this.$parent.append(this.$name);

    //добавляем ссылки
    this.$elements = $('<ul />', {});
    for (let elem of this.products) {
        elem.init(this.$elements);
    }
    this.$parent.append(this.$elements);

};

/************************************************************************************/

/**
 * Класс - реализующий элемент-ссылку в верхнем выпадающем меню
 * @param $parent
 * @param obj
 * @constructor
 */
function MenuTopElementColumnPartLink(obj) {
    this.$parent = null;
    this.name = obj.name;
    this.href = obj.href;
    this.$html = $('<li />', {});
}

/**
 * Создать HTML элемент и присоединить в меню
 */
MenuTopElementColumnPartLink.prototype.init = function ($parent) {
    this.$parent = $($parent);
    this.$html.append('<a href="' + this.href + '">' + this.name + '</a>');
    this.$parent.append(this.$html);
};

MenuTopElementColumnPartLink.prototype.render = function () {
    this.$html.find("a").attr("href", this.href);
    this.$html.find("a").text(this.name);
};

/************************************************************************************/

/**
 * Класс - реализующий картинку-ссылку в верхнем выпадающем меню
 * @param $parent
 * @param obj
 * @constructor
 */
function MenuTopElementColumnPicture(obj) {
    this.$parent = null;
    this.src = obj.src;
    this.alt = obj.alt;
    this.href = obj.href;
    this.text = obj.text;
    this.$html = $('<div />', {class: "Banner"});
}

/**
 * Создать HTML элемент и присоединить в меню
 */
MenuTopElementColumnPicture.prototype.init = function ($parent) {
    this.$parent = $($parent);
    let $link = $('<a />', {href: this.href});
    $(this.$html).append($link);

    let $div = $('<div />', {});
    $div.append("<span>" + this.text + "</span>");
    let $img = $('<img />', {
        "src": this.src,
        "alt": this.alt
    });
    $link.append($div);
    $link.append($img);

    $(this.$parent).append(this.$html);
};
