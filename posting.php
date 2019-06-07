<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location:home.html");
}
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
        
        <!--start navbar-->
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
                        <a class="nav-link " href="showAllPosts.php"> AllPosts</a>
                      </li>    
                      <li class="nav-item" data-link=".testmonials">
                        <a class="nav-link" href="logout.php">Logout</a>
                      </li>       
                    </ul>
                  </div>
                </div>        
            </nav>        
        </section>
        <!--strat sign up section-->
        <section class="contact-us">
            <div class="container con">
                <div class="row">
                    <div class="col-sm-8 data">
                      <h2 style="text-align: center;opacity: 0.6;margin-bottom: 17px">Post about something found</h2>
                        
                      <form role="form" method="POST"  action="post.php" name="sign" id='formdata'>
                            <div class="form-group">
                                <input type="text" name="address" class="form-control input-lg" placeholder="Your Address" style="margin-bottom: 15px">
                            </div>
                            <div class="form-group">
                                <input type="text"  name="place" class="form-control input-lg" placeholder="Place of founding it" >
                            </div>
                            <div class="form-group">
                                <input type="date"  name="found_data" class="form-control input-lg">
                            </div>
                            <div class="form-group">
                                <input type="time" name="time" class="form-control input-lg" style="margin-bottom: 15px">
                            </div>
                            <div class="form-group">
                                <label>Select the category of the lost thing you have found!!</label><br>
                                 <input type="radio" name="category"style="margin-right:7px" value='money'>Money<br>
                                 <input type="radio" name="category"style="margin-right:7px" value='device'>Devices<br>
                                 <input type="radio" name="category"style="margin-right:7px" value='accessories'>Accessories<br>
                                 <input type="radio" name="category"style="margin-right:7px" value='clothes'>Clothes<br>
                                 <input type="radio" name="category"style="margin-right:7px" value='cards'>Cards<br>
                                
                            </div>
                            <div class="form-group fl">
                                <input type="submit" value="Post" name='sign' class="form-control input-lg btn btn-danger">
                            </div>
                            
                       </form>
                    </div>
                    <div class="col-sm-4" style="padding-top:23px">
                        <form role="form" method="post" action="search.php" name="search" class="search">
                            <div class="form-group">
                                <label>Select the category of the lost thing you want to search for!!</label><br>
                                 <input type="radio" name="category"style="margin-right:7px" value='money'>Money<br>
                                 <input type="radio" name="category"style="margin-right:7px" value='device'>Devices<br>
                                 <input type="radio" name="category"style="margin-right:7px" value='accessories'>Accessories<br>
                                 <input type="radio" name="category"style="margin-right:7px" value='clothes'>Clothes<br>
                                 <input type="radio" name="category"style="margin-right:7px" value='cards'>Cards<br>
                            </div>
                            <div class="form-group fl">
                                <input type="submit" value="Search" name='search' class="form-control input-lg btn btn-danger">
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>    
        <!--end sign up section-->
        
        <!--start section copyright-->
        <section class="copyright">
                    Copyright 2018 Missed &copy; All Rights Reserved
        </section>
        <!--end section copyright-->
        
        
        <script src="javascript/jquery-3.3.1.min.js"></script>
        <script src="javascript/bootstrap.min.js"></script>
        <!--<script src="javascript/validate.js"></script>-->    
    </body>
</html>