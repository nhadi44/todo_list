<?php

class Signin extends Controller
{
    public function index()
    {
        $data['title'] = 'Todo - Signin';

        $this->view('layout/header', $data);
        $this->view('auth/signin');
        $this->view('layout/footer');
    }
}
