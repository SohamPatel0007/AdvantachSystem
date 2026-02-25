<?php
class App
{
    protected $controller = "HomeController";
    protected $method = "index";
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();
        $area = "Frontend";

        if (isset($url[0]) && $url[0] == "admin") {
            $area = "Backend";
            unset($url[0]);
        }

        if ($area === "Backend") {
            $controllerName = ucfirst($url[0] ?? "auth") . "Controller";
        } else {
            $controllerName = ucfirst($url[0] ?? "home") . "Controller";
        }

        if (file_exists("../app/Controllers/$area/$controllerName.php")) {
            $this->controller = $controllerName;
            unset($url[0]);
        }

        require_once "../app/Controllers/$area/" . $this->controller . ".php";
        $this->controller = new $this->controller;

        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function parseUrl()
    {
        if (isset($_GET['url'])) {
            return explode("/", filter_var(rtrim($_GET['url'], "/"), FILTER_SANITIZE_URL));
        }
    }
}
