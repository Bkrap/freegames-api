<?php

/* DOCS: https://www.freetogame.com/api-doc */

function err($s) {
    echo "<pre>";
    print_r($s);
    echo "</pre>";
}

define('GAMES_PATH', "https://www.freetogame.com/api/games");
define('GAME_PATH', "https://www.freetogame.com/api/game");

function getAPI($url, $taxonomy = "", $value = "") {

    if( !empty($taxonomy) ) :
        $url .= "?" . $taxonomy . "=" . $value;
    else :
        $url;
    endif;

    if( !empty( $taxonomy ) && empty( $value ) ) :
        echo "ERROR: Value is empty!";
    endif;
    
    $json = file_get_contents($url);
    $json_decode = json_decode( $json );

    return $json_decode;

}

function getMultiAPI($url, $platform, $category, $sort_by) {

    $url .= "?platform={$platform}&category={$category}&sort-by={$sort_by}";

    
    $json = file_get_contents($url);
    $json_decode = json_decode( $json );

    return $json_decode;

}

//err(getAPI("https://www.freetogame.com/api/games", "category", "shooter"));
