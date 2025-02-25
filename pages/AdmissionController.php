<?php 
   require "../config/dbconn.php";
   if($_SERVER["REQUEST_METHOD"] == "POST"){
      $name=$_POST['name'];
      $email=$_POST['email'];
      $address=$_POST['address'];
      $pin=$_POST['pin'];
      $phone=$_POST['phone'];
      $gender=$_POST['gender'];
      $state=$_POST['state'];
      $date=$_POST['date'];
      $lyp=$_POST['lyp'];
      $password=$_POST['password'];
      $cpassword=$_POST['cpassword'];
      if($password==$cpassword){
         // $hash_pass=password_hash($password,PASSWORD_DEFAULT);
        try {
            $sql = "INSERT INTO users (`name`, `email`, `address`, `pin`, `Phone`, `gender`, `state`, `dob`, `lyp`, `pass`, `isapprove`, `isadmin`) 
                  VALUES ('$name', '$email', '$address', '$pin', '$phone', '$gender', '$state', '$date', '$lyp', '$password', 0, 0)";
            $result=mysqli_query($conn,$sql);
           
            if($result){
               echo $result;
               header("location:../index.php");
            }
            //code...
        } catch (Exception $e) {
            //throw $th;
            echo $e;
        }
            
        
        

      }
   }

?>