<!DOCTYPE html>
<html>
<html lang="en">
<head>
<title>Kuale Foodcourt Singkawang</title>
<meta charset="utf-8">
<link rel="icon" href="<?php echo base_url(); ?>/asset/images/logokuale.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/style.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/slider.css">
<script src="<?php echo base_url(); ?>/asset/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>/asset/js/jquery-migrate-1.1.1.js"></script>
<script src="<?php echo base_url(); ?>/asset/js/superfish.js"></script>
<script src="<?php echo base_url(); ?>/asset/js/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url(); ?>/asset/js/sForm.js"></script>
<script src="<?php echo base_url(); ?>/asset/js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="<?php echo base_url(); ?>/asset/js/tms-0.4.1.js"></script>
<script src="<?php echo base_url(); ?>/asset/js/jquery.prettyPhoto.js"></script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        show: 0,
        pauseOnHover: false,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'fade',
        pagination: true, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 8000,
        numStatus: false,
        banners: false,
        waitBannerAnimation: false,
        progressBar: false
    })
});
$(window).load(function () {
    $('.carousel1').carouFredSel({
        auto: false,
        prev: '.prev',
        next: '.next',
        width: 960,
        items: {
            visible: {
                min: 1,
                max: 4
            },
            height: 'auto',
            width: 240,
        },
        responsive: false,
        scroll: 1,
        mousewheel: false,
        swipe: {
            onMouse: false,
            onTouch: false
        }
    });
});
</script>
<script>
$(window).load(function () {
    $('.carousel2').carouFredSel({
        auto: false,
        prev: '.prev1',
        next: '.next1',
        width: 410,
        items: {
            visible: {
                min: 1,
                max: 1
            },
            height: 'auto',
            width: 410,
        },
        responsive: false,
        scroll: 1,
        mousewheel: false,
        swipe: {
            onMouse: false,
            onTouch: false
        }
    });
});
</script>
<script>
$(document).ready(function () {
    $("a[data-gal^='prettyPhoto']").prettyPhoto({
        theme: 'facebook'
    });
});
</script>
</head>

<style type="text/css">
  .slider {
    z-index: 2;
    height: 625px;
    position: relative;
    left: 0%;
    margin-left: 0px;
    width: 100%;
}

</style>