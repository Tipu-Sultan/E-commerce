

<?php
session_start();
  if (!isset($_SESSION['username'])) {
  ?>
  <script>
    alert("logged out");
  </script>
  <?php
  header('location:home.php');
}

?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<?php include '../links/link.php'; ?>
	<?php include '../css/style.php'; ?>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<style type="text/css">
  body{
   background: #1fa2ff; /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #1fa2ff, #12d8fa, #a6ffcb); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #1fa2ff, #12d8fa, #a6ffcb); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  }
  table{
    width: 500px;
  }
</style>
<div class="text-center mt-5 pt-5" >
  </span><span class="avatars"><span class="avatar current"><a href="../uploads/<?php echo $_SESSION['image']?>"><img  style="border-radius: 50%;" src="../uploads/<?php echo $_SESSION['image']?>"alt="?" height="200" width="200"><br></a></span></span></span><br>

<div  class="w3-container pl-5">
<table   border="1" class="table-responsive text-capitalize table-hover w3-table w3-striped" cellspacing="">
<tr >
<th class="bg-danger">Id</th>
<td ><?php echo  $_SESSION['id']?></td>
</tr>
<tr>
<th class="bg-warning">Enrollment</th>
<td ><?php echo  $_SESSION['enrollment_id']?></td>
</tr>
<tr>
<th class="bg-success text-white">Status</th>
<td class="bg-success text-white text-capitalize"><?php echo  $_SESSION['status']?></td>
</tr>
<tr>
<th>Name</td>
<td><?php echo  $_SESSION['username']?></td>
</tr>
<tr>
  <th>Mobile</th>
<td><?php echo  $_SESSION['mobile']?></td>
</tr>
<tr>
  <th>Email</th>
<td class="text-lowercase"><?php echo  $_SESSION['email']?></td>
</tr>

<!-- //////////////////////////// -->
  <tr>
  <th>Address</th>
<td><?php echo  $_SESSION['address']?></td>
</tr>
<tr>
  <th>Gender</th>
<td><?php echo  $_SESSION['gender']?></td>
</tr>
  
</tr>
<!-- /////////////////////////// -->
<tr>
  <tr>
  <th>Designation</th>
<td><?php echo  $_SESSION['designation']?></td>
</tr>
<tr>
  <th>Linkedin ID</th>
<td><?php echo  $_SESSION['linked']?></td>
</tr>
<tr>
  <th>Insta ID</th>
<td><?php echo  $_SESSION['insta']?></td>
</tr>
<tr>
  <th>DOB</th>
<td><?php echo  $_SESSION['dob']?></td>
</tr>
<tr>
  <th>State</th>
<td><?php echo  $_SESSION['state']?></td>
</tr>
<tr>
  <th>University</th>
<td><?php echo  $_SESSION['university']?></td>
</tr>

</tr>
</table>
</div>
<button  class="btn " data-toggle="modal" data-target="#myModal"><a href="#"data-toggle="tooltip" data-placement="bottom" name="submit" title="DELETE">Delete your account</a></button>


<button class="btn "><a href="edit.php?id=<?php echo $_SESSION['id'];?>" data-toggle="tooltip" data-placement="bottom" title="EDIT ACCOUNT">Edit account</a></button>

 <div class="text-center pt-5 mb-5"> 
            <button class="btn btn-primary  "><a href="logout.php">logout</a></button>
        </div>


<!-- Trigger the modal with a button -->


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div>
        <h3 class="display-4 text-danger">Are you sure !</h3>
      </div>
      <div class="modal-body">
        <p >Once deleted, you will not be able to recover this user Account!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Not Now</button>
        <button  class="btn "><a href="deleteac.php?idth=<?php echo $_SESSION['id'];?>"data-toggle="tooltip" data-placement="bottom" name="submit" title="DELETE">Delete your account</a></button>
      </div>
    </div>

  </div>
</div>



</body>
</html>
<script type="text/javascript">
  
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
       <!-- ////////////////// --> 
 
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php 
if (isset($_SESSION['del']))
 {
  ?>
  <script type="text/javascript">
  swal({
  title: "<?php echo $_SESSION['del_code'];?>",
  text: "<?php echo $_SESSION['del'];?>",
  icon: "success",
  button: "Bye SEE U!",
});
</script>
  <?php
  unset($_SESSION['del']);
}
 ?>


 
   <script>
  var menuitems = document.getElementById("menuitems");
  menuitems.style.maxHeight = "0px";
  function menutoggle(){
    if (menuitems.style.maxHeight == "0px") {
      menuitems.style.maxHeight = "200px";
    }else{
      menuitems.style.maxHeight = "0px";
    }
  }
</script> 
       </body>
       </html>