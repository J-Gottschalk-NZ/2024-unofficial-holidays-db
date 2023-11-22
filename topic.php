<?php
    include("head.php");
    include("banner_nav.php");

    // check that button was pressed
    if(isset($_POST['topic_button'])) {

        // retrieve search term...
        $topic = $_REQUEST['topic'];

        $find_sql = "SELECT * FROM `holidays` WHERE `Activity_Type` LIKE '$topic' ORDER BY `Date` ASC ";
        $find_query = mysqli_query($dbconnect, $find_sql);
        $count = mysqli_num_rows($find_query);
    }

    // if button was not pressed, go to index page
    else {
        header('Location: index.php');
    }


    $image_URL = "https://projectspace.nz/masseyhighschool/L1_unofficial_holidays/images/";
    
?>
    
    <div class="main common"> 

        <h2>Activity Type Results (<?php echo $topic; ?>)</h2>

        <?php

        if($count > 0) {

        include("results.php");

        } // have results if

        else {

            ?>
        
        <div class="error">
            Sorry - there are no results for the Activity Type <?php echo $topic; ?>.  Please try a different search term.

        </div>

            <?php

        } // end no results else

        ?>


    
</div>  <!-- / main -->
    
<?php
include("footer.php");

?>

