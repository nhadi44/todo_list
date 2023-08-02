<?php

class App
{
    // properti untuk menentukan controller, method, dan parameter default
    protected $controller;
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $url = $this->parseURL();

        // controller
        // cek apakah ada file yang namanya sama dengan controller yang diinputkan user
        if (isset($url[0])) {
            if (file_exists('../app/controllers/' . $url[0] . '.php')) {
                // jika ada, timpa properti controller dengan controller yang baru
                $this->controller = $url[0];
                // hilangkan elemen array yang pertama
                unset($url[0]);
            } else {
                // jika tidak ada, maka gunakan controller default
                $this->controller = 'Home';
            }
        } else {
            // jika tidak ada, maka gunakan controller default
            $this->controller = 'Home';
        }


        // panggil controller yang baru
        require_once '../app/controllers/' . $this->controller . '.php';

        // instansiasi class yang baru
        $this->controller = new $this->controller;

        // method   

        // cek apakah ada method yang namanya sama dengan method yang diinputkan user
        if (isset($url[1])) {
            // cek apakah ada method yang namanya sama dengan method yang diinputkan user
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                // hilangkan elemen array yang kedua
                unset($url[1]);
            }
        }

        // params
        // cek apakah ada parameter yang diinputkan user
        if (!empty($url)) {
            // jika ada, maka timpa properti params dengan parameter yang baru
            $this->params = array_values($url);
        }

        // jalankan controller dan method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            // rtrim() untuk menghapus tanda / di akhir url
            $url = rtrim($_GET['url'], '/');

            // filter_var() untuk memastikan url yang diinputkan user adalah url yang valid
            $url = filter_var($url, FILTER_SANITIZE_URL);

            // pecah url berdasarkan tanda / menjadi array
            $url = explode('/', $url);
            return $url;
        }
    }
}
