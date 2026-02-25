<?php
class DashboardController extends Controller {

    public function index(){
        $this->authCheck();
        $this->view("Backend/dashboard");
    }
}