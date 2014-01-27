<?php 
	$parts = explode(".", $file); 
	$ext = end($parts); // get extension
	$ext = strtolower($ext); // convert to lowercase	
?>

<?php
	$file_icon = 'icon-file';

	if($ext=='pdf'){
		$file_icon = 'icon-file';
	}
	else if($ext=='doc' || $ext=='docx'){
		$file_icon = 'icon-file-text';
	}
	else if($ext=='png' || $ext=='jpg' || $ext=='jpeg' || $ext='gif'){
		$file_icon = 'icon-picture';
	}
?>

<p class="file">
	<i class="<?php print $file_icon; ?>"></i>
	<a href="<?php print 'http://'.$site['Domain'].'/files/'; ?><?php print $file; ?>"><?php print '<?php print _("'.$description.'"); ?>'; ?></a>
</p>

<?php print $site['Domain']; ?>