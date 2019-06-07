<?php
$page = $_GET['page'];

if (isset($_GET['category'])){
    $page = $_GET['category'];
}

echo $page;
?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/projecten/kleding_webshop/css/styles.css">
    <!-- Import Library's -->
    <script src="/projecten/kleding_webshop/resources/library/jquery.min.js"></script>
    <script src="/projecten/kleding_webshop/resources/library/slippry.min.js"></script>
    <link rel="stylesheet" href="/projecten/kleding_webshop/resources/library/slippry.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/projecten/kleding_webshop/resources/library/tailwind.min.css">

    <!-- Page title -->
    <title>Men's Only - </title>
</head>
<body>
<header>
    <div class="bg-gray-900 flex">
        <a class=" m-auto text-center w-auto self-center" href="/projecten/kleding_webshop"><img class="self-center max-w-xs" src="/projecten/kleding_webshop/img/layout/logo.png" alt=""></a>
    </div>
    <nav class="font-sans h-auto bg-gray-900 text-white  content-center flex-row text-center justify-between py-2 px-6  shadow-lg border-t border-gray-600 items-baseline w-full flex">
        <div class="w-1/3 text-left">
            <a href="/projecten/kleding_webshop/categorie/kleding" class="<?php if($page == "clothes"){echo "active";} ?> font-bold text-md no-underline self-left text-grey-darker hover:text-red-600 ml-2 px-1 pb-1">Kleding</a>
            <a href="/projecten/kleding_webshop/categorie/schoenen" class="<?php if($page == "shoes"){echo "active";} ?> font-bold text-md no-underline self-left text-grey-darker hover:text-red-600 ml-2 px-1 pb-1">Schoenen</a>
            <a href="/projecten/kleding_webshop/categorie/accessoires" class="<?php if($page == "accessories"){echo "active";} ?> font-bold text-md no-underline self-left text-grey-darker hover:text-red-600 ml-2 px-1 pb-1">Accessoires</a>
            <a href="/projecten/kleding_webshop/categorie/merken" class="<?php if($page == "brands"){echo "active";} ?> font-bold text-md no-underline self-left text-grey-darker hover:text-red-600 ml-2 px-1 pb-1">Merken</a>
            <a href="/projecten/kleding_webshop/informatie" class="<?php if($page == "information"){echo "active";} ?> font-bold text-md no-underline self-left text-grey-darker hover:text-red-600 ml-2 px-1 pb-1">Informatie</a>
        </div>
        <div class="w-1/3">
            <input class=" self-center  h-14 rounded text-gray-900  focus:outline-none focus:none text-xl px-8 shadow-lg" type="search" placeholder="Zoeken...">
        </div>
        <div class="w-1/3 text-right">
            <a href="/projecten/kleding_webshop/account"><i class="hover:text-red-600 mr-3 fa fa-user fa-2x"></i></a>
            <a href="/projecten/kleding_webshop/winkelwagen"><i class="hover:text-red-600 fa fa-shopping-cart fa-2x"></i></a>
        </div>
    </nav>
</header>