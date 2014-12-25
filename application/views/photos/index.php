<div class="grid">
    <?php foreach ($photos as $photo): ?>
        <?php
            echo "<img class='img_item' id='Image_${photo['id']}' src='".base_url("/${photo['path']}/${photo['file_name']}")."' height='275'/>";
    endforeach;
    ?>

    <style>
        body { margin: 0; }
    </style>
</div>

<script>
    $(document).ready(function(){
        console.log("document ready");
    });
</script>