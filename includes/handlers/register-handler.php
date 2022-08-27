<?php

function sanitizeFormPassword($inputText) {
    $inputText = strip_tags($inputText);
    return $inputText;
}
function sanitizeFormUsername($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "",$inputText);
    return $inputText;
}
function sanitizeFormString($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "",$inputText);
    $firstname = ucfirst(strtolower($inputText));
    return $inputText;
}

if(isset($_POST['loginButton'])) {
    //login button was pressed
    
}





if(isset($_POST['registerButton'])) {
    //register button was pressed
    $username = sanitizeFormUsername($_POST['username']);
    $firstName = sanitizeFormString($_POST['firstName']);
    $lastName = sanitizeFormString($_POST['lastName']);
    $email = sanitizeFormString($_POST['email']);
    $email2 = sanitizeFormString($_POST['email2']);
    $password = sanitizeFormPassword($_POST['password']);
    $password2 = sanitizeFormPassword($_POST['password2']);

    $wasSucccesful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);

    if($wasSucccesful == true) {
        header("Location:index.php");
    }

   
    
}


?>