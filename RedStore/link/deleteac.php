 <?php 
session_start();

  ?>
 <?php


include 'dbase.php';


$id = $_GET['idth'];

 $deletequery = " delete from redcart where id=$id ";

  $query = mysqli_query($con, $deletequery);

           if ($query) {

            $_SESSION['del'] = "Account deleted successfully !";
      $_SESSION['del_code'] = "Bye bye See You";
      header("location: index.php");
      
           }else{
          $_SESSION['msgs'] = "Not Deleted !";
  $_SESSION['msgs_code'] = "error";
  header("location: profile.php");

             
           }
?>
<!-- 
// $address =($_POST['address']) ;
// $gender = ($_POST['gender']) ;
// $designation = ($_POST['designation']) ;
// $linked = ( $_POST['linked']) ;
// $insta = ( $_POST['insta']) ;
// $dob = ( $_POST['dob']) ;

//  $state = ($_POST['state']) ;
//  $university = ($_POST['university']) ;



// $insertquery = "insert into redcart( username, mobile, email) values( '$username','$mobile','$email')";

        -->   


    

  

