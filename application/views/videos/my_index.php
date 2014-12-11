<?php foreach ($videos as $video): ?>

	<h2><?php echo $video['file_name']?></h2>
	<div class="main">
		<?php echo $video['path']?>
	</div>
	<p><?php echo "<img id='Image_${video['id']}' src='".base_url("/${video['path']}${video['file_name']}")."' alt='Dexter!!' style='display: inline-block;' width='270px' height='480'>"?></p>

<?php endforeach ?>