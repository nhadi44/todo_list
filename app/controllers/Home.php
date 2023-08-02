<?php

class Home extends Controller
{
    public function index()
    {
        session_start();

        if (isset($_SESSION['user'])) {
            header('Location: ' . PATH . '/dashboard');
            exit;
        }

        $data['title'] = 'Todo List App';
        $data['url'] = $_REQUEST['url'] ?? 'home';
        $data['year'] = date('Y');
        $path = $_SERVER['REQUEST_URI'];

        if (strpos($path, 'taks') !== false || strpos($path, 'dashboard') !== false) {
            $data['class'] = 'd-none';
        } else {
            $data['class'] = 'footer_right-content col-md-3 col-sm-12 justify-content-end';
        }

        $this->view('layout/header', $data);
        $this->view('layout/navbar', $data);
        $this->view('layout/hero');
        $this->view('home/home');
        $this->view('layout/footer', $data);
    }
}
