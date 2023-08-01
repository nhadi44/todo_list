<?php

// Class Controller sebagai parent class untuk semua controller

class Controller
{
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
}
