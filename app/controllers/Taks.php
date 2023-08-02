<?php

class Taks extends Controller
{
    public function index($id)
    {
        session_start();

        if (!isset($_SESSION['user'])) {
            header('Location: ' . PATH . '/signin');
            exit;
        }

        $data['title'] = 'Todo List App - Taks';
        $data['url'] = $_REQUEST['url'] ?? 'dashboad/taks';
        $data['year'] = date('Y');

        $path = $_SERVER['REQUEST_URI'];

        if (strpos($path, 'taks') !== false || strpos($path, 'dashboard') !== false) {
            $data['class'] = 'd-none';
        } else {
            $data['class'] = 'footer_right-content col-md-3 col-sm-12 justify-content-end';
        }

        $data['taks'] = $this->getAllTaks($id);

        $taks = [
            'id' => $id,
            'user_id' => $_SESSION['user']['id']
        ];


        $data['activityName'] = $this->model('TaksModel')->getActivity($taks);

        $this->view('layout/header', $data);
        $this->view('layout/dashboard/navbar', $data);
        $this->view('dashboard/taks', $data);
        $this->view('dashboard/createTaks', $data);
        $this->view('dashboard/updateTaks');
        $this->view('dashboard/deleteTaks');
        $this->view('dashboard/finishedTaks');
        $this->view('layout/footer', $data);
    }

    public function getAllTaks($id)
    {
        $data['taks'] = $this->model('TaksModel')->getAllTaks($id);
        return $data['taks'];
    }

    public function getTaksId()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            echo json_encode(['error' => 'Method not allowed']);
            http_response_code(405);
            exit;
        }

        $data = [
            'id' => $_POST['id']
        ];

        try {
            $data['taks'] = $this->model('TaksModel')->getTaksId($data);
            http_response_code(200);
            echo json_encode($data['taks']);
        } catch (\Throwable $th) {
            //throw $th;
            echo json_encode(['error' => $th->getMessage()]);
        }
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            echo json_encode(['error' => 'Method not allowed']);
            http_response_code(405);
            exit;
        }

        $data = [
            'name' => $_POST['taks'],
            'description' => $_POST['description'],
            'priority' => $_POST['priority'],
            'activity_id' => $_POST['activityId'],
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'is_finished' => '0'
        ];

        try {
            //code...
            $this->model('TaksModel')->createTaks($data);
            echo json_encode(['success' => 'Taks has been created']);
            http_response_code(201);
            exit;
        } catch (\Throwable $th) {
            //throw $th;
            echo json_encode(['error' => $th->getMessage()]);
        }
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            echo json_encode(['error' => 'Method not allowed']);
            http_response_code(405);
            exit;
        }

        $data = [
            'id' => $_POST['id'],
            'activity_id' => $_POST['activityId'],
            'name' => $_POST['name'],
            'description' => $_POST['description'],
            'priority' => $_POST['priority'],
            'updated_at' => date('Y-m-d H:i:s'),
            'is_finished' => '0'
        ];

        try {
            //code...
            $this->model('TaksModel')->updateTaks($data);
            http_response_code(200);
            echo json_encode(['success' => 'Taks has been updated']);
            exit;
        } catch (\Throwable $th) {
            //throw $th;
            echo json_encode(['error' => $th->getMessage()]);
        }
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            echo json_encode(['error' => 'Method not allowed']);
            http_response_code(405);
            exit;
        }

        $data = [
            'id' => $_POST['id'],
            'activity_id' => $_POST['activityId'],
        ];

        try {
            //code...
            $this->model('TaksModel')->deleteTaks($data);
            http_response_code(200);
            echo json_encode(['success' => 'Taks has been deleted']);
            exit;
        } catch (\Throwable $th) {
            //throw $th;
            echo json_encode(['error' => $th->getMessage()]);
        }
    }

    public function finishTask()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            echo json_encode(['error' => 'Method not allowed']);
            http_response_code(405);
            exit;
        }

        $data = [
            'id' => $_POST['id'],
            'activity_id' => $_POST['activity_id'],
            'is_finished' => 1,
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        try {
            //code...
            $this->model('TaksModel')->finishTask($data);
            http_response_code(200);
            echo json_encode(['success' => 'Taks has been finished']);
            exit;
        } catch (\Throwable $th) {
            //throw $th;
            echo json_encode(['error' => $th->getMessage()]);
        }
    }
}
