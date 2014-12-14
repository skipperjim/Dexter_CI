<style type="text/css">
	html,body {
		color: #fff;
		font-family: helvetica, arial, sans-serif;
		margin: 0;
		padding: 0;
		font-size: 12pt;
	}
	
	#canvas {
		position: absolute;
		left: 0;
		right: 0;
		top: 0;
		bottom: 0;
		margin: auto;
	}
</style>

<script type="text/javascript" src="<?php echo base_url('assets/js/game.min.js')?>"></script>

<div id="PhotoAlbumLinkDiv" class="stitched" style="width:175px; text-align:center;">
	<a href="<?php echo base_url('index.php/photos')?>" style="text-decoration:none;">GoTo Dexter's<br/>Photo Album</a>
</div>
<br/>
<div id="VideoAlbumLinkDiv" class="stitched" style="width:175px; text-align:center;">
	<a href="<?php echo base_url('index.php/videos')?>" style="text-decoration:none;">GoTo Dexter's<br/>Video Album</a>
</div>
	
<canvas id="canvas"></canvas>

<style>
.stitched {
    padding: 20px;
    margin: 10px;
    background: darkgray;
    color: #fff;
    font-size: 20px;
    font-weight: bold;
    line-height: 1.3em;
    border: 2px dashed white;
    border-radius: 10px;
    box-shadow: 0 0 0 4px darkgray, 2px 1px 6px 4px rgba(10, 10, 0, 0.5);
    text-shadow: -1px -1px #aa3030;
    font-weight: normal;
}
</style>