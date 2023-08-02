<?php

class Dashboard extends Controller
{
    public function index()
    {
        session_start();
        // check if user not login then redirect to login page
        if (!isset($_SESSION['user'])) {
            header('Location: ' . PATH . '/signin');
            exit;
        }

        $data['title'] = 'Todo List App - Dashboard';
        $data['url'] = $_REQUEST['url'] ?? 'dashboard';
        $data['year'] = date('Y');
        $data['year'] = date('Y');
        $data['user'] = $_SESSION['user'];

        $data['activity'] = $this->model('Activity')->getActivityByUser($data['user']['id']);

        $path = $_SERVER['REQUEST_URI'];
        if (strpos($path, 'taks') !== false || strpos($path, 'dashboard') !== false) {
            $data['class'] = 'd-none';
        } else {
            $data['class'] = 'footer_right-content col-md-3 col-sm-12 justify-content-end';
        }


        $this->view('layout/header', $data);
        $this->view('layout/dashboard/navbar', $data);
        $this->view('dashboard/index', $data);
        $this->view('dashboard/createActivity');
        $this->view('dashboard/updateActivity');
        $this->view('dashboard/deleteActivity');
        $this->view('layout/footer', $data);
    }

    public function getActivityById($id)
    {
        // create rules for method must be POST
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            echo json_encode(['error' => 'Method not allowed']);
        }

        try {
            //code...
            $data['activity'] = $this->model('Activity')->getActivityId($id);
            echo json_encode($data['activity']);
        } catch (\Throwable $th) {
            //throw $th;
            echo json_encode(['error' => $th->getMessage()]);
        }
    }

    public function createActivity()
    {
        session_start();
        // create rules for method must be POST
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            echo json_encode(['error' => 'Method not allowed']);
            http_response_code(405);
            exit;
        }

        $data = [
            'name' => $_POST['activity'],
            'description' => $_POST['description'],
            'user_id' => $_SESSION['user']['id'],
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        try {
            //code...
            $this->model('Activity')->createActivityUser($data);
            echo json_encode(['success' => 'Activity has been created']);
        } catch (\Throwable $th) {
            //throw $th;
            echo json_encode(['error' => $th->getMessage()]);
        }
    }

    public function updateActivity()
    {
        session_start();
        // create rules for method must be POST
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            echo json_encode(['error' => 'Method not allowed']);
            http_response_code(405);
            exit;
        }

        $data = [
            'id' => $_POST['id'],
            'name' => $_POST['activity'],
            'description' => $_POST['description'],
            'user_id' => $_SESSION['user']['id'],
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        try {
            //code...
            $this->model('Activity')->updateActivityUser($data);
            echo json_encode(['success' => 'Activity has been updated']);
        } catch (\Throwable $th) {
            //throw $th;
            echo json_encode(['error' => $th->getMessage()]);
        }
    }

    public function deleteActivity()
    {
        session_start();

        // create rules for method must be POST
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            echo json_encode(['error' => 'Method not allowed']);
            http_response_code(405);
            exit;
        }

        $data = [
            'id' => $_POST['id'],
            'user_id' => $_SESSION['user']['id'],
        ];

        try {
            $this->model('Activity')->deleteActivityUser($data);
            echo json_encode(['success' => 'Activity has been deleted']);
        } catch (\Throwable $th) {
            echo json_encode(['error' => $th->getMessage()]);
        }
    }
}
