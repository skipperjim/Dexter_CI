<?php
$path = 'assets/photo/dexter/';
if ($handle = opendir($path)) {
    $i = 1;
    echo "<div class='grid'>";
    while (false !== ($file = readdir($handle))) {
        if ('.' === $file) continue;
        if ('..' === $file) continue;
        echo "<img class='img_item' id='Image_".$i."' src='".base_url($path)."/".$file."' height='275'></img>";
        $i++;
    }
    echo "</div>";
    closedir($handle);
}
?>
<style>
    body { margin: 0; }
</style>