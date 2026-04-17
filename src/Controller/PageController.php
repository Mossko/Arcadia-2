<?php

namespace App\Controller;

class PageController extends controller
{
    public function home(): void
    {
        $gretting = "Hello";
        $name = "Moktar";

        $this->render("page/home", [
            "gretting" => $gretting,
            "name" => $name,
        ]);
    }

    public function about(): void
    {
        $this->render("page/about");
    }
}
