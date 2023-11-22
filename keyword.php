<?php
    include("head.php");
    include("banner_nav.php");

    // check that button was pressed
    if(isset($_POST['keyword'])) {

        // retrieve search term...
        $keyword = $_REQUEST['keyword_search'];

        $find_sql = "SELECT * FROM `holidays` WHERE `Event` LIKE '%$keyword%' ORDER BY `Date` ASC ";
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

        <h2>Keyword Results (<?php echo $keyword; ?>)</h2>

        <?php

        if($count > 0) {

        include("results.php");

        } // have results if

        else {

            ?>
        
        <div class="error">
            Sorry - there are no results for the keyword <?php echo $keyword; ?>.  Please try a different search term.

        </div>

            <?php

        } // end no results else

        ?>


    
</div>  <!-- / main -->
    
<?php
include("footer.php");

?>

