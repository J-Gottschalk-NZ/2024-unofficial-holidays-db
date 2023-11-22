<?php
    include("head.php");
    include("banner_nav.php");

    // check that button was pressed
    if(isset($_POST['date_search_button'])) {

        // retrieve search term...
        $date = $_REQUEST['date_search'];
        $to_format = $date;

        // Modify the date to extract only the day and month (ignoring the year)
        $month_day = date('m-d', strtotime($date));
        include("date_format.php");

        $find_sql = "SELECT * FROM `holidays` WHERE DATE_FORMAT(`Date`, '%m-%d') = '$month_day'";
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

        <h2>Date Results (<?php echo $formatted_date?>)</h2>

        <?php

        if($count > 0) {

        include("results.php");

        } // have results if

        else {

            ?>
        
        <div class="error">
            Sorry - there are no results for the date <?php echo $formatted_date; ?>.  Please try a different search term.

        </div>

            <?php

        } // end no results else

        ?>


    
</div>  <!-- / main -->
    
<?php
include("footer.php");

?>

