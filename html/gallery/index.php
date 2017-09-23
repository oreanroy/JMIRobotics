<?php
require_once "../plugin/faisal_style.php";
require_once "../plugin/basic.php";
echo head("Gallery || Robocon JMI");
echo basic_decp("RoBoCoN JMI");
echo m_css();
echo r_css("https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css");
echo c_head();
echo basic_nav($dcname,$theme);
?>
<main><div class="container" style="background-color: white;">
    <div class="section" style="">
      <div class="row" style="margin-left: 40px;">
      
<?php
$directory ='../images/gallery';

$allowed_types=array('jpg','jpeg','gif','png');
$file_parts=array();
$ext='';
$title='';
$i=0;

$dir_handle = @opendir($directory) or die("There is an error with your image directory!");

while ($file = readdir($dir_handle)) 
{
	if($file=='.' || $file == '..') continue;
	
	$file_parts = explode('.',$file);
	$ext = strtolower(array_pop($file_parts));

	$title = implode('.',$file_parts);
	$title = htmlspecialchars($title);
	
	$nomargin='';
	
	if(in_array($ext,$allowed_types))
	{
		
		$sq="'";
		echo '<div class="col s12 m4" style="margin:10px 10px 10px 10px;width:300px;height:300px;"> <a data-fancybox="gallery" href="'.host().'/images/gallery/'.$file.'" class="hoverable"><div style=" overflow:none; margin:10px;width:300px;height:300px; background-image:url('.$sq.host().'/images/gallery/'.$file.$sq.');background-position:center; background-size:cover;">&nbsp;</div></a></div>';
		
	}
}

closedir($dir_handle);
?>
</div>
</div>
</div>
</main>
<?php
echo basic_foot($dcname,$theme);
echo m_js();
echo r_js("https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js");
?>