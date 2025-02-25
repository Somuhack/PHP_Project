<?php 
   require "../config/dbconn.php";
   if($_SERVER["REQUEST_METHOD"] == "POST"){
      $email=$_POST['email'];
      $password=$_POST['password'];

      $sql="SELECT * FROM users WHERE email='$email'";
      $isExist=mysqli_query($conn,$sql);
      if($isExist){
        $row=mysqli_fetch_assoc($isExist);
       if( $row['pass']==$password){
        header("location:./ShowAdmissions.php");
       }else{
        header("location:../index.php");
       }

      }
      }
?>