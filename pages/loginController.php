<?php 
   require "../config/dbconn.php";
   if($_SERVER["REQUEST_METHOD"] == "POST"){
      $email=$_POST['email'];
      $password=$_POST['password'];

      $sql="SELECT * FROM users WHERE email='$email'";
      $isExist=mysqli_query($conn,$sql);
      if($isExist){
        $row=mysqli_fetch_assoc($isExist);
       if($row['pass'] == $password){
      if($row['isadmin'] == 1){ // Check if the user is an admin
        header("location:./admin-dashboard.php"); // Redirect to admin dashboard
      } else {
        header("location:./ShowAdmissions.php"); // Redirect to user dashboard
      }
    } else {
      header("location:../index.php");
    }
  }
}
?>

