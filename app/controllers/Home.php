<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Todo List App';
        $data['url'] = $_REQUEST['url'] ?? 'home';

        $data['test'] = [
            'name' => 'Rizky',
            'age' => 20,
            'address' => 'Indonesia'
        ];

        $this->view('layout/header', $data);
        $this->view('layout/navbar', $data);
        $this->view('layout/hero');
        $this->view('home/home', $data);
        $this->view('layout/footer');
    }
}
