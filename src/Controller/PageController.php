<?php

namespace App\Controller;

class PageController
{
    public function home()
    {
        $filePath = APP_ROOT . "/templates/page/home.php";

        require_once $filePath;
    }
}
