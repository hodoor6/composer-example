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

        // Regular expression
        preg_match_all('#<'.$tag.'[^>]*?>(.+?)</'.$tag.'>#su', $str, $res);
        // delete last elements array
       return  array_pop($res);
    }
}
