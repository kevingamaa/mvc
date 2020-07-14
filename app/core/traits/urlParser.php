<?php

namespace Core\Traits;


trait  TraitUrlParser {
    public function parseUrl($url = '') {
        if(empty($url))
        {
            $url = $_SERVER['REQUEST_URI'];
        }
        if($url == '/')
        {
           $url = '';
        } else {
            $url = substr($url, 1);
        }

        $explode =  explode('/', rtrim($url) );
        // dd($explode[1] == 'public', strstr( __DIR__,   $explode[0]) );
        if(isset($explode[1]))
        {
            if(strstr( __DIR__,   $explode[0])  && $explode[1] == 'public'   ) {
                $url =   str_replace("{$explode[0]}/public/", "", $url);
            }
        }
        
        return explode('/', $url);

    }
}