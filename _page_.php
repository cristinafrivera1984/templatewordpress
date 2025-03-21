<?php
get_header();
?>


<main class="container">
<h1>DESDE page.PHP</h1>
    <?php

    while (have_posts()): the_post();

        the_title();
        the_content();

    endwhile;

    ?>

</main>

<?php
get_footer();
?>