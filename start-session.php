<?php
ob_start();

function url(){
    if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
    return $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}

function content($url) {
    if ($url === "potato-katie.com") {
        return "<img style='position: absolute; margin: auto; top: 0;left: 0;right: 0;bottom: 0;' src=\"https://annasys.com/cafe9/potato.png\">";
    }else if($url === "https://o2-heroku.herokuapp.com/") {
        return "<img style='position: absolute; margin: auto; top: 0;left: 0;right: 0;bottom: 0;' src=\"https://annasys.com/cafe9/oxy.png\">";
    }else if($url === "annasys.com") {
        return "<img style='position: absolute; margin: auto; top: 0;left: 0;right: 0;bottom: 0;' src=\"https://annasys.com/cafe9/cafe.png\">";
    }else if($url === "garciaworks.com") {
        return "<img style='position: absolute; margin: auto; top: 0;left: 0;right: 0;bottom: 0;' src=\"https://annasys.com/cafe9/works.png\">";
    }else {
        return "";
    }
}
if(isset($_GET["name"])){
    setcookie('name', $_GET["name"], time() + 60*60*24*30);

    $url = explode('/', url());
    array_pop($url);
    $home_url = implode('/', $url);

    if( isset($_SERVER['HTTP_SEC_FETCH_DEST']) && $_SERVER['HTTP_SEC_FETCH_DEST'] == 'iframe' ) {
        echo content($_SERVER['HTTP_HOST']);
    }else{
        header( "Location: {$home_url}" );
    }

}
