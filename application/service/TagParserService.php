<?php

namespace application\service;

class TagParserService
{
    public function countTags($html): array
    {
        preg_match_all('/<([^\/!][a-z1-9]*)/i', $html, $matches);
        // $count = count($matches[1]);
        $count = $matches[1];
        return $count;
    }
}