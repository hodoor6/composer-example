<?php

namespace hodoor\parser;

/**
 * @author Aleksey Klimchuk <hodoor6@yandex.ua>
 */

class Parser implements ParserInterface
{
    public function process(string $url, string $tag) :array
    {

        $str = file_get_contents($url);
        preg_match_all('#<'.$tag.'[^>]*?>(.+?)</'.$tag.'>#su', $str, $res);
       return  array_pop($res);
    }
}
//Example
$parser = new Parser;
$tag= $parser->process('https://getcomposer.org/doc/','h1');
$result = implode(" ",$tag);
echo $result;

