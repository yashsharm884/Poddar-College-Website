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
table#t01 th	{
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












    <!-- //banner -->
	<div class="admission">
	   <div class="container">
	   	  <div class="terms">
            <h1>B.Com. (Bachelor of Commerce)</h1>
			  <div class="terms_top">
			  <p>Bachelor of Commerce Program has been designed for 10+2 Students to gain knowledge of accounts, Commerce & law, thus developing skills for the present & upcoming business system, business-law, Banking, Insurance & Financial system.</p> 
			  <p>The B.Com Program is suitable for students want to pursue their career in the field & Accounts, Commerce, Audits, Banking, Insurance & Finance.</p>
			  <h3>Compulsory Subject (Four)</h3>
				<ul class="terms_list">
				<li>General Hindi </li>
				<li>Environmental Studies</li>
				<li>General English</li>
				<li>Elementary Computer Application</li>
				</ul>
				</div> 
        <h1>Course Structure  </h1>
		<table id="t01">
				
				<tr>
					<th>Year </th>
					<th>Core Subjects </th>
					<th>Paper</th>		
					<th>Paper Name</th>		
				</tr>
                      
				<tr>
					<td rowspan="7">B.COM Part I </td>
					<td rowspan="2">Accountancy and Business Statistics</td>
					<td>I</td>
					<td>Corporate Accounting</td>
					
				</tr>
				<tr>
					<td>II</td>
					<td>Business Statistics</td>
				</tr>
				<tr>
					<td rowspan="2">Business Administration</td>
					<td>I</td>
					<td>Commercial Law</td>
					</tr>
					<tr>
					<td>II</td>
					<td>Business Organization</td>
				</tr>
				<tr>
					<td rowspan="2">Economic Administration and Financial Management</td>
					<td>I</td>
					<td>Business Economics</td>
					</tr>
					<tr>
					<td>II</td>
					<td>Banking and Finance Functional Accounting</td>
				</tr>
				<tr>
					<td>Additional Paper Book-keeping and Accountancy (For Non-Commerce Students Only)</td>
					<td>-</td>
					<td>-</td>
					</tr>
					<tr>
					<td rowspan="6">B.COM Part II </td>
					<td rowspan="2">Accountancy and Statics</td>
					<td>I</td>
					<td>Income Tax</td>
					
				</tr>
				<tr>
					<td>II</td>
					<td>Cost Accounting</td>
				</tr>
				<tr>
					<td rowspan="2">Business Administration</td>
					<td>I</td>
					<td>Company Law and Secretarial Practice</td>
					</tr>
					<tr>
					<td>II</td>
					<td>Management</td>
				</tr>
				<tr>
					<td rowspan="2">Economic Administration and Financial Management</td>
					<td>I</td>
					<td>Economic Environment in India</td>
					</tr>
					<tr>
					<td>II</td>
					<td>Elements of Financial Management</td>
				</tr>
				<tr>
					<td rowspan="6">B.COM Part III </td>
					<td rowspan="2">Accountancy and Business Statistics</td>
					<td>I</td>
					<td>Theory and Practice of Auditing</td>
					
				</tr>
				<tr>
					<td>II</td>
					<td>Optional Subjects (Any One)</td>
				</tr>
				<tr>
					<td rowspan="2">Business Administration</td>
					<td>I</td>
					<td>Functional Management</td>
					</tr>
					<tr>
					<td>II</td>
					<td>Optional Subjects (Any One)</td>
				</tr>
				<tr>
					<td rowspan="2">Economic Administration and Financial Management</td>
					<td>I</td>
					<td>Rural Development and Corporation</td>
					</tr>
					<tr>
					<td>II</td>
					<td>Optional Subjects (Any One)</td>
				</tr>
				   
</table>

	   	 		
		  </div>
	  </div>
	</div>
	
<br><br>

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





