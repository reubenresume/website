<?php


$name = isset($_POST['name'])? htmlspecialchars($_POST['name']) : '' ;
$emailPost = isset($_POST['email'])? htmlspecialchars($_POST['email']) : '' ;
$email = filter_var($emailPost, FILTER_SANITIZE_EMAIL);
$phone = isset($_POST['phone'])? htmlspecialchars($_POST['phone']) : '' ;


    $message = "Thank You ".$name;
    header('Location: http://127.0.0.1/Web_Resume/resume.php?message='.$message);


    $url = "";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    $message = "Thank You ".$name;
    header('Location: http://127.0.0.1/Web_Resume/resume.php?message='.$message);



    $url = ""; 
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $message = "Thank You ".$name;
    header('Location: http://127.0.0.1/Web_Resume/resume.php?message='.$message); 




?>