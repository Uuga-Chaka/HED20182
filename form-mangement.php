<?php 
print_r($_POST);

$name_error = $msj_error = $tel_error = $email_error = "";
$name = $mej = $tel = $email = "";

if($_SERVER["REQUEST_METHOD"]== "POST"){

    if(empty($_POST["email"])){
        $email_error = "Te falta informacion de este campo"
    }else{
        $email =test_input($_POST["email"]);
    }
    if(empty($_POST["name"])){
        $name_error = "Te falta informacion de este campo"
    }else{
        $name =test_input($_POST["name"]);
    }
    if(empty($_POST["tel"])){
        $tel_error = "Te falta informacion de este campo"
    }else{
        $tel =test_input($_POST["tel"]);
    }
    if(empty($_POST["msj"])){
        $msj_error = "Te falta informacion de este campo"
    }else{
        $msj =test_input($_POST["msj"]);
    }

    if($name_error == "" and $msj_error == "" and $tel_error == "" and $email_error == "" ){
        $message_body = "";
        unset($_POST['submit']);
        foreach($_POST as $key => $value){
            $message_body .= "$key: $value\n";
        }
        $to = "jpgarias09@gmail.com";
        $subje = "hoy es diseño mensaje";
        mail($to,$subje,$message_body);
        $name = $mej = $tel = $email = "";


        $msj ="
        <div style='margin: none; width: 100%;'>
        <a href='http://www.hoyesdiseno.com' title='' style='background:#000000;padding:20px;box-sizing:border-box;width:100%;text-align:left;margin-bottom:20px;display:block;'><img src='http://www.hoyesdiseno.com/imgs/logohed.svg' alt='Banner' style='height:30px;'/></a>
        
        <p style='font-size:14px;font-family:Segoe UI,calibri,arial;color:#555;line-height:25px;margin-bottom:10px;padding:10px 15px;box-sizing:border-box;'><b style='color:#111;font-weight:900;display: block;text-transform:capitalize;'>$_POST[name]</b> ha enviado el siguiente mensaje:.</p>
        
        <p style='font-size:14px;font-family:Segoe UI,calibri,arial;color:#555;line-height:25px;margin-bottom:10px;padding:20px 15px;box-sizing:border-box;'>$_POST[msj]</p>
        
        <p style='font-size:18px;font-family:Segoe UI,calibri,arial;color:#444;line-height:0px;text-transform: uppercase;font-weight: 900;padding:0px 15px;box-sizing:border-box;margin: 40px 0px 20px 0px;display: block;'>Datos</p>
        
        <p style='font-size:14px;font-family:Segoe UI,calibri,arial;color:#444;line-height:30px;padding:0px 15px;box-sizing:border-box;display: block;'>Nombre: <a href='#' title='$_POST[name]' style='color:#111;font-weight:700;text-decoration:none;text-transform:capitalize;'>$_POST[name]</a><br/>
        Correo: <a href='mailto:$_POST[email]' title='$_POST[email]' style='color:#000000;font-weight:700;text-decoration:none;'>$_POST[email]</a><br/>
        Teléfono: <a href='tel:$_POST[tel]' title='$_POST[tel]' style='color:#000000;font-weight:700;text-decoration:none;'>$_POST[tel]</a><br/>
        </p>
        
        
        <p style='background:#eee;font-size:12px;color:#aaa;line-height:20px;font-family:Segoe UI;text-align:center;width:100%;box-sizing:border-box;padding:20px 15px;display: block;'>Este correo ha sido enviado desde nuestro sitio web.<br/>
        Hoy es Diseño 2018<br/>
        <a href='https://www.hoyesdiseno.com' title='' style='color:#000000;text-decoration:none;font-weight:500'>www.hoyesdiseno.com</a></p>
        
        <p style='color:#ccc;font-size:12px;font-family:Segoe UI,calibri,arial;margin-top:20px;text-align:center;display: block;'>By <a href='https://instagram.com/iamjuandv' style='color:#777;text-decoration:none' target='_blank'>Juan David Pérez</a>.</p>
        
        </div>
        "


    }

}

function test_input($data){
    $data= trim($data);
    $data= stripcslashes($data);
    $data= htmlspecialchars($data);
    return $data;
}

?>