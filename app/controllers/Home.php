<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Todo List App';
        $data['url'] = $_REQUEST['url'] ?? 'home';
        $data['year'] = date('Y');

        $this->view('layout/header', $data);
        $this->view('layout/navbar', $data);
        $this->view('layout/hero');
        $this->view('home/home');
        $this->view('layout/footer', $data);
    }
}
