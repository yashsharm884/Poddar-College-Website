<?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
  
?>






<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to Poddar College </title>

</head>
    <style>
.footer
{
    background-color: #953b1d;
    text-align: center;
    color: white;
    padding: 10px 20px;
    height: 250px;
}

.footer a
{
    color: white;
    padding: 0px 20px;
}


.footer a li
{
    float: right;
    margin-right: 10px;
    text-align: center;
    display: block;
    padding: 5px;
}

.header
{
    width: 100%;
    height: 80px;
    display: block;
    background-color: #101010;

}

.inner_header
{
    width: 1000px;
    margin: 0 auto;
    display: block;
    height: 100%;
    
}

.logo_container
{
    height: 100%;
    display: table;
    float: left;
}

.logo_container h1{
    color: white;
    height: 100%;
    display: table-cell;
    vertical-align: middle;
    font-family: 'Montserrat';
    font-size: 32px;
    font-weight: 200px;
}

.logo_container span{
    font-weight: 800px;
}

.navigation{
    float: right;
    height: 100%;
}

.navigation a{
    height: 100%;
    display: table;
    float: left;
    padding: 0px 20px;
}

.navigation a li{
    display: table-cell;
    vertical-align: middle;
    height: 100%;
    color: white;
    font-family: 'Montserrat';
    font-size: 16px;
}

    </style>





<body style="background-color: #ebcab7">


    <div class="header" >
        <div class="inner_header">
            <div class="logo_container">
        <a href="welcome.php"> <br> 
                <h1>Poddar College</span></h1>
            </div>

            <ul class="navigation">



                    <a href="welcome.php"><li><?php echo $_SESSION['name'];?></li></a>
                    <a href="course.php"><li>Course</li></a>
                    <a href="logout.php"><li>Logout</li></a>
                    <a href="contact.php"><li>Contact</li></a>
            </ul>
        </div>
        </div>
<br><br>

<br>

<a href="course.php" style="color: black">
<h2 align="center">Course</h2>
</a>

<br><br>

<p align="center">
<img src="images/00.jpg" style="background-size: 100% 100%; width: 80%">
</p>
<br><br>


<h3 align="center">We offer three Courses for the students:------</h3>

<br><br>

<p align="center">
<button onclick="window.location.href = 'bca.php';" style="">BCA</button>

<br> <br>

<button onclick="window.location.href = 'bsc.php';" style="">B.Sc</button>

<br><br>

<button onclick="window.location.href = 'bcom.php';" style="">B.Com</button>


</p>



<br><br><br>




    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <div></div>

<div class="footer">
<br><br>

          
                             
                             Poddar College Technology Management, <br>
                             Near SP Office
                             Krishna Nagar <br>
                             Bharatpur
<br><br>
<br><br><br>
Created by Poddar College Students
</div>

</body>

</html>
<?php } ?>





