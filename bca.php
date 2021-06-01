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

table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th    {
    background-color:#f1b458;
    color: white;
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

    </style>


<br>

    <div class="admission">
       <div class="container">
          <div class="terms">
            <h1>BCA (Bachelor of Computer Application)</h1>
              <div class="terms_top">
              <p>Bachelor of Computer Application (B.C.A.) is a three years full-time undergraduate program catering the need of student in various fields. B.C.A. Program is suitable for students who have just passed 10+2 and want to pursue a career in the field of information Technology. Student will be exposed to advanced software application e-business and website management. Successful candidates will be able to take up programming jobs in the corporate companies.</p>
                <h3>Job Opportunity </h3>
                <ul class="terms_list">
                <li>System Analyst </li>
                <li>Software Development</li>
                <li>Data Entry Operator </li>
                <li>Hardware</li>
                </ul>
                
                
                </div> 
        <h1>Course Structure  </h1>
        <table id="t01">
                <tr>
                    <th colspan="3" style="text-align:center;">BCA FIRST YEAR</th>
                        
                </tr>
                <tr>
                    <th>Lab/Theory </th>
                    <th>Code</th>       
                    <th>Subject</th>        
                </tr>
                      
                <tr>
                    <td>Theory</td>
                    <td>101</td>
                    <td>Elementary Physics</td>
                </tr>
                <tr>
                    <td>Theory</td>
                    <td>102</td>
                    <td>Basic Mathematics</td>
                </tr>
                <tr>
                    <td>Theory</td>
                    <td>103</td>
                    <td>General English</td>
                </tr>
                <tr>
                    <td>Theory</td>
                    <td>104</td>
                    <td>Principles of Programming Language (Through 'C')</td>
                </tr>
                <tr>
                    <td>Theory</td>
                    <td>105</td>
                    <td>Computer Organization</td>
                </tr>
                <tr>
                    <td>Theory</td>
                    <td>106</td>
                    <td>Office Management Tools</td>
                </tr>
                <tr>
                    <td>Lab</td>
                    <td>107</td>
                    <td>Technical Writing and Communication Skills</td>
                </tr>
                <tr>
                    <td>Lab</td>
                    <td>108</td>
                    <td>C-Laboratory</td>
                </tr>
                <tr>
                    <td>Lab</td>
                    <td>109</td>
                    <td>Office Automation Laboratory</td>
                </tr>
                <tr>
                    <td>Lab</td>
                    <td>110</td>
                    <td>Typing Skills Laboratory (English and Hindi Language)</td>
                </tr>
                            
</table>
          <table id="t01" style="margin-top:50px;">
                <tr>
                    <th colspan="3" style="text-align:center;">BCA SECOND YEAR</th>
                        
                </tr>
                <tr>
                    <th>Lab/Theory </th>
                    <th>Code</th>       
                    <th>Subject</th>        
                </tr>
                      
                <tr>
                    <td>Theory</td>
                    <td>201</td>
                    <td>Business Accounting</td>
                </tr>
                <tr>
                    <td>Theory</td>
                    <td>202</td>
                    <td>Discrete Mathematics</td>
                </tr>
                <tr>
                    <td>Theory</td>
                    <td>203</td>
                    <td>Operating System</td>
                </tr>
                <tr>
                    <td>Theory</td>
                    <td>204</td>
                    <td>Database Management System</td>
                </tr>
                <tr>
                    <td>Theory</td>
                    <td>205</td>
                    <td>Web Designing and Multimedia</td>
                </tr>
                <tr>
                    <td>Theory</td>
                    <td>206(A)</td>
                    <td>Object Oriented Programming Concepts (Through C++)</td>
                </tr>
                <tr>
                    <td>Theory</td>
                    <td>206(B)</td>
                    <td>Programming through VB 6.0</td>
                </tr>
                <tr>
                    <td>Lab</td>
                    <td>207</td>
                    <td>Database Laboratory</td>
                </tr>
                <tr>
                    <td>Lab</td>
                    <td>208</td>
                    <td>Object Oriented Laboratory</td>
                </tr>
                <tr>
                    <td>Lab</td>
                    <td>209</td>
                    <td>Web Designing Laboratory</td>
                </tr>
                <tr>
                    <td>Lab</td>
                    <td>210</td>
                    <td>Multimedia Laboratory</td>
                </tr>
                            
</table>
             <table id="t01" style="margin-top:50px;">
                <tr>
                    <th colspan="3" style="text-align:center;">BCA THIRD YEAR</th>
                        
                </tr>
                <tr>
                    <th>Lab/Theory </th>
                    <th>Code</th>       
                    <th>Subject</th>        
                </tr>
                      
                <tr>
                    <td>Theory</td>
                    <td>301</td>
                    <td>Data Structure (Using C/C++)</td>
                </tr>
                <tr>
                    <td>Theory</td>
                    <td>302</td>
                    <td>System Design Concepts</td>
                </tr>
                <tr>
                    <td>Theory</td>
                    <td>303</td>
                    <td>Networking Technologies</td>
                </tr>
                <tr>
                    <td>Theory</td>
                    <td>304</td>
                    <td>Core Java Programming</td>
                </tr>
                <tr>
                    <td>Theory</td>
                    <td>305</td>
                    <td>E-Commerce</td>
                </tr>
                <tr>
                    <td>Theory</td>
                    <td>306(A)</td>
                    <td>ASP . Net</td>
                </tr>
                <tr>
                    <td>Theory</td>
                    <td>306(B)</td>
                    <td>PHP</td>
                </tr>
                <tr>
                    <td>Theory</td>
                    <td>306(C)</td>
                    <td>Linux and Shell Programming</td>
                </tr>
                <tr>
                    <td>Lab</td>
                    <td>307</td>
                    <td>Networking Laboratory</td>
                </tr>
                <tr>
                    <td>Lab</td>
                    <td>308</td>
                    <td>Core Java Laboratory</td>
                </tr>
                <tr>
                    <td>Lab</td>
                    <td>309</td>
                    <td>Elective Laboratory</td>
                </tr>
                <tr>
                    <td>Lab</td>
                    <td>310</td>
                    <td>Project</td>
                </tr>
                            
</table>                
          </div>
      </div>
    </div>

<br><br>
<br>
    </div>
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





