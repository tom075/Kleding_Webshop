<?php

if($_GET["page"] == "")
{
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
    require_once("resources/templates/footer.php");
}

if($_GET["page"] == "cart")
{
    require_once("resources/templates/header.php");
    require_once("resources/templates/cart.php");
    require_once("resources/templates/footer.php");
}

if($_GET["page"] == "checkout")
{
    require_once("resources/templates/header.php");
    require_once("resources/templates/checkout.php");
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
    require_once("resources/templates/footer.php");
}


if($_GET["page"] == "register")
{
    require_once("resources/templates/header.php");
    require_once("resources/templates/register.php");
    require_once("resources/templates/footer.php");
}


if($_GET["page"] == "admin")
{
    require_once("resources/templates/admin.php");
}



?>