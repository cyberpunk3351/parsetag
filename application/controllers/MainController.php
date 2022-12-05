<?php

namespace application\controllers;

use application\core\Controller;
use application\service\TagParserService;
use application\service\HtmlParserService;

class MainController extends Controller
{
    public function indexAction()
    {
        $url = 'https://www.php.net/manual/en/class.domdocument.php';

        $hyperTextService = new HtmlParserService();
        $HTML = $hyperTextService->parseHtmlFromUrl($url);

        $tagService = new TagParserService();
        $amountOfTags = $tagService->countTags($HTML);

        $this->view->render('Главная', array_count_values($amountOfTags));
    }
}