<?php
require 'connect.php';
 $query="SELECT * FROM `anonymous`";

?>
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
  margin-top: 200px;
  
}
</style>
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
  if($query_run = mysqli_query($con,$query))
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
