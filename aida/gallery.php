<?php
include "connection.php";
include 'head.php';
include "leftnav.php";
 ?>

<html>


<div contianer "sixteen columns" align = "center">

<!-- it works the same with all jquery version from 1.x to 2.x -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jssor.slider.mini.js"></script>
<script>
    jQuery(document).ready(function ($) {
        var options = { $AutoPlay: true };
        var jssor_slider1 = new $JssorSlider$('slider1_container', options);
    });
</script>



<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 300px;">
    <!-- Slides Container -->
    <div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 600px; height: 300px;">
        <div><img u="image" src="assets/images/playstation.jpg" /></div>
        <div><img u="image" src="assets/images/xboxone.jpg" /></div>
        <div><img u="image" src="assets/images/wiiu.jpg" /></div>
        <div><img u="image" src="assets/images/psvista.jpg" /></div>
        <div><img u="image" src="assets/images/cttr.jpg" /></div>
        <div><img u="image" src="assets/images/TEW.jpg" /></div>
        <div><img u="image" src="assets/images/Knack.jpg" /></div>
        <div><img u="image" src="assets/images/WF.jpg" /></div>
        <div><img u="image" src="assets/images/MGS5.jpg" /></div>
        <div><img u="image" src="assets/images/CODG.jpg" /></div>
        <div><img u="image" src="assets/images/KZTS.jpg" /></div>
        <div><img u="image" src="assets/images/P2TS.jpg" /></div>
        <div><img u="image" src="assets/images/MGSTS.jpg" /></div>
        <div><img u="image" src="assets/images/CODGTS.jpg" /></div>
    </div>
</div>








</body>
</html>




<!-- End Document
================================================== -->
<footer>

<?php include 'footer.php'; ?>

</footer>