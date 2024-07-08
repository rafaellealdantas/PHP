  
    <?php
    require_once "./header.php";
    ?>


<?php
$url = $_GET["url"] ?? null;
if($url == "feed"){
    header('location: ./paginas/feed.php');
    }else
if($url == "login"){
    header('location: ./paginas/login.php');
    }else
if($url == "logout"){
    header('location: ./paginas/logout.php');
    }else
if($url == "cadastrar"){
    header('location: ./paginas/novaConta.php');
}       
    
?>
