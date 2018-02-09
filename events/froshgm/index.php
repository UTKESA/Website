<!-- Image gallery using Fancy Box -->
<!-- Same thumbnail as original photo version -->

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- fancybox CSS library -->
<link rel="stylesheet" type="text/css" href="/fancybox/jquery.fancybox.css">
<!-- JS library -->
<script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
<!-- fancybox JS library -->
<script src="/fancybox/jquery.fancybox.js"></script>

<script type="text/javascript">
    $("[data-fancybox]").fancybox({ });
</script>

<!-- Testing -->

<div class="container">
    <div class="gallery">
        <?php
        $thumbs = "tn/";
        $images = glob("*.jpg");
        foreach($images as $imageURL)
        {
            //set image thumbnails
            $imageThumbURL = $imageURL;
        ?>
            <a href="<?php echo $imageURL; ?>" data-fancybox="group">
                <img src="<?php echo $imageThumbURL; ?>" alt="" />
            </a>
        <?php 
        } ?>
    </div>
</div>

<style type="text/css">
.gallery img {
    width: 20%;
    height: auto;
    border: 5px solid white;
    border-radius: 10px;
    cursor: pointer;
    transition: .3s;
}

/* Smart phone view */
@media only screen and (max-width: 500px) {
    .gallery img {
        width: 80%;
    }
}
</style>

