<?php
//Arquivos de diretorios raizes
$PastaInterna = "php/mvc/";
define('DIRPAGE' , "http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");
if(substr($_SERVER['DOCUMENT_ROOT'],-1) =='/'){
    define('DIRREQ' , "{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");
}else{
    define('DIRREQ' , "{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}");
}
//Diretorios especificos
define('DIRIMG',DIRPAGE."public/img/");
define('DIRCSS',DIRPAGE."public/css/");
define('DIRJS',DIRPAGE."public/js/");
define('DIRFONTE', DIRPAGE."public/fontes/");
define('DIRDESIGN', DIRPAGE."public/design/");
define('DIRVIDEO', DIRPAGE."public/video/");
define('DIRAUDIO', DIRPAGE."public/audio/");



//Acesso ao banco de dados
define('HOST', "localhost");
define('DB', 'sistema2');
define('USER', "root");
define('PASS', "");