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
    <video width="300" controls>
        <source src="/assets/video/dexter/0001.mp4" type="video/mp4">
        <!-- <source src="<?php // echo base_url('assets/video/dexter/0001.mp4');?>" type="video/mp4"> -->
        Your browser does not support the video tag.
    </video>
</div>