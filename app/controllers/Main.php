<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Main extends Controller {

    public function index() {
        $this->call->view('home/homepage');
    
    }

    public function login() {
        $this->call->view('auth/login');
    
    }

    public function register() {
        $this->call->view('auth/register');
    
    } 
    

    public function saveuserdata()
    {
        $user=array("firstname"=>$_POST["fname"], "lastname"=>$_POST["lname"], "password"=>$_POST["pass"], 
        "address"=>$_POST["add"], "contactnum"=>$_POST["contactnum"], "emailadd"=>$_POST["emailadd"]);
        $this->call->model('auth/User');
        $data = $this->User->savedatabase($user);
        if ($data){
                $this->call->view('auth/login',"");
        }
        else {
          echo "Your username and password does not exist!
            <a href='http://localhost/CReservation/Main/login'><button>Register</button></a>";
        }
    }

   public function authenticate()
    {
        //var_dump($_POST["email"]);
        $user=array("user"=>$_POST["email"], "pass"=>$_POST["pass"]);
        $this->call->model('auth/User');
        $data = $this->User->checkuser($user);
        if ($data){

                $this->call->model('auth/Reservation');
                $datadate = $this->Reservation->getdatedata(1);
                $gdata["jan"]=intval($datadate);

                $datadate = $this->Reservation->getdatedata(2);
                $gdata["feb"]=intval($datadate);

                $datadate = $this->Reservation->getdatedata(3);
                $gdata["mar"]=intval($datadate);

                $datadate = $this->Reservation->getdatedata(4);
                $gdata["apr"]=intval($datadate);
                
                $datadate = $this->Reservation->getdatedata(5);
                $gdata["may"]=intval($datadate);
                
                $datadate = $this->Reservation->getdatedata(6);
                $gdata["jun"]=intval($datadate);
                
                $datadate = $this->Reservation->getdatedata(7);
                $gdata["jul"]=intval($datadate);
                
                $datadate = $this->Reservation->getdatedata(8);
                $gdata["aug"]=intval($datadate);
                
                $datadate = $this->Reservation->getdatedata(9);
                $gdata["sep"]=intval($datadate);
                
                $datadate = $this->Reservation->getdatedata(10);
                $gdata["oct"]=intval($datadate);

                $datadate = $this->Reservation->getdatedata(11);
                $gdata["nov"]=intval($datadate);

                $datadate = $this->Reservation->getdatedata(12);
                $gdata["dec"]=intval($datadate);

                $datares = $this->Reservation->showAllReserve();


                $alldata=array('gdata'=>$gdata,'cdata'=>$datares);
                // var_dump($alldata["cdata"][0]["name"]);

                $this->call->view('dashboard/admin',$alldata);
        }
        else 
        {
            echo "Your username and password does not exist!
            <a href='http://localhost/CReservation/Main/register'><button>Register</button></a>";
        }
    }

    public function savereservation()
    {
        $reserve=array("name"=>$_POST["name"], "email"=>$_POST["emailadd"], "address"=>$_POST["add"],
        "contactnum"=>$_POST["contact"], "Date"=>$_POST["date"], "themedetails"=>$_POST["theme"]);
        $this->call->model('auth/Reservation');
        $data = $this->Reservation->savetodatabase($reserve);
        if($data){
            $this->call->view('home/homepage',"");
        }
        else{
            echo"Fill up again.";
        }
    }

    public function checkavailability($cdate)
    {   
        $this->call->model('auth/Reservation');
        $data = $this->Reservation->checkdateandtime($cdate);
        if($data){
            echo "This date is already taken. Choose again";
        }
        else{
            echo"Available";
        }
    }

    public function getdatedata($gmonth)
    {
        $this->call->model('auth/Reservation');
        $data = $this->Reservation->getdatedata($gmonth);
        if($data){
            echo $data;
        }
        else{
            echo"Available";
        }
    }
    
    public function deletereservation()
    {
        $name= $_POST["name"];
        $this->call->model('auth/Reservation');
        $data['cdata'] = $this->Reservation->deletefromdatabase($name);
        echo"Reservation deleted successfully!";
        echo"<a href='http://localhost/CReservation/app/views/dashboard/admin'><button>Back</button></a>";
    }

    public function editform()
    {
        $this->call->view('auth/editform',"");
    }

    public function editreservation()
    {
        $reserve=array("name"=>$_POST["name"], "email"=>$_POST["emailadd"], "address"=>$_POST["add"],
        "contactnum"=>$_POST["contact"], "Date"=>$_POST["date"], "themedetails"=>$_POST["theme"]);
        $this->call->model('auth/Reservation');
        $data['cdata'] = $this->Reservation->editfromdatabase($reserve);
        echo"Reservation edited successfully!";
        echo"<a href='http://localhost/CReservation/Main/dashboard'><button>Back</button></a>";
    }
}