<?php

    require "libs/vars.php";
    require "libs/functions.php";  

?>

<?php



if(isset($_SESSION["alert"])){
    echo "<div class='alert alert-{$_SESSION['alert']['type']} text-center p-4 m-0' role='alert'>
    {$_SESSION['alert']['message']}
  </div>";
}

     unset($_SESSION["alert"]);

?>

<?php include "views/_header.php" ?>
<?php include "views/_navbar.php" ?>

<div class="container my-3">

    <div class="row">

        <div class="col-3">
            <?php include "views/_menu.php" ?>     

            
        </div>
        <div class="col-9">

            <?php include "views/_title.php" ?>   
            <?php include "views/_blog-list.php" ?>   

        </div>    
    
    </div>

</div>

<?php include "views/_footer.php" ?>

