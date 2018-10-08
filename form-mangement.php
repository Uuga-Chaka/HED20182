<?php
$name_error = $email_error = $tel_error = $msj_error = "";
$name = $email = $tel = $msj= "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["name"])){
        $name_error = "Falta incluir el nombre";
    }else{
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $name_error = "Only letters and white space allowed"; 
        }
    }
    if(empty($_POST["email"])){
        $email_error = "Falta incluir el email";
    }else{
        $email= test_input($_POST["email"]);
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid email format"; 
        }
    }
    if(empty($_POST["tel"])){
        $tel_error = "Falta incluir el telefono";
    }else{
        $tel= test_input($_POST["tel"]);
        if (!is_numeric($tel)) {
            $tel_error = "Deben ser caracteres numerico";
        } 
    }
    if(empty($_POST["msj"])){
        $msj_error = $_POST["msj"]);
    }else{
        $msj= test_input($_POST["msj"]);
    }

    if($name_error == "" and $email_error == "" and $tel_error == "" and $msj_error == ""){

    }
}

function test_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);  
    return $data;  
}
?>