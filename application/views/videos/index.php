<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<style type="text/css">
    .jumbotron {
        padding: 0;
        margin-bottom: 0;
    }
    .videoControls {
        width: 100%;
        font-size: 30px;
    }
    .videoControls span, .videoControls div {
        display: inline-block;
        color: #999;
    }
    .btnMute, .btnFullscreen {
        float: right;
        padding-left: 20px;
        margin-right: 20px;
        color: #999;
    }
    .btnPlay {
        padding-right: 20px;
        margin-left: 20px;
        color: #999;
    }
    .glyphicon:hover {
        color: #555;
    }
</style>

<div class="">
	<video id="videoPlayer" width="240px" height="360px">
        <source src="/assets/video/dexter/0001.mp4" type="video/mp4">
        <!-- <source src="<?php // echo base_url('assets/video/dexter/0001.mp4');?>" type="video/mp4"> -->
        Your browser does not support the video tag.
    </video>
    <div class="videoControls">
		<a href="#" class="btnPlay"><span class="glyphicon glyphicon-play"></span></a>
		<div class="videoTime">
            <span class="current"></span>/<span class="duration"></span>
        </div>
        <a href="#" class="btnMute"><span class="glyphicon glyphicon-volume-up"></span></a>
        <a href="#" class="btnFullscreen"><span class="glyphicon glyphicon-fullscreen"></span></a>
    </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6">

		</div>
		<div class="col-md-6">

		</div>
	</div>
</div>

<script>
    $( document ).ready(function() {
        var videoPlayer = $('#videoPlayer');

		$('.btnPlay').click(function() {
            if(videoPlayer[0].paused) {
                videoPlayer[0].play();
                $('.glyphicon-play').attr('class', 'glyphicon glyphicon-pause');
            }
            else {
                videoPlayer[0].pause();
                $('.glyphicon-pause').attr('class', 'glyphicon glyphicon-play');
            }
            return false;
        })
		videoPlayer.on('timeupdate', function() {
            $('.current').text(Math.round(videoPlayer[0].currentTime));
        });
        videoPlayer.on('loadedmetadata', function() {
            $('.duration').text(Math.round(videoPlayer[0].duration));
        });
        $('.btnMute').click(function() {
            if (videoPlayer[0].muted == false) {
                videoPlayer[0].muted = true;
                $('.glyphicon-volume-up').attr('class', 'glyphicon glyphicon-volume-off');
            } else {
                videoPlayer[0].muted = false;
                $('.glyphicon-volume-off').attr('class', 'glyphicon glyphicon-volume-up');
            }
        });
        $('.btnFullscreen').on('click', function() {
            videoPlayer[0].webkitEnterFullscreen();
            videoPlayer[0].mozRequestFullScreen();
            return false;
        });
    });
</script>