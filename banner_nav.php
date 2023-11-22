<body>

<div class="wrapper">

    <div class="banner common"> 

    <div class = "logo">
        <a href="index.php">
            <img src="images/holidays_logo.png" alt="Holidays logo">
        </a>
    </div>   <!-- / logo -->

        <h1>Unofficial Holidays</h1>
    </div>  <!-- / banner -->

    <div class="nav common"> 

    <h2>Search</h2>

<!-- Show All Button -->
<a class="search-button" href="show_all.php">
<div class="button-link full-button">
    <span class="button-text">Show all</span>
    <span class="button-emoji"><i class="fas fa-search fa-lg"></i></span>
</div>
</a>

<!-- Random Button -->
<a class="search-button" href="random.php">
<div class="button-link full-button">
    <span class="button-text">Random</span>
    <span class="button-emoji"><i class="fas fa-random fa-lg"></i></span>
</div>
</a>

<hr>

<!-- Keyword Area -->

<form method="post" action="keyword.php" enctype="multipart/form-data">
    <div class="search-container">

        <input class="search" type="text" name="keyword_search" required value="" placeholder="Keyword" />

        <button class="button-link" type="submit" name="keyword">
            <span class="small-mag"><i class="fas fa-search fa-lg"></i></span>
        </button>
        </div>  <!-- / search container -->
</form>


<!-- Topic Search -->
<form class="search-form" method="post" action="topic.php" enctype="multipart/form-data">

    <div class="search-container">

    <?php 

    $dropdown_sql = "SELECT DISTINCT `Activity_Type` FROM `holidays` ORDER BY `holidays`.`Activity_Type` ASC ";
    $dropdown_query = mysqli_query($dbconnect, $dropdown_sql);
    
    ?>

        <!-- Topic Drop down goes here... -->
        <select name="topic" class="search" required>
            <option value="" disabled>Choose It ...</option>

            <?php

            while($dropdown_rs=mysqli_fetch_assoc($dropdown_query)) {
                ?>

                <option value="<?php echo $dropdown_rs['Activity_Type'];?>">
                    <?php echo $dropdown_rs['Activity_Type'];?>
                </option>

                <?php
            }   // end of drop down while

            ?>

        </select>

        <button class="button-link" type="submit" name="topic_button">
            <span class="small-mag"><i class="fas fa-search fa-lg"></i></span>
        </button>

    </div>  <!-- / search div for topic box -->

</form>

<hr />

<!-- Date Area -->
<!-- Today Button -->
<a class="search-button" href="today.php">
<div class="button-link full-button">
    <span class="button-text">Today</span>
    <span class="button-emoji"><i class="fas fa-calendar-week fa-lg"></i></span>
</div>
</a>

<!-- Date form -->
<form class="search-form" method="post" action="date.php" enctype="multipart/form-data">

<div class="search-container">
    
    <input class="search" type="date" name="date_search" required value="" />

    <button class="button-link" type="submit" name="date_search_button">
        <span class="small-mag"><i class="fas fa-search fa-lg"></i></span>
    </button>

</div>  <!-- search container for date form -->

</form>

</div>  <!-- / nav -->