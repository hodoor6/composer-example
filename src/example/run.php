<?php
require_once 'vendor/autoload.php';

//загрузить в корень сайта для проверки как работает библиотека
use hodoor\parser\Parser;


$parser = new Parser;
$tag= $parser->tagOutput($parser->process('https://getcomposer.org/doc/','h1'));

