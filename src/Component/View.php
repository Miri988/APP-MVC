<?php

namespace App\Mvc\Component;

class View
{
    public static function build(string $template, string $page, array $data = []): void // $template = 'main'
    {
        $template = TEMPLATES_PATH . DIRECTORY_SEPARATOR . $template . '.php';
        $page = PAGES_PATH . DIRECTORY_SEPARATOR . $page . '.php';

        $data['pagePath'] = $page;

        extract($data);

        require ($template);
    }
}
