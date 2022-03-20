<?php 

include "../libs/load.php";

?>
    <main class="container">
            <div class="bg-light p-5 rounded">
              <h1>Thank You Visit again</h1>
            </div>
        </main>
    <?php
    Session::destroy();
    header("location:http://localhost/NiceAdmin/");
    exit(); 


?>