<?php

if($_GET["page"] == "")
{
    $page = "home";
    require_once("resources/templates/header.php");
    require_once("resources/templates/homepage.php");
    require_once("resources/templates/footer.php");
}

if($_GET["page"] == "category")
{
    require_once("resources/templates/header.php");
    require_once("resources/templates/category.php");
    require_once("resources/templates/footer.php");
}

if($_GET["page"] == "information")
{
    require_once("resources/templates/header.php");
    require_once("resources/templates/info.php");
    require_once("resources/templates/footer.php");
}

if($_GET["page"] == "contact")
{
    require_once("resources/templates/header.php");
    require_once("resources/templates/contact.php");
}

if($_GET["page"] == "cart")
{
    require_once("resources/templates/header.php");
    require_once("resources/templates/cart.php");
}

if($_GET["page"] == "checkout")
{
    require_once("resources/templates/header.php");
    require_once("resources/templates/checkout.php");
}
if($_GET["page"] == "product")
{
    require_once("resources/templates/header.php");
    require_once("resources/templates/product.php");
    require_once("resources/templates/footer.php");
}


if($_GET["page"] == "account")
{
    require_once("resources/templates/header.php");
    require_once("resources/templates/account.php");
    require_once("resources/templates/footer.php");
}


if($_GET["page"] == "login")
{
    require_once("resources/templates/header.php");
    require_once("resources/templates/login.php");
}


if($_GET["page"] == "register")
{
    require_once("resources/templates/header.php");
    require_once("resources/templates/register.php");
}

if($_GET["page"] == "brands")
{
    require_once("resources/templates/header.php");
    require_once("resources/templates/brands.php");
    require_once("resources/templates/footer.php");
}



?>