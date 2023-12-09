<?php
include "db.php";
include "header.php";

$data = file_get_contents("php://input");
$request = json_decode($data, true);
$sql_insert = "";

if($request['form'] == "pf"){
    $sql = "SELECT email FROM formular_persoane_fizice WHERE email = '{$request['email']}'";
    $result = $conn->query($sql);

    if(!($result->num_rows > 0)){
        $sql_insert = "INSERT INTO formular_persoane_fizice (name, last_name, email, phone, file, select_form, message)
        VALUES ('{$request['name']}', '{$request['last_name']}', '{$request['email']}','{$request['phone']}','{$request['file']}', '{$request['select']}', '{$request['message']}')";
    } else{
        echo "<script>alert('Email-ul este deja utilizat');</script>";
    }
}
else if($request['form'] == "pj"){
    $sql = "SELECT cui FROM formular_persoane_juridice WHERE cui = '{$request['cui']}'";
    $result = $conn->query($sql);

    if(!($result->num_rows > 0)){
        $sql_insert = "INSERT INTO formular_persoane_juridice (name_company, cui, email_company, phone_company, file, select_company , message_company)
        VALUES ('{$request['name']}', '{$request['cui']}', '{$request['email']}','{$request['phone']}','{$request['file']}', '{$request['select']}', '{$request['message']}')";
    } else{      
        echo "<script>alert('CUI-ul este deja utilizat');</script>";
    }
}

if($sql_insert != ""){
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
