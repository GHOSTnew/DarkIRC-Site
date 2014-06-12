<?php
$navmd = file_get_contents('static/md/nav.md');
$navhtml = Markdown($navmd);

?>
<nav>
    <?php
        echo $navhtml;
    ?>
</nav>
