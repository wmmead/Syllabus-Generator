<?php 
	if(isset($_GET['sylledit']))
	{
		$classid = $_GET['sylledit'];
	}
	elseif(isset($_GET['syllreview']))
	{
		$classid = $_GET['syllreview'];
	}
?>

<div class="frame">

	<?php output_message($classid); ?>

</div>