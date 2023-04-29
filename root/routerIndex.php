<?php

    $router = new AltoRouter();


    $router->map( 'GET', '/', array(new cotrollerIndex(),'index') ,'index');

    $match = $router->match();

    

    if( is_array($match) && is_callable( $match['target'] ) ) {
        //如果有配對到網址
        call_user_func_array( $match['target'], $match['params'] ); 
    } else {
        //如果沒有配對到網址
        header( $_SERVER["SERVER_PROTOCOL"] . ' 404 找不到網頁');
    }
