<?php
require_once(__DIR__.'/../../vendor/autoload.php');
use hodoor\parser\Parser;
//1.1.0
////Example
//$parser = new Parser;
//$tag= $parser->process('https://getcomposer.org/doc/','h1');
//$result = implode(" ",$tag);
//echo $result;


//2.0.0
////Example
$parser = new Parser;
$tag= $parser->process('h1','https://getcomposer.org/doc/');
$result = $parser->tagOutput($tag);
echo $result;

