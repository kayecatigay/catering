<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Main extends Controller {

    public function index() {
        $this->call->view('dashboard/admin');
    
    }

    public function login() {
        $this->call->view('auth/login');
    
    }

    public function test()
    {
        var_dump(base_url('Main/authenticate'));
    }

    public function authenticate()
    {
            //var_dump($_POST["email"]);
          $user=array("user"=>$_POST["email"], "pass"=>$_POST["pass"]);
          $this->call->model('auth/User');
          $data = $this->User->checkuser($user);
          if ($data){
                  $this->call->view('dashboard/admin',"");
          }
          else {
            echo "Your username and password does not exist!
        <a href='createnewuser'><button>Register</button></a>";
  }
    }

    public function show() {
        $this->call->model('Admin_model');
        $this->Admin_model->showAllUsers();
    }
} 