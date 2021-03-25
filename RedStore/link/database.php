
<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <?php include '../links/link.php'; ?>
</head>
<body>
<style type="text/css">
  

</style>
<div class="table">
<table  class="table  table-hover table-bordered table-striped table-dark " >
   <thead class="thead-dark">
<tr class="bg-info">
<td>Id</td>
<td class="bg-success">Status</td>
<td>Image</td>
    <td>Name</td>
      <td>Mobile</td>
      <td>Email</td>
      <td>Address</td>
      <td>Gender</td>
        <td>Designation</td>
        <td>Linkedin ID</td>
        <td>Insta ID</td>
         <td>DOB</td>
         <td>State</td>
           <td>University</td>
           

<td colspan="2">Operation</td>

<tr>
 </thead>
<?php
include 'dbase.php';

$selectquery = "select * from redcart";
$query = mysqli_query($con,$selectquery);
  $nums = mysqli_num_rows($query);

  // output data of each row
while ($_SESSION = mysqli_fetch_array($query)) {
  ?>
  <tr>
<td class="bg-danger"><?php echo  $_SESSION['id']?></td>
<td class="bg-success"><?php echo  $_SESSION['status']?></td>
<td><img style="border-radius: 50%;" src="../uploads/<?php echo $_SESSION['image']?>"alt="?" height="50" width="50"></td>
<td><?php echo  $_SESSION['username']?></td>
<td><?php echo  $_SESSION['mobile']?></td>
<td><?php echo  $_SESSION['email']?></td>


<!-- //////////////////////////// -->
<td><?php echo  $_SESSION['address']?></td>
<td><?php echo  $_SESSION['gender']?></td>
<td><?php echo  $_SESSION['designation']?></td>
<td><?php echo  $_SESSION['linked']?></td>
<td><?php echo  $_SESSION['insta']?></td>  
<td><?php echo  $_SESSION['dob']?></td>
<td><?php echo  $_SESSION['state']?></td>
<td><?php echo  $_SESSION['university']?></td>
    <td class="bg-success"><a href="user.php?id=<?php echo  $_SESSION['id'] ?>" style="color: #fff;">edit</a></td>
    <td class="bg-danger"><a  href="delete.php?id=<?php echo  $_SESSION['id'] ?>">Delete</a></td>


  </tr>
  <?php
}

?>
</table>
<button style="float: right;padding-top: 20px;" onclick="window.print()">Print this page</button>

</div>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- ///////////// -->
<?php 
if (isset($arrdata['win']))
 {
  ?>
  <script type="text/javascript">
  swal({
  title: "<?php echo $_SESSION['win_code'];?>",
  text: "<?php echo $_SESSION['win'];?>",
  icon: "success",
  button: "Bravo!",
});
</script>
  <?php
  unset($arrdata['win']);
}
 ?>
</body>
</html>