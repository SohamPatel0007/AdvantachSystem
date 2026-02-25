<?php
class AuthController extends Controller {

    public function index(){
        $this->view("Backend/login");
    }

    public function login(){

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            Security::csrfVerify($_POST['csrf']);

            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $password = $_POST['password'];

            $adminModel = $this->model("Admin");
            $admin = $adminModel->findByEmail($email);

            if($admin && password_verify($password, $admin['password'])){
                $_SESSION['admin'] = $admin['id'];
                header("Location: /admin/dashboard");
                exit;
            } else {
                $_SESSION['error'] = "Invalid credentials";
                header("Location: /admin");
                exit;
            }
        }
    }

    public function logout(){
        session_destroy();
        header("Location: /admin");
        exit;
    }
}