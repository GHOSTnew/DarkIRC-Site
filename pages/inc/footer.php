<?php
$footermd = file_get_contents('static/md/footer.md');
$footerhtml = Markdown($footermd);

?>
<nav>
    <?php
        echo $footerhtml;
    ?>
</nav>
