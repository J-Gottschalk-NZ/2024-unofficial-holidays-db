<?php

while($find_rs=mysqli_fetch_assoc($find_query))

        {

            ?>

            <div class="results common">

            <?php

            // Image set up
            $image = $find_rs['Image'];
            $image_location = $image_URL.$image;
            $event_name = $find_rs['Event'];
            
            // More links set up
            $google_base = "https://www.google.com/search?q=";
            $google_search = str_replace(' ', '+', $event_name);
            $google_url = $google_base.$google_search;

            $wiki_base = "https://en.wikipedia.org/wiki/";
            $wiki_search = str_replace(' ', '_', $event_name);
            $wiki_url = $wiki_base.$wiki_search;

            // Day and Month formatting
            $date_from_database = $find_rs['Date'];
            $to_format = $date_from_database;
            
            include("date_format.php");

            ?>

                <img class="holiday-illustration" src="<?php echo $image_location; ?>"
                alt="<?php echo $event_name; ?>">

                <div class="heading-block">
                    <!-- Event name and date -->

                    <div class="tag"><?php echo $find_rs['Activity_Type']; ?></div>

                    <b>
                        <?php echo $event_name; ?>
                        (<?php echo $formatted_date; ?>)
                    </b>
                
                </div>  <!-- / heading block -->


                <p>
                    <?php echo $find_rs['Description']; ?>
                </p>
                
                <p>
                    For more information, you could try searching 
                    <a href="<?php echo $google_url; ?>">google</a> or 
                    <a href="<?php echo $wiki_url;  ?>">wikipedia</a>. 
                </p>

            
            </div>  <!-- / individual result box -->

            <br>

            <?php

        }   // end of while

?>