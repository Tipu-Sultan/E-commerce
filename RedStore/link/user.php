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


   <?php


include 'dbase.php';

$ids = $_GET['id'];
$showquery = "select * from redcart where id={$ids} ";

$showdata = mysqli_query($con,$showquery);
$arrdata = mysqli_fetch_array($showdata);

if (isset($_POST['submit'])){

$idupdate = $_GET['id'];

$username = ( $_POST['username']) ;
$mobile = ($_POST['mobile']) ;
$email = ( $_POST['email']) ;
$gender = ($_POST['gender']) ;
$designation = ($_POST['designation']) ;
$linked = ( $_POST['linked']) ;
$insta = ( $_POST['insta']) ;
$dob = ( $_POST['dob']) ;
 $state = ($_POST['state']) ;
 $address =($_POST['address']) ;
 $university = ($_POST['university']) ;




// $insertquery = "insert into redcart( username, mobile, email) values( '$username','$mobile','$email')";

           $query = "update redcart set id=$idupdate, gender='$gender', designation='$designation', linked='$linked', insta='$insta', dob='$dob', address='$address', state='$state', username='$username', mobile='$mobile', email='$email', university='$university' where id=$idupdate  ";

           $query = mysqli_query($con, $query);

           if ($query) {
            $_SESSION['win'] = "Updated Successfully!";
      $_SESSION['win_code'] = "success";
      header('location: database.php');
      
           }else{
           $_SESSION['msgs'] = "Not updated!";
      $_SESSION['msgs_code'] = "Error";
   

             
           }



    }

  

?>



<div class="container-fluid sub_section pt-5 pb-5" id="Contactid">
	<div class="sub_header text-center mb-5 mt-4">
		<h1>Add more details about you</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12">

<form action="" method="POST" enctype="multipart/form-data">
 
              <div class="form-group">
                <label for="lastName">Username</label>
                <input
                value="<?php echo  $arrdata['username'];?>"
                  type="text"
                  class="form-control"
                  id="university"
                  name="username"
                   
                   
                />
                <input
                value="<?php echo  $arrdata['id'];?>"
                  type="hidden"
                  class="form-control"
                  id="id"
                  name="id"
                   
                   
                />


              </div>

              <div class="form-group">
                <label for="lastName">Mobile</label>
                <input
                value="<?php echo  $arrdata['mobile'];?>"
                  type="text"
                  class="form-control"
                  id="university"
                  name="mobile"
                   
                   
                />

              </div>

              <div class="form-group">
                <label for="lastName">Email</label>
                <input
                value="<?php echo  $arrdata['email'];?>"
                  type="text"
                  class="form-control"
                  id="university"
                  name="email"
                   
                   readonly
                />

              </div><hr style="height: 
              5px;background: #000;">


   <div class="form-group">
    <label class="font-weight-bold">Designation :</label>
  <select id="designation" name="designation"  >
    
  <option><?php echo  $arrdata['designation']?></option>      
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
                 value="<?php echo  $arrdata['university']?>"

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
                
  <option><?php echo  $arrdata['gender']?></option>
<option value="male">Male</option>
<option value="female">Female</option>
<option value="Others">Others</option>


</select>
 </div><br>

<div class="form-group">
   <label class="font-weight-bold" >State:</label>
              <select  id="state" name="state" >
       
       <option><?php echo  $arrdata['state']?></option>  
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
                value="<?php echo  $arrdata['linked']?>"
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
                value="<?php echo  $arrdata['insta']?>"
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

                value="<?php echo  $arrdata['dob']?>"
                  type="date"
                  id="dob"
                  name="dob"
                 
                />
              </div>



  <div class="form-group">
    <label class="font-weight-bold" for="exampleFormControlTextarea1">Drop your current or permanently address:</label>
    <input value="<?php echo  $arrdata['address']?>"  class="form-control"  rows="3" name="address" ></input>
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


 <?php 
if (isset($arrdata['msgs']))
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
  unset($arrdata['msgs']);
}
 ?>
</body>
</html>



