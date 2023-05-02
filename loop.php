<?php 
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); 
            echo "<main>";
                echo "<article>";
                    //echo "<h1>"; the_title(); echo "</h1>";
                    the_content();
                echo "</article>";
            echo "</main>";
        }
    }
?>