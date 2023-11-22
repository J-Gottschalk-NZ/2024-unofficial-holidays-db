<?php

    // Create a DateTime object from the database value
    $date_object = new DateTime($to_format);

    // Format the date as 'day Month' (e.g., '2nd January')
    $formatted_date = $date_object -> format('jS F');
    
    // Superscript the 'th' / 'st' etc <via Chat GPT>
    $formatted_date = preg_replace('/(\d+)(st|nd|rd|th)/', '$1<sup>$2</sup>', $formatted_date);


?>