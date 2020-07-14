<?php
#diretorios raiz
$internPath = "";
define('DIRPAGE', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/" );
// dd
if(substr($_SERVER['DOCUMENT_ROOT'], -1) === '/') 
{
    define('DIRREQ',  __DIR__."/../{$internPath}");
} else {
    define('DIRREQ', __DIR__."/../{$internPath}"); 
}


#diretorio especifico
define('DIRPUBLIC',  DIRPAGE."public/");
define('VIEW',  DIRREQ."views/");

