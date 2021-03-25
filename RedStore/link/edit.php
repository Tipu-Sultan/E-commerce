
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit account</title>
  <?php include '../links/link.php'; ?>
  <?php include '../css/style.php'; ?>
</head>
<body>

  <style type="text/css">
  body{
   background: #1fa2ff; /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #1fa2ff, #12d8fa, #a6ffcb); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #1fa2ff, #12d8fa, #a6ffcb); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  }
</style>

 <?php


include 'dbase.php';


if (isset($_POST['submit'])){

$idupdate = $_GET['id'];
$username = ($_POST['username']) ;
$mobile = ($_POST['mobile']) ;
$gender = ($_POST['gender']) ;
$designation = ($_POST['designation']) ;
$linked = ( $_POST['linked']) ;
$insta = ( $_POST['insta']) ;
$dob = ( $_POST['dob']) ;
 $state = ($_POST['state']) ;
 $address =($_POST['address']) ;
 $university = ($_POST['university']) ;
 


// $image =  $_POST['image']['name'];
// $tmp_name = $_POST['image']['tmp_name'];

// move_uploaded_file($tmp_name, "../uploads/$image");


// $insertquery = "insert into redcart( username, mobile, email) values( '$username','$mobile','$email')";

           $query = "update redcart set id=$idupdate, gender='$gender', designation='$designation', linked='$linked', insta='$insta', dob='$dob', address='$address', state='$state', username='$username', mobile='$mobile', university='$university' where id=$idupdate ";

          $query = mysqli_query($con, $query);

           if ($query) {

            $_SESSION['win'] = "Updated Successfully!";
      $_SESSION['win_code'] = "success";
     
      
           }else{
          $_SESSION['msgs'] = "Not updated !";
  $_SESSION['msgs_code'] = "error";
  

             
           }



    }

  

?>

  <span class="avatars"><span class="avatar current"><!-- <center><input type="file" name="image" style="margin-left: 100px; position:relative; top: 120px;font-size: 14px;overflow: hidden; "></center> --><img style=" display: block;
  margin-left: auto;
  margin-right: auto;
  border-radius:  50%;" src="../uploads/<?php echo $_SESSION['image']?>"alt="?" height="200" width="200"><p class="font-weight-bold text-center pt-5 text-uppercase" style="font-size: 50px;"><?php echo $_SESSION['username'];?></p>
     
 
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12">

<form action="" method="POST">
    <div class="form-group">
                <label class="font-weight-bold">Enrollment</label>
                <input
                value="<?php echo  $_SESSION['enrollment_id']?>"
                  type="text"
                  class="form-control"
                  id="enrollment_id"
                  name="enrollment_id"
                   readonly
                   
                />

              </div>

 
              <div class="form-group">
                <label class="font-weight-bold">Username</label>
                <input
                value="<?php echo  $_SESSION['username']?>"
                  type="text"
                  class="text-uppercase form-control"
                  id="username"
                  name="username"
                  
                   
                   
                />
                <input
                value="<?php echo  $_SESSION['id']?>"
                  type="hidden"
                  class="form-control"
                  id="id"
                  name="id"
                   
                   
                />


              </div>

              <div class="form-group">
                <label class="font-weight-bold">Mobile</label>
                <input
                value="<?php echo  $_SESSION['mobile']?>"
                  type="text"
                  class="form-control"
                  id="university"
                  name="mobile"
                   
                   
                />

              </div>

              <div class="form-group">
                <label class="font-weight-bold">Email</label>
                <input
                value="<?php echo  $_SESSION['email']?>"
                  type="text"
                  class="form-control"
                  id="university"
                  readonly
                   
                   
                />

              </div><hr style="height: 
              5px;background: #000;">

	 <div class="form-group">
    <label class="font-weight-bold">Designation :</label>
  <select id="designation" name="designation"  >
    
  <option><?php echo  $_SESSION['designation']?></option>      
<option value="Student">Student</option>
<option value="Business">Business</option>
<option value="Employee">Employee</option>
<option value="Goverment-Servent">Goverment-Servent</option>
<option value="Others">Others</option>


</select>
 </div>
              
              <div class="form-group">
                <label class="font-weight-bold">Collage/University:</label>
                <input
                 value="<?php echo  $_SESSION['university']?>"

                  type="text"
                  class="form-control"
                  id="university"
                  name="university"
                   placeholder="Collage/University"
                   
                />

              </div>

              <div class="form-group">
                <label class="font-weight-bold">Gender:</label>
              <select id="gender" name="gender" >
                
  <option><?php echo  $_SESSION['gender']?></option>
<option value="male">Male</option>
<option value="female">Female</option>
<option value="Others">Others</option>


</select>
 </div><br>

<div class="form-group">
   <label class="font-weight-bold" >State:</label>
              <select  id="state" name="state" >
       
       <option><?php echo  $_SESSION['state']?></option>  
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select>
 </div>

              <div class="form-group">
                <label class="font-weight-bold">linkedin profile</label>
                <input
                value="<?php echo  $_SESSION['linked']?>"
                  type="text"
                  class="form-control"
                  id="linked"
                  name="linked"
                   placeholder="Enter Your linkedin link*"
                   
                />
              </div>
                <div>
    
              
              <div class="form-group">
                <label class="font-weight-bold">Instagram profile</label>
                <input
                value="<?php echo  $_SESSION['insta']?>"
                  type="text"
                  class="form-control"
                  id="insta"
                  name="insta"
                   placeholder="Enter Your insta link*"
                />
              </div>
            
              <div class="form-group">
                <label class="font-weight-bold" for="date">Date of birth</label>
                <input

                value="<?php echo  $_SESSION['dob']?>"
                  type="date"
                  id="dob"
                  name="dob"
                 
                />
              </div>



  <div class="form-group">
    <label class="font-weight-bold" for="exampleFormControlTextarea1">Drop your current or permanently address:</label>
    <input value="<?php echo  $_SESSION['address']?>"  class="form-control"  rows="3" name="address" ></input>
  </div>
  <div>
  <input class="btn btn-primary" type="reset" value="Reset">
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
   
            <button class="btn btn-primary text-white"><a href="logout.php" class="text-white">logout</a></button>
        
</form>
			</div>
		</div>
		
	</div>
</div><br>
<h5 class="text-capitalize text-danger text-center">Please user logout after edit profile</h5><br>


  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

   
 <!-- ///////////// -->
 <?php 
if (isset($_SESSION['msgs']))
 {
  ?>
  <script type="text/javascript">
  swal({
  title: "<?php echo $_SESSION['msgs_code'];?>",
  text: "<?php echo $_SESSION['msgs'];?>",
  icon: "error",
  button: "Opps!",
});
</script>
  <?php
  unset($_SESSION['msgs']);
}
 ?>
  <!-- ///////////// -->
<?php 
if (isset($_SESSION['win']))
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
  unset($_SESSION['win']);
}
 ?>


</body>
</html>