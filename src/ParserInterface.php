<?php
namespace hodoor\parser;
/**
 * @author Aleksey Klimchuk <hodoor6@yandex.ua>
 */
interface ParserInterface
{

    /**
     * @param string $url
     * @param string $tag
     * @return array
     */
    public function process(string $url, string $tag): array;
}
