<?php

class Signin extends Controller
{
    public function index()
    {
        session_start();
        $data['title'] = 'Todo - Signin';
        $data['year'] = date('Y');
        $data['url'] = $_REQUEST['url'] ?? 'signin';

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
        $this->view('auth/signin');
        $this->view('layout/footer', $data);
    }

    public function authenticate()
    {
        session_start();
        if ($_SERVER["REQUEST_METHOD"] != "POST") {
            // set status code to 405 (Method Not Allowed)
            echo json_encode(['error' => 'Method not allowed']);
            http_response_code(405);
            exit;
        }

        $data = [
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];

        try {
            // check if email already exist
            if (!$this->model('User')->checkEmail($data['email'])) {
                echo json_encode(['error' => 'Invalied email or password']);
                http_response_code(404);
                exit;
            }

            $user = $this->model('User')->getUser($data['email']);

            if (password_verify($data['password'], $user['password'])) {

                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'email' => $user['email'],
                ];

                echo json_encode(['success' => 'User has been logged in']);
                http_response_code(200);
                exit;
            } else {
                echo json_encode(['error' => 'Password is wrong']);
                http_response_code(401);
                exit;
            }
        } catch (\Throwable $th) {
            //throw $th;
            echo json_encode(['error' => $th->getMessage()]);
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header('Location: ' . PATH . '/signin');
        exit;
    }
}
