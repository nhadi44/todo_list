<?php

class Signup extends Controller
{
    public function index()
    {
        session_start();

        $data['title'] = 'Todo - Signup';
        $data['year'] = date('Y');
        $data['url'] = $_REQUEST['url'] ?? 'signup';

        $path = $_SERVER['REQUEST_URI'];

        if (strpos($path, 'taks') !== false || strpos($path, 'dashboard') !== false) {
            $data['class'] = 'd-none';
        } else {
            $data['class'] = 'footer_right-content col-md-3 col-sm-12 justify-content-end';
        }

        if (isset($_SESSION['user'])) {
            header('Location: ' . PATH . '/dashboard');
            exit;
        }

        $this->view('layout/header', $data);
        $this->view('layout/navbar', $data);
        $this->view('auth/signup');
        $this->view('layout/footer', $data);
    }

    public function store()
    {
        if ($_SERVER["REQUEST_METHOD"] != "POST") {
            // set status code to 405 (Method Not Allowed)
            echo json_encode(['error' => 'Method not allowed']);
            http_response_code(405);
            exit;
        }

        $data = [
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        try {
            // check if email already exist
            if ($this->model('User')->checkEmail($data['email'])) {
                echo json_encode(['error' => 'Email already exist']);
                http_response_code(409);
                exit;
            }

            if ($this->model('User')->store($data) > 0) {
                echo json_encode(['success' => 'User has been created']);
                http_response_code(201);
                exit;
            }
        } catch (\Throwable $th) {
            //throw $th;
            echo json_encode(['error' => $th->getMessage()]);
        }
    }
}
