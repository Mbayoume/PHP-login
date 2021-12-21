<?php
$user_name = filter_input(INPUT_POST, 'user_name');

$user_password = filter_input(INPUT_POST,"user_password");



if(empty($user_password)){

    $password_error =  "please enter your password";
}


if(empty($user_name)){

    $name_error =  "please enter your username or email";
}elseif(strlen($user_password) < 6){
    $password_error = 'make sure that your password is more than 6 letters';
}

// ECHO "user name is  " . $user_name . '  and the your password is  ( ' . $user_password . " )";

// finshed the form message 

if(empty($name_error) && empty($password_error)){
    include('index.html');
}else{
    include('main.php');
}

?>