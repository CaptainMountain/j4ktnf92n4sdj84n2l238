"use strict";

$(document).ready(function () {
    let logon = new Logon($(".MyAccount"));

    $('.MyAccount').on('click', function () {
        logon.btnClick();

    });

    let $topMenu = $("#TopMenu");
    let menuTop = new MenuTop($topMenu);

    let $cart = $("#CartRows");
    let $basket = $("#Basket");
    let cart = new Cart($cart, logon, $basket);
    logon.cart = cart;
});