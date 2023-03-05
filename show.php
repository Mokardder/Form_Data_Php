<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<?php

// $lname = $_POST["lname"];
// $gender = $_POST["gender"];
// $mobile = $_POST["mobile"];
// $email = $_POST["email"];
// $address = $_POST["address"];
// $city = $_POST["city"];
// $hobby = $_POST["hobby"];
// $postal = $_POST["postal"];
// $dob = $_POST["dob"];

if(isset($_POST["Fname"])){
    $fname = $_POST["Fname"];
}
if(isset($_POST["lname"])){
    $lname = $_POST["lname"];
}
if(isset($_POST["gender"])){
    $gender = $_POST["gender"];
}

if(isset($_POST["mobile"])){
    $mobile = $_POST["mobile"];
}
if(isset($_POST["email"])){
    $email = $_POST["email"];
}
if(isset($_POST["address"])){
    $address = $_POST["address"];
}
if(isset($_POST["city"])){
    $city = $_POST["city"];
}
if(isset($_POST["hobby"])){
    $hobby = $_POST["hobby"];
}
if(isset($_POST["postal"])){
    $postal = $_POST["postal"];
}
if(isset($_POST["dob"])){
    $dob = $_POST["dob"];
}

if(empty($fname)){
    $fname = null;
}
if(empty($lname)){
    $lname = null;
}

if(empty($gender)){
    $gender = null;
}
if(empty($mobile)){
    $mobile = null;
}
if(empty($email)){
    $email = null;
}
if(empty($address)){
    $address = null;
}
if(empty($city)){
    $city = null;
}
if(empty($postal)){
    $postal = null;
}
if(empty($dob)){
    $dob = null;
}
if(empty($hobby)){
    $hobby = null;
}


?>
<div class="container">
    <h1>As Our Records</h1>
    <p>Your Details are</p>
</div>
<div class="form-container">
<table>
    <tr>
        <td>Name is:</td>
        <td><p><?php echo "$fname $lname" ?></p></td>
    </tr>
    <tr>
        <td>Gender is:</td>
        <td><p><?php echo "$gender" ?></p></td>
    </tr>
    <tr>
        <td>Mobile no is:</td>
        <td><p><?php echo "$mobile" ?></p></td>
    </tr>
    <tr>
        <td>Email is:</td>
        <td><p><?php echo "$email" ?></p></td>
    </tr>
    <tr>
        <td>Address is:</td>
        <td><p><?php echo "$address" ?></p></td>
    </tr>
    <tr>
        <td>Village is:</td>
        <td><p><?php echo "$city" ?></p></td>
    </tr>

    <tr>
        <td>Postal Code is:</td>
        <td><p><?php echo "$postal" ?></p></td>
    </tr>
    <tr>
        <td>Date of Birth is:</td>
        <td><p><?php echo "$dob" ?></p></td>
    </tr>
</table>
</div>

</body>
</html>