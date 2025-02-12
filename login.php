<?php 
include "db.php";
$username_login=$usernameErr_login="";
$password_login=$passwordErr_login="";
$special_login="";
if(isset($_POST['log_in'])){

    if(empty($_POST["username-login"])){
        $usernameErr_login="*Your name is required,please!";
    }
    else{
        $username_login=test_input_login($_POST["username-login"]);
        if(!preg_match("/^[a-zA-Z-0-9' ]*$/",$username_login)){
            $usernameErr_login="*Your name is Invalid!";
        }
    }

    if(empty($_POST["password-login"])){
        $passwordErr_login="*Your password is required,please!";
    }
    else{
        $password_login=test_input_login($_POST["password-login"]);
    }

    if($usernameErr_login==""&&$passwordErr_login==""){
        $sql_login="SELECT *FROM account WHERE password = '$password_login' AND name = '$username_login'";
        $result_login= mysqli_query($connect,$sql_login);
        if(mysqli_num_rows($result_login)>0){
            header("Location:index.php");
        }
        else{
            $special_login="This account is not exist!";
        }
    }
}


function test_input_login($data){
    $data=htmlspecialchars($data);
    $data=trim($data);
    $data=stripslashes($data);
    return $data;
}





?>