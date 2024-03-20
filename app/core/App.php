<?php
class App 
{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this ->parseURL();
        var_dump($url);
    }
    public function parseURL()
    {
        if(isset($_GET['url'])){
            //-> Ambil value urlnya.
            $url = $_GET['url'];
            $url = rtrim($url, '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url; 
        }
    }
}