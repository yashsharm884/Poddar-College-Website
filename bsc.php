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
            <h1>BSC (Bachelor of Science in Maths/Biology)</h1>
			  <div class="terms_top">
			  <p>Bachelor of Science in Maths/ Biology Program is designed by 10+2 students to gain knowledge of modern Science, Mechanics, Advance Chemistry, Advance Mathematics, Zoology & Botany & will study the modern aspects, Applications & dimensions of Science & related fields to make life more easier & comfortable. B.Sc. in Maths/Biology is suitable for students want to pursue their career in the field of Education, Medicine, Pharma, Biotechnology, Modern Science & Clinical Applications & other entry level jobs in various Govt., Semi Govt. & Pvt. Sectors.</p>
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
					<th>Subject </th>
					<th colspan="2">Ist Year </th>
					<th colspan="2">IInd Year</th>		
					<th colspan="2">IIIrd Year</th>		
				</tr>
                      
				<tr>
					<td rowspan="4">Physic </td>
					<td>I</td>
					<td>Mechanics</td>
					<td>I</td>
					<td>Statically and  Thermodynamial Physics</td>
					<td>I</td>
					<td>Mathematical Physics and Special Theory of Relativity</td>
				</tr>
				<tr>
					<td>II</td>
					<td>Electromagnetism</td>
					<td>II</td>
					<td>Optics</td>
					<td>II</td>
					<td>Elementary Quantum Mechanics and Spectroscopy </td>
				</tr>
				<tr>
					<td>III</td>
					<td>Optics</td>
					<td>III</td>
					<td>Electronics and Solid State Devices </td>
					<td>III</td>
					<td>Nuclear & Solid State Physics </td>
				</tr>
				<tr>
					<td>Lab</td>
					<td>Physics</td>
					<td>Lab</td>
					<td>Physics </td>
					<td>Lab</td>
					<td>Physics</td>
				</tr>
				<tr>
					<td rowspan="4">Chemistry </td>
					<td>I</td>
					<td>Inorganic Chemistry</td>
					<td>I</td>
					<td>Inorganic Chemistry</td>
					<td>I</td>
					<td>Inorganic Chemistry</td>
				</tr>
				<tr>
					<td>II</td>
					<td>Organic Chemistry</td>
					<td>II</td>
					<td>Organic Chemistry</td>
					<td>II</td>
					<td>Organic Chemistry</td>
				</tr>
				<tr>
					<td>III</td>
					<td>Physical Chemistry</td>
					<td>III</td>
					<td>Physical Chemistry</td>
					<td>III</td>
					<td>Physical Chemistry</td>
				</tr>
				<tr>
					<td>Lab</td>
					<td>Chemistry</td>
					<td>Lab</td>
					<td> Chemistry</td>
					<td>Lab</td>
					<td>Chemistry</td>
				</tr>
				<tr>
					<td rowspan="3">Maths </td>
					<td>I</td>
					<td>Discrete Mathematics</td>
					<td>I</td>
					<td>Real Analysis and Matric Space </td>
					<td>I</td>
					<td>Algebra</td>
				</tr>
				<tr>
					<td>II</td>
					<td>Calculus</td>
					<td>II</td>
					<td>Differential Equations</td>
					<td>II</td>
					<td>Complex Analysis</td>
				</tr>
				<tr>
					<td>III</td>
					<td>Three Dimensional Geometry and Optimization Theory </td>
					<td>III</td>
					<td>Numerical Analysis and Vector Calculus </td>
					<td>III</td>
					<td>Dynamics and Computer  Programming in C Lab Maths</td>
				</tr>
				<tr>
					<td rowspan="4">Zoology  </td>
					<td>I</td>
					<td>Diversing of Animals and Evolution</td>
					<td>I</td>
					<td>Structure and Function of Invertebrate Types</td>
					<td>I</td>
					<td>Structure and Functions of Chordate Types</td>
				</tr>
				<tr>
					<td>II</td>
					<td>Cell Biology  and Genetics</td>
					<td>II</td>
					<td>Animal Physiology and Biochemistry</td>
					<td>II</td>
					<td>Ecology and Environmental Biology</td>
				</tr>
				<tr>
					<td>III</td>
					<td>Gamete and  developmental Biology </td>
					<td>III</td>
					<td>Immunology, Microbiology and Biotechnology</td>
					<td>III</td>
					<td>Applied Zoology, Ethology and Biostatistics</td>
				</tr>
				<tr>
					<td>Lab</td>
					<td>Zoology</td>
					<td>Lab</td>
					<td> Zoology</td>
					<td>Lab</td>
					<td>Zoology</td>
				</tr>
                  <tr>
					<td rowspan="4">Botany  </td>
					<td>I</td>
					<td>Cell Biology, Genetics and Plant Breeding </td>
					<td>I</td>
					<td>Plant Morphology  and Anatomy</td>
					<td>I</td>
					<td>Taxonomy and Embryology of Angiosperm</td>
				</tr>
				<tr>
					<td>II</td>
					<td>Microbiology, Mycology and Plant Pathology</td>
					<td>II</td>
					<td>Cell Biology, Genetics and Plant Breeding </td>
					<td>II</td>
					<td>Molecular Biology and Biotechnology</td>
				</tr>
				<tr>
					<td>III</td>
					<td>Algae, Lichens  and Bryophyta</td>
					<td>III</td>
					<td>Plant Physiology and Biochemistry</td>
					<td>III</td>
					<td>Plant Ecology & Economic Botany</td>
				</tr>
				<tr>
					<td>Lab</td>
					<td>Botany</td>
					<td>Lab</td>
					<td> Botany</td>
					<td>Lab</td>
					<td>Botany</td>
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












</body>
</html>	