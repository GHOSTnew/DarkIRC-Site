<?php
$text = "";
if($match[0] === "index"){
    $text = file_get_contents('static/md/index.md');
}else if($match[0] === "screen"){
    $text = file_get_contents('static/md/screen.md');
}else if($match[0] === "download"){
    $text = file_get_contents('static/md/download.md');
}
include  "lib/markdown.php";
include  "lib/smilies.php";
$text = getSmilies($text);
$html = Markdown($text);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>DarkIRC - <?php echo $match[0]; ?></title>
    </head>
    <body>
        <?php include "inc/nav.php"; ?>
        <div id="corps">
		<?php
			# Put HTML content in the document
			echo $html;
		?>
        </div>
        <?php include "inc/footer.php" ?>
    </body>
</html>
