<?php

class Taks extends Controller
{
    public function index()
    {
        $data['title'] = 'Todo List App - Taks';
        $data['url'] = $_REQUEST['url'] ?? 'dashboad/taks';
        $data['year'] = date('Y');

        $path = $_SERVER['REQUEST_URI'];

        if (strpos($path, 'taks') !== false || strpos($path, 'dashboard') !== false) {
            $data['class'] = 'd-none';
        } else {
            $data['class'] = 'footer_right-content col-md-3 col-sm-12 justify-content-end';
        }

        $data['year'] = date('Y');

        $this->view('layout/header', $data);
        $this->view('layout/dashboard/navbar', $data);
        $this->view('dashboard/taks', $data);
        $this->view('dashboard/createTaks');
        $this->view('dashboard/updateTaks');
        $this->view('layout/footer', $data);
    }
}
