<?php

class Signin extends Controller
{
    public function index()
    {
        $data['title'] = 'Todo - Signin';
        $data['year'] = date('Y');
        $data['url'] = $_REQUEST['url'] ?? 'signin';

        $this->view('layout/header', $data);
        $this->view('layout/navbar', $data);
        $this->view('auth/signin');
        $this->view('layout/footer', $data);
    }
}
