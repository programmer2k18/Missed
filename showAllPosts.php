<?php 
    session_start();
$connect = mysql_connect("localhost", "root", "");
$db = mysql_select_db("software", $connect) or exit("<h1>Error</h1>".mysql_error());
$strSQL  = "SELECT * from missed_thing";    
$strResult = mysql_query($strSQL);

?>

<!doctype html>
<html lang="en" lang="ar">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="We are an independant design and development agency that brings you and your ideas into the real world and gives you a spectacular values">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Missed</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body>
        <section class="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">    
                  <a class="navbar-brand hidden-lg" href="#">
                    <span>Miss<span>e</span>d</span>  
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="main">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item active" >
                        <a class="nav-link  active-link" href="home.html">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="posting.php">Post</a>
                      </li>    
                      <li class="nav-item">
                        <a class="nav-link " href="posting.php">Search</a>
                      </li>
                      <li class="nav-item" data-link=".testmonials">
                        <a class="nav-link" href="logout.php">Logout</a>
                      </li>       
                    </ul>
                  </div>
                </div>        
            </nav>        
        </section>
        <!--start section copyright-->
        
        <section class="latest-posts">
            <div class="container">
                <h1>Recent Posts</h1>
                <div class="row hid-data">
                    <?php
                      while($row = mysql_fetch_array($strResult,MYSQLI_ASSOC)){
                        $founder= $row['Username'];
                        $founderAddress = $row['address'];
                        $founded_data = $row['founded_Date'];
                        $founded_time = $row['time'];  
                        $category = $row['category'];
                        $foundedPlace =$row['place'];   
                          
                        echo"
                         <div class='col-sm-12 col-md-4 ' >
                            <div class='card'>
                              <img class='card-img-top' src='img/work-1.jpg' alt='Card image cap'>    
                              <div class='card-body'>
                                <h5 class='card-title'><img src='img/customer1.png'>$founder</h5>
                                <div class='add-data'>
                                    <div class='red'>
                                         $founderAddress
                                    </div>
                                    <div class='comment '>
                                         $founded_data
                                    </div>
                                </div>
                                <div class='clearfloat'></div>
                                <p class='card-text'>I have found something lost of category $category in $foundedPlace
                                 at the day starts $founded_data at $founded_time, So if you think its yours then you must verfiy your self
                                </p>
                                <a href='#' class='btn btn-danger'>Contact Me</a>
                              </div>
                            </div>
                         </div>
                        ";  
                      }
                      mysql_close(); 
                    ?>
                </div>
            </div>
        </section>
         
        <section class="copyright">
                    Copyright 2018 Missed &copy; All Rights Reserved
        </section>
        <!--end section copyright-->
        
        <script src="javascript/jquery-3.3.1.min.js"></script>
        <script src="javascript/bootstrap.min.js"></script>    
    </body>
</html>