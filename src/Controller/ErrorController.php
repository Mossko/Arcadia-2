<?php

namespace App\Controller;

class ErrorController extends controller
{
    public function show(string $errormessage): void
    {
        $this->render("Errors/default", [
            "errormessage" => $errormessage
        ]);
    }
}
