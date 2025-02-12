<?php 
  include "db.php";
$name_signup=$nameErr_signup="";
$email_signup=$emailErr_signup="";
$na_id_signup=$na_idErr_signup="";
$phone_signup=$phoneErr_signup="";
$password_signup=$passwordErr_signup="";
$confirm_password_signup=$confirm_passwordErr_signup="";
$special="";

if(isset($_POST["sign_up"])){
        if(empty($_POST["username_signup"])){
            $nameErr_signup="*Your name is required,please!";
        }
        else{
            $name_signup=test_input_signup($_POST["username_signup"]);
            if(!preg_match("/^[a-zA-Z-0-9' ]*$/",$name_signup)){
                $nameErr_signup="*Your name is Invalid!";
            }
        }
        
        if(empty($_POST["na-id-signup"])){
            $na_idErr_signup="*Your na-id is required,please!";
        }
        else{
            $na_id_signup=$_POST["na-id-signup"];
            if(!preg_match("/^([1-9]{1})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})[0-9]{3}([0-9]{1})[0-9]{1}$/",$na_id_signup)){
                $na_idErr_signup="*Your national_id is Invalid!(national id is numbers[0-9] & 14 digits only)";
            }
        }

        if(empty($_POST["email-signup"])){
            $emailErr_signup="*Your email is required,please!";
        }
        else{
            $email_signup=test_input_signup($_POST["email-signup"]);
            if(!filter_var($email_signup,FILTER_VALIDATE_EMAIL)){
                $emailErr_signup="*Your email is Invalid!";
            }
        }

        if(empty($_POST["phone-signup"])){
            $phoneErr_signup="*Your phone is required,please!";
        }
        else{
            $phone_signup=test_input_signup($_POST["phone-signup"]);
            if(!preg_match("/^([0-9]{1})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{1})[0-9]{1}$/",$phone_signup)){
                $phoneErr_signup="*Your phone is Invalid!(phone is numbers[0-9] & 11 digits only)";
            }
        }

        if(empty($_POST["password-signup"])){
            $passwordErr_signup="*Your password is required,please!";
        }
        else{
            $password_signup=test_input_signup($_POST["password-signup"]);
        }

        if(empty($_POST["confirm-password-signup"])){
            $confirm_passwordErr_signup="*This Field is required,please!";
        }
        else{
            $confirm_password_signup=test_input_signup($_POST["confirm-password-signup"]);
            if($confirm_password_signup!=$password_signup){
                $confirm_passwordErr_signup="There is an error, input confirm_password again";
            }
        }

        if($nameErr_signup==""&&$emailErr_signup==""&&$na_idErr_signup==""&&$passwordErr_signup==""&&$phoneErr_signup==""&&$confirm_passwordErr_signup==""){
            $sql="SELECT *FROM account WHERE email = '$email_signup' OR name = '$name_signup' OR password='$password_signup'";
            $result= mysqli_query($connect,$sql);
            if(mysqli_num_rows($result)>0){
                $row=mysqli_fetch_assoc($result);
                if($row['name']==$name_signup)
                  $nameErr_signup="This name is exist,already!";
                else if($row['email']==$email_signup)
                  $emailErr_signup="This email is exist,already!";
                else 
                  $passwordErr_signup="This password is already in use. Enter another password.";
            }
            else{
                $sql="INSERT INTO account (name,email,password,phone,national_id) VALUES ('$name_signup','$email_signup','$password_signup','$phone_signup','$na_id_signup')";
                $result= mysqli_query($connect,$sql);
                if($result){
                    $special="New record created successfully";
                    $name_signup=$nameErr_signup="";
                    $email_signup=$emailErr_signup="";
                    $na_id_signup=$na_idErr_signup="";
                    $phone_signup=$phoneErr_signup="";
                    $password_signup=$passwordErr_signup="";
                    $confirm_password_signup=$confirm_passwordErr_signup="";
                }
                else{
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }

}

function test_input_signup($data){
    $data=htmlspecialchars($data);
    $data=trim($data);
    $data=stripslashes($data);
    return $data;
}
?>