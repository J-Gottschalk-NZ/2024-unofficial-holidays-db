<?php
    include("head.php");
    include("banner_nav.php");

    $find_sql = "SELECT * 
    FROM (
        SELECT * FROM `holidays` 
        ORDER BY RAND() 
        LIMIT 5
    ) AS random_holidays
    ORDER BY `Date` ASC;
    ";
    
    $find_query = mysqli_query($dbconnect, $find_sql);

    $image_URL = "https://projectspace.nz/masseyhighschool/L1_unofficial_holidays/images/";
    
?>
    
    <div class="main common"> 

        <h2>Five Random Unofficial Holidays...</h2>

        <?php

        include("results.php");

        ?>


    
</div>  <!-- / main -->
    
<?php
include("footer.php");

?>

