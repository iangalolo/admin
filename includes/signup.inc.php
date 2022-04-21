<?php

if(isset($_POST["submit"])){
    

    $username = $_POST["uid"];
    $name = $_POST["Adminname"]; 
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
   

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

if (emptyInputSignup($username, $name, $email, $pwd, $pwdRepeat) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
}
if (invalidUid($username) !== false){
        header("location: ../signup.php?error=invalidusername");
        exit();  
}
if (invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidemail");
        exit();
    
}   
if (pwdMatch($pwd,$pwdRepeat) !== false){
    header("location: ../signup.php?error=passworddontmatch");
    exit();
}
if (uidExists($conn, $username,$email) !==false) {
    header("location: ../signup.php?error=usernametaken");
    exit();

}

createAdmin($conn, $username, $name, $email, $pwd);

}
else{
    header("location: ../signup.php");
    exit();
}



