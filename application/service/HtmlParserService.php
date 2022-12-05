<?php

namespace application\service;

class HtmlParserService
{
    public function parseHtmlFromUrl($url)
    {
        $HTML = file_get_contents($url);
        return $HTML;
    }
}