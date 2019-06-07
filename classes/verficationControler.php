<?php
//include("classes/userClass.php");
session_start();
class verficationControler {
    
    public $firstName;
    public $lastName;
    public $email;
    public $pass;
    public $confirmPass;
    public $age;
    public $gender;
    public $bDate;
    public function __construct()
    {
       
    }
    public function setUserData($fname, $lname,$em, $p,$confi,$age,$gen,$date){
        $this->firstName=$fname;
        $this->lastName=$lname;
        $this->email=$em;
        $this->pass=$p;
        $this->confirmPass=$confi;
        $this->age=$age;
        $this->gender=$gen;
        $this->bDate=$date;
    }
    public function validateData(){
        if(empty($this->firstName)||empty($this->lastName)||empty($this->email)||empty($this->pass)
          ||empty($this->confirmPass)||empty($this->age)||empty($this->gender)||empty($this->bDate)){
            session_destroy();
            header("location: signup.html");
            return false;
        }
        if($this->pass !== $this->confirmPass){
            session_destroy();
            header("location: signup.html");
            return false;
        }
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            session_destroy();
            header("location: signup.html");
            return false;
        }
        if($this->age<0){
            session_destroy();
            header("location: signup.html");
            return false;
        }
        else{
            return true;
        }
    }
    public function InsertUser(){
        $connect = mysql_connect("localhost", "root", "");
        $db = mysql_select_db("software", $connect) or exit("<h1>Error</h1>".mysql_error());
        $strSQL  = "select Email, Password from user";    
        $strResult = mysql_query($strSQL);
        
        $_GLOBAL['flag'] =true; 
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            while($fch = mysql_fetch_array($strResult))
            {
                $DBemail = $fch['Email'];
                $DBpass = $fch['Password'];   
                if($DBemail ===  $this->email && $DBpass === $this->pass)
                {
                    $_GLOBAL['flag']=false;
                    mysql_close();
                    header("location: signup.html");
                    break;
                }		
            }
            if($_GLOBAL['flag']){
                $_SESSION['firstname'] = $this->firstName;
                $_SESSION['lastname'] = $this->lastName;
                $_SESSION['email'] = $this->email;
                $_SESSION['password'] = $this->pass;
                $_SESSION['age'] = $this->age;
                $_SESSION['birthdate'] = $this->bDate;
                $_SESSION['gender'] = $this->gender;
            
                $strSQL  = "insert into user(Fname,Lname,Email,Password,Age,Bdate,Gender) values('$this->firstName','$this->lastName','$this->email','$this->pass','$this->age','$this->bDate','$this->gender');";    
                $strResult = mysql_query($strSQL);
                mysql_close();
                header("location: posting.php");
            }
        }
        else
        {
            echo "<h1> You are not allowed to access this page directly</h1>";
            header("location: home.html");
            mysql_close();
        }
    }
}

?>