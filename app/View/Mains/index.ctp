<div id="map_canvas" style="width:1200px; height:800px"></div>

<?php
    echo $this->Html->css('gmap');
    echo $this->Html->script(array(
        "http://maps.googleapis.com/maps/api/js?key=AIzaSyAF7f7LulVVbhe0_MpLb3Nx53lFgKTDmU4&sensor=false",
        'gmap',
    ));
?>