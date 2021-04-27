<!DOCTYPE html>
<html>
<head>

<?php
session_start();
    if(!isset($_SESSION['x']))
        header("location:headlogin.php");

    require 'connect.php';
    if(isset($_POST['s1']))
    {
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $cid=$_POST['cid'];
        $_SESSION['cid']=$cid;
        header("location:head_case_details.php");
    }
    }


?>

	<title>HQ Homepage</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


     <script>
     function f1()
        {

            var sta2=document.getElementById("ciid").value;




  var x2=sta2.indexOf(' ');





    if(sta2!="" && x2>=0){
    document.getElementById("ciid").value="";
          alert("Blank Field Not Allowed");
        }


}



    </script>
</head>
<body style="background-image: url(search1.jpeg); ">
	<nav  class="navbar navbar-default navbar-fixed-top">
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
        <li ><a href="official_login.php">Official Login</a></li>
        <li ><a href="headlogin.php">HQ Login</a></li>
        <li class="active"><a href="headHome.php">HQ Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active" ><a href="headHome.php">View Complaints</a></li>
        <li ><a href="head_view_police_station.php">Police Station</a></li>
        <li><a href="h_logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>

 <div>
    <form style="margin-top: 10%; margin-left: 40%;" method="post">
      <input type="text" name="cid" style="width: 250px; height: 30px;" placeholder="&nbsp Complaint Id" id="ciid" onfocusout="f1()" required>
        <div>
      <input class="btn btn-primary" type="submit" value="Search" name="s1" style="margin-top: 10px; margin-left: 11%;">
     </div>
     </form>
     

 </div>

 <style>
table {
  text-align: center;
  border: 1px solid black;
  
}
th, td {
  padding: 15px;
  text-align: left;
}
tr:hover {background-color: #f5f5f5;}
th {
  background-color: #4CAF50;
  color: white;
}
.table_table-striped {
  margin-left: auto;
  margin-right: auto;
  margin-top: 50px;
  
}
.heading{
  text-align: center;
  color: #f5f5f5;
}
</style>

<h2 class="heading">Anonymous Reports</h2>
  <table class="table_table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Type of Crime</th>
      <th scope="col">Date of Crime</th>
      <th scope="col">Location</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
 
  <?php
   $query1="SELECT * FROM `anonymous`";
  if($query_run = mysqli_query($con,$query1))
       {
         while($query_row=mysqli_fetch_assoc($query_run)){
             $crimetype=$query_row['Crime Type'];
             $doc=$query_row['Date of Crime'];
             $id=$query_row['a_id'];
             $location=$query_row['Location'];
             $description=$query_row['Description'];
             ?>
             <tbody style="background-color: white; color: black;">
             <tr>
             <td><?php echo $id;?></td>
             <td><?php echo $crimetype;?></td>
             <td><?php echo $doc;?></td>
             <td><?php echo $location;?></td>
             <td><?php echo $description;?></td>
             </tr>
             </tbody>
             <?php
          }
          
          
       } ?>


      

        
</table>
<br><br> 
<h2 class="heading">User Reports</h2>  
<table class="table_table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Type of Crime</th>
      <th scope="col">Date of Crime</th>
      <th scope="col">Location</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <?php
  $query="SELECT * FROM `complaint`";

  if($query_run = mysqli_query($con,$query))
       {
         while($query_row=mysqli_fetch_assoc($query_run)){
             $crimetype=$query_row['type_crime'];
             $doc=$query_row['d_o_c'];
             $id=$query_row['c_id'];
             $location=$query_row['location'];
             $description=$query_row['description'];
             ?>
             <tbody style="background-color: white; color: black;">
             <tr>
             <td><?php echo $id;?></td>
             <td><?php echo $crimetype;?></td>
             <td><?php echo $doc;?></td>
             <td><?php echo $location;?></td>
             <td><?php echo $description;?></td>
             </tr>
             </tbody>
             <?php
          }
          
          
       } ?>


      

             
</table>


<div style="position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: rgba(0,0,0,0.5);
   color: white;
   text-align: center;">
</div>


 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
