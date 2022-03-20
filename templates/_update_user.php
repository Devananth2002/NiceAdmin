<?php

include "../libs/load.php";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$company = $_POST['company'];
$job = $_POST['job'];
$country = $_POST['country'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email_address = $_POST['email_address'];
$about = $_POST['about'];
$twitter = $_POST['twitter'];
$facebook = $_POST['facebook'];
$instagram = $_POST['instagram'];
$linkedin = $_POST['linkedin'];
$github = $_POST['github'];
$result = User::update($first_name,$last_name,$company,$job,$country,$address,$phone,$email_address,$about,$twitter,$facebook,$instagram,$linkedin,$github);


if ($result)
{
    ?>
        <main class="container">
            <div class="bg-light p-5 rounded">
              <h1>updated Successfully</h1>
            </div>
        </main>
    <?php 
    header("location:http://localhost/NiceAdmin/users-profile.php");
    exit(); 
}
else
{
    ?>
        <main class="container">
            <div class="bg-light p-5 rounded">
              <h1>Something went wrong</h1>
            </div>
        </main>
    <?php 
    header("location:http://localhost/NiceAdmin/users-profile.php");
    exit();
}

?>