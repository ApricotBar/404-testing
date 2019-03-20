<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
      <head>
        <title>Oh no!</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
        <link rel="stylesheet" href="fonts/icomoon/style.css">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">

        <link rel="stylesheet" href="css/bootstrap-datepicker.css">

        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/fancybox.min.css">

        <link rel="stylesheet" href="css/style.css">

      </head>
    <body>
        <?php
            
                $dir = 'images/404_memes';
                // Initiate array which will contain the image name
                $imgs_arr = array();
                // Check if image directory exists
                if (file_exists($dir) && is_dir($dir) ) {
                    // Run code if the directory exists
                    // Get files from the directory
                    $dir_arr = scandir($dir);
                    $arr_files = array_diff($dir_arr, array('.','..') );
                    foreach ($arr_files as $file) {
                      //Get the file path
                      $file_path = $dir."/".$file;
                      // Get extension
                      $ext = pathinfo($file_path, PATHINFO_EXTENSION);
                      if ($ext=="jpg" || $ext=="png" || $ext=="JPG" || $ext=="PNG") {
                        array_push($imgs_arr, $file);
                      }

                    }
                    $count_img_index = count($imgs_arr) - 1;
                    $random_img = $imgs_arr[rand( 0, $count_img_index )];
                 }
        ?>
        
        <div style="text-align:center">
            <h1> 404 - Not Found </h1>
            
            <br>
            
            <form action="index.php">
                <input type="submit" value="Home" />
            </form>
            
            <br>
            
            <img src="<?php echo $dir."/".$random_img ?>" class="center">
           
        </div>
        
        
        
        
        
    </body>
</html>
