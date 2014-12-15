<?php $i=1; 
echo "<center><p>";
echo "<a href='' id='PrevImg'><< Prev &nbsp;&nbsp;</a>";
echo "<a href='' id='NextImg'>&nbsp;&nbsp; Next >></a>";
echo "</p></center>";
?>
<?php foreach ($photos as $photo): ?>
<?php
	if($i == 1){
        echo "<div id='ImageDiv_${photo['id']}' class='photoframe' num='${photo['id']}' style='margin:0 auto;'>";
    }else{
        echo "<div id='ImageDiv_${photo['id']}' class='photoframe' num='${photo['id']}' style='display:none;'>";
    }
    echo "<img id='Image_${photo['id']}' src='".base_url("/${photo['path']}${photo['file_name']}")."' alt='Dexter!!' style='display: inline-block;' width='270px' height='480'>";
    echo "</div>";
    $i++;
endforeach;
	echo "<center><p>";
    echo "<a href='' id='PrevImg'><< Prev &nbsp;&nbsp;</a>";
    echo "<a href='' id='NextImg'>&nbsp;&nbsp; Next >></a>";
    echo "</p></center>";
?>

<script type="text/javascript">
jQuery(document).ready(function(){
    console.log("Document ready!");
    jQuery("a#PrevImg, a#NextImg").on("click", function(e){
        navigateImages(jQuery(this).attr("id"));
        e.preventDefault();
    });
});
function navigateImages(direction){
    var currImgEle = jQuery("div.photoframe:visible");
    var currNum = parseInt(currImgEle.attr("num"));
    var nextNum = (currNum+1);
    var prevNum = (currNum-1);
    if(direction === "PrevImg"){
        var viewImgEle = jQuery("div#ImageDiv_"+prevNum+":hidden");
    }else if(direction === "NextImg"){
        var viewImgEle = jQuery("div#ImageDiv_"+nextNum+":hidden");
    }
    currImgEle.hide();
    viewImgEle.show();
}
</script>

<style>
div.photoframe, div.innerContainer {
    display: inline-block;
}
a#PrevImg, a#NextImg {
    text-decoration: none;
}
</style>