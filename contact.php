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


<!--

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="welcome.php">Poddar College of Technology and Management </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">


                    <li>
                        <a href="welcome.php"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <?php echo $_SESSION['name'];?></a>
                    </li>
<li>
    <a href="course.php">Course</a>
</li>

                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav>
-->



<br><br>
<h1 align="center" style="font-size: 40px; color: black;">Contact Us</h1>
    <h2 align="center" style="color: black;"><br><br>We will Contact you<br><br></h2>
<br>








<form method="POST" action="insert.php" style="text-align: center; color: black;">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    First Name:<input type="text" name="firstname" placeholder="First Name" style="width: 30%; height: 20px; background: transparent; color: black;" required><br><br>

    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

    Last Name:<input type="text" name="lastname" placeholder="Last Name" style="width: 30%; height: 20px; background: transparent;color: black;"required><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    Email Add.:
    <input type="Email" name="email" placeholder="email address" style="width: 30%; height: 20px; background: transparent; color: black;required"><br><br>

    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    Mobile No.:

    <input type="text" name="mobile" placeholder="Mobile number" style="width: 30%; height: 20px; background: transparent; color: black;"required> <br><br>


    <input type="submit" name="submit" style="background-color: orange; width: 80px; height: 35px;">

</form>

<br><br><br><br>

</div>










    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>



    <div>
        

    </div>


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





