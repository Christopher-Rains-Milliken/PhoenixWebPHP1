<?php
if(mb_strtolower(trim($_SERVER['REQUEST_URI'], "/")) === "routes.php") exit("Direct access to this file is not allowed.");

$routes['/contact'] = [
    "controller"  => "Home",
    "action"      => "Contact",
    "webservice"  => false
];
$routes['/about'] = [
    "controller"  => "Home",
    "action"      => "About",
    "webservice"  => false
];
$routes['/legal'] = [
    "controller"  => "Legal",
    "action"      => "Index",
    "webservice"  => false
];
$routes['/legal/terms'] = [
    "controller"  => "Legal",
    "action"      => "Terms",
    "webservice"  => false
];
$routes['/legal/privacy'] = [
    "controller"  => "Legal",
    "action"      => "Privacy",
    "webservice"  => false
];
$routes['/shop'] = [
    "controller"  => "Shop",
    "action"      => "Index",
    "webservice"  => false
];
$routes['/shop/categories'] = [
    "controller"  => "Shop",
    "action"      => "Redirect",
    "webservice"  => false
];
$routes['/shop/categories/[A-Za-z\-]+'] = [
    "controller"  => "Shop",
    "action"      => "Category",
    "webservice"  => false
];
$routes['/shop/collections'] = [
    "controller"  => "Shop",
    "action"      => "Redirect",
    "webservice"  => false
];
$routes['/shop/collections/(:alpha)'] = [
    "controller"  => "Shop",
    "action"      => "Collection",
    "webservice"  => false
];
$routes['/shop/details/(:num)'] = [
    "controller"  => "Shop",
    "action"      => "Details",
    "webservice"  => false
];
$routes['/shop/cart'] = [
    "controller"  => "Shop",
    "action"      => "Cart",
    "webservice"  => false
];
$routes['/webservices/add'] = [
    "controller"  => "WebApi",
    "action"      => "Add",
    "webservice"  => true
];
$routes['/webservices/remove'] = [
    "controller"  => "WebApi",
    "action"      => "Remove",
    "webservice"  => true
];