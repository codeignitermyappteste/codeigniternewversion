<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function submit(): void
    {
        if($this->request->getMethod() != 'post'){
            echo 'NOK';
        } else {
            echo 'OK';
        }
    }
}
