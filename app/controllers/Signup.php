<?php

class Signup extends Controller
{
    public function index()
    {
        $data['title'] = 'Todo - Signup';
        $data['year'] = date('Y');
        $data['url'] = $_REQUEST['url'] ?? 'signup';

        $this->view('layout/header', $data);
        $this->view('layout/navbar', $data);
        $this->view('auth/signup');
        $this->view('layout/footer', $data);
    }
}
