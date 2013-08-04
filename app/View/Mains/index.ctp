<?php
    echo $this->Html->css('gmap');
    echo $this->Html->script(array(
        'gmap', "http://maps.googleapis.com/maps/api/js?key=AIzaSyAF7f7LulVVbhe0_MpLb3Nx53lFgKTDmU4&sensor=false"
    ));
?>

<body onload="initialize()">
    <div id="map_canvas" style="width:100%; height:100%"></div>
</body>