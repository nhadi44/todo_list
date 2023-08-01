<?php

class Dashboard extends Controller
{
    public function index()
    {
        // // check if user not login then redirect to login page
        // if (!isset($_SESSION['user'])) {
        //     header('Location: ' . PATH . '/signin');
        //     exit;
        // }

        $data['title'] = 'Todo List App - Dashboard';
        $data['url'] = $_REQUEST['url'] ?? 'dashboard';
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
        $this->view('dashboard/index', $data);
        $this->view('dashboard/createActivity');
        $this->view('dashboard/updateActivity');
        $this->view('layout/footer', $data);
    }

    public function getData()
    {
        //    get all request from ajax 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'activity_name' => $_POST['activity_name'],
                'activity_description' => $_POST['activity_description']
            ];
        }

        echo json_encode($data);
    }
}
