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

    public function contact(): void
    {
        $this->render("page/contact");
    }

    public function service(): void
    {
        $this->render("page/service");
    }

    public function connexion(): void
    {
        $this->render("page/connexion");
    }

    public function habitat(): void
    {
        $this->render("page/habitat");
    }

    public function savane(): void
    {
        $this->render("page/habitats/savane");
    }

    public function marais(): void
    {
        $this->render("page/habitats/marais");
    }

    public function jungle(): void
    {
        $this->render("page/habitats/jungle");
    }
}
