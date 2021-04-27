
<?php

 require 'connect.php';
if(isset($_POST['type_crime'])&&isset($_POST['doc'])&&isset($_POST['location'])&&isset($_POST['wtc'])&&isset($_POST['description'])&&isset($_POST['contact']))
{
  $type_crime=$_POST['type_crime'];
  $doc=$_POST['doc'];
  $location=$_POST['location'];
  $wtc= $_POST['wtc'];
  $description=$_POST['description'];
  $contact=$_POST['contact'];
  $var=strtotime(date("Ymd"))-strtotime($doc);
  if($var>=0)
  {
    if(!empty($type_crime)&&!empty($doc)&&!empty($location)&&!empty($wtc)&&!empty($description))
    {
      $query="INSERT INTO `anonymous`( `Location`, `Crime Type`, `Date of Crime`, `Witnessed The Crime`, `Description`, `Contact`) VALUES('$location','$type_crime','$doc','$wtc','$description','$contact')";
  
       if($query_run=mysqli_query($con,$query))
       {
         echo"<script type='text/javascript'>alert('Complaint Registered Successfully');</script>";
       } else{
         echo"<script type='text/javascript'>alert('Failed to Registered');</script>";
       }
  
    } else{
      echo "<script type='text/javascript'>alert('Please fill all necessary fields');</script>";
    }
  } else{

    echo"<script type='text/javascript'>alert('Please Enter a Valid Date');</script>";
  }
    
  }
  

?>

<style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;

    }
    body{margin: 0;
    height: 120%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: "Lato";
	font-size: 100%;
	background:url(regi_bg.jpeg)no-repeat;
    background-position:0px 0px;
	text-align: left;
	min-height: 100%;
	background-size:cover;
	/*min-height:900px;*/
	background-position:center;
	background-attachment:fixed;
  }
.Form{border:2px solid black;
 
width: 800px;
    max-width: 400px;
    margin: 1rem;
    padding: 2rem;
    box-shadow: 0 0 40px rgba(0, 0, 0, 0.2);
    border-radius: var(--border-radius);
    background: #ffffff;
    background-color: rgba(184, 191, 194, 0.993);
    
    display:flex;
  }
  .btn{
    background:#007f67;
    color: white;
    border: 2px solid black;
}
  }


</style>
<head>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><b>Crime Portal</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="userlogin.php">User Login  <i class="fa fa-user"></i></a></li>
        <li><a href="official_login.php">Official Login  <i class="fa fa-user"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>
<div class="Form">
  
<form action='#' method = 'post'>
<div class="top-w3-agile" >Type of Crime
					<select class="form-control" name="type_crime">
						<option>Theft</option>
						<option>Robbery</option>
                        <option>Pick Pocket</option>
                        <option>Murder</option>
                        <option>Rape</option>
                        <option>Molestation</option>
                        <option>Kidnapping</option>
                        <option>Missing Person</option>
				    </select>
				</div><br>
Date of crime
<input type="date" placeholder="dd/mm/yyyy" name="doc"><br><br>
Location of crime 

<select class="form-control" name="Location"><br><br>
 <option>Delhi</option>
 <option>Ghaziabad</option>
 <option>Noida</option>
 <option>Gurgaon</option>
 </select>
 <br><br>
<div class="top-w3-agile" >Did you actually witness this crime
					<select class="form-control" name="wtc">
						<option>Yes</option>
						<option>No</option>
          
				    </select>
				</div><br>
Please describe the incident with as much detail as possible:
<br><textarea rows="10" columns="200" name="description" style="margin: 0px; width: 364px; height: 168px;"></textarea><br><br>
Optional: If you are willing to allow a Campus Police Officer to contact you, please provide your contact information.<br>
Otherwise this form will be completely anonymous.<br>
<input type="text" placeholder="Contact(optional)"name="contact"><br>
<br><br>
<input class="btn" type="submit" value="Submit"name="submit">
</form> 
</div>
</body>