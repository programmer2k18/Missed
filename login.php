
<?php
session_start();
class login{
    public $email;
    public $pass;
    
    public function checkEmailAndPassword(){
        if(empty($_POST['email']) || empty($_POST['password'])) {
            header("location: login.html");
        }
        else
        {
            return true;
        }
    }
    public function getEmailAndPass(){
        $this->email = $_POST['email'];
        $this->pass = $_POST['password'];
    }
    public function loginUser(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){

        $connect = mysql_connect("localhost", "root", "");
        $db = mysql_select_db("software", $connect) or exit("<h1>Error</h1>".mysql_error());

        
        $strSQL  = "SELECT * from user where Email = '$this->email' and Password= '$this->pass'";    
        $strResult = mysql_query($strSQL);
        $row = mysql_fetch_array($strResult,MYSQLI_ASSOC);
        $count = mysql_num_rows($strResult);
        if($count === 1){
            $_SESSION['firstname'] = $row['Fname'];
            $_SESSION['lastname'] = $row['Lname'];
            $_SESSION['email'] = $row['Email'];
            $_SESSION['password'] = $row['Password'];
            $_SESSION['age'] = $row['Age'];
            $_SESSION['birthdate'] = $row['Bdate'];
            $_SESSION['gender'] = $row['Gender'];
            header("location: posting.php");
            mysql_close();
        }
        else{
            echo "<h1> User Account not found</h1>";
            header("location: login.html");
                mysql_close();
        }
    }
    else
    {
      echo "<h1> You are not allowed to access this page directly</h1>";
      echo "<a href ='login.html'>Back to login page</a>";    
    }    
}
}

$user = new login();
if($user->checkEmailAndPassword()){
    $user->getEmailAndPass();
    $user->loginUser();
}





?>