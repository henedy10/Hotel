<?php 
$email=$email_state="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(!empty($_POST["email"])){
    $email=Test($_POST["email"]);
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      $email_state="YOUR EMAIL IS IN VALID";
    }
    else{
      $sql="SELECT email FROM subscribe WHERE email= '$email'";
      $result=mysqli_query($connect,$sql);
      $row= mysqli_fetch_assoc($result);
      if(mysqli_num_rows($result)>0){
        $email_state="THIS EMAIL IS EXIST ALREADY";
      }
      else{
        $sql="INSERT INTO subscribe (email) VALUES ('$email')";
        $result=mysqli_query($connect,$sql);
          if($result){
            $email_state="New record created successfully";
          }
          else
            echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
  }
}
function Test($data){
  $data=htmlspecialchars($data);
  $data=trim($data);
  $data=stripslashes($data);
  return $data;
}

?>