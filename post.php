 <?php
    session_start();
class PostGenerator{
    public $connect;
    public $db;
    public $category;
    public $place;
    public $fdate;
    public $ftime;
    public $address;
    public function fillContents(){
        $this->category =$_POST['category'];
        $this->place=$_POST['place'];
        $this->fdate=$_POST['found_data'];
        $this->ftime=$_POST['time'];
        $this->address = $_POST['address'];
    }
    public function validatePostForm(){
        if(empty($_POST['time']) || empty($_POST['place']|| 
           empty($_POST['found_data'])|| empty($_POST['address'])|| empty($_POST['category']))){
            return false;
            header("location:posting.php");
        }
        else
        {
            return true;
        }
    }
    public function submitPost(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $connect = mysql_connect("localhost", "root", "");
            $db = mysql_select_db("software", $connect) or exit("<h1>Error</h1>".mysql_error());
            
            $email=$_SESSION['email'];
            $pass = $_SESSION['password'];
            $myUser = $_SESSION['firstname']." ".$_SESSION['lastname'];
            
            $queryUser = "select User_Id from user where Email ='$email' and Password='$pass'";
            $querydata = mysql_query($queryUser);
            $row=mysql_fetch_array($querydata,MYSQLI_ASSOC);
            $user_ssn = $row['User_Id'];

            $strSQL  = "insert into missed_thing (user_ssn,Username,address,category,place,founded_Date,time) values('$user_ssn','$myUser','$this->address','$this->category','$this->place','$this->fdate','$this->ftime');";    
            $strResult = mysql_query($strSQL);
            mysql_close();
            header("location: showAllPosts.php");
        }
        else
          echo "<h1> You are not allowed to access this page directly</h1>";    
    }
}

// call addpost method to add a new post to my posts
$mypost = new PostGenerator();
$mypost->fillContents();

if($mypost->validatePostForm()){
    $mypost->submitPost();
}
?>