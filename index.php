<?php
$lang=$_GET['lang'];
if($lang==NULL) $lang = 'en';
$tag_index=$_GET['tag_index'];
$category_English_id=392;
?>

<?php get_header() ?>
<?php 
	if($tag_index==NULL) include("toppage.php");
	else include("tag-index2.php");

	?>
<?php get_sidebar() ?>
<?php get_footer() ?>
