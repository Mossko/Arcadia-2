<?php

namespace App\Controller;

use App\Controller\PageController;

class controller
{
    protected function render(string $path, array $params = []): void
    {
        $filePath = APP_ROOT . "/templates/$path.php";

        if (!file_exists($filePath)) {
            echo "Le fichier $filePath n'existe pas";
        } else {
            extract($params);
            require_once $filePath;
        }
    }
}
