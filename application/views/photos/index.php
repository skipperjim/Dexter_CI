<?php foreach ($photos as $photo): ?>

	<h2><?php echo $photo['file_name']?></h2>
	<div class="main">
		<?php echo $photo['path']?>
	</div>
	<p><?php echo "<img id='Image_${photo['id']}' src='".base_url("/${photo['path']}${photo['file_name']}")."' alt='Dexter!!' style='display: inline-block;' width='270px' height='480'>"?></p>

<?php endforeach ?>