<?php
ini_set('display_errors','off');
include ('../../../wp-load.php');
get_header('blank');
$video_url  = $_GET['video_url'];
//echo $video_url;
?>

<video width="400" height="300" controls autoplay>
  <source src="<?php echo $video_url ?>" type="video/mp4">
 
Your browser does not support the video tag.
</video> 

<?php get_footer ?>