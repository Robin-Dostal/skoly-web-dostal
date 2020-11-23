<div style="margin-top: 130px"></div>
<div class="container">
    
    <div id="map"></div>
 <p>Nepodařilo se mi na mapě zobrazit všecny školy. Co jsem pochopil, tak to vžy projelo celou databázi a marker to udělalo až pro ten poslední zápis v databázi což je Uherské Hradiště.<br>
Zkoušel jsem to různými způsobi, ale nějak jsem na to nedokázal přijít.</p>
<p>Výpis souřadnic</p>       
     <?php
               
                    foreach ($lokace->result() as $row) {
                        ?>
    
<script>
function initMap() {
    
   var lokace = {lat: <?php echo $row->geo_lat;?>, lng: <?php echo $row->geo_long;?>};
 //var lokace = {lat: 49.026792, lng: 17.653584 };
   var map = new google.maps.Map(document.getElementById('map'), {
    center: lokace,
    zoom: 11
  });
  
  
   var znacka = new google.maps.Marker({
    // position: {lat: 49.032687, lng: 17.643536},
    
      position: {lat: <?php echo $row->geo_lat;?>, lng: <?php echo $row->geo_long;?>},
  //  position: lokace,  
    map: map
  });
 
  
   var znacka2 = new google.maps.Marker({
     position: {lat: 49.032687, lng: 17.643536},
    map: map
     });
     
 
  // var list = [<?php echo $row->geo_lat;?>, <?php echo $row->geo_long;?>];
 
      };
 /** 
function test(){
       var list = [<?php echo $row->id;?>];
  var text = "";
     var i;
   for (i = 0; i < list.length; i++) {
  text = list[i];
    text = new test;
 
}
*/

    
 
     
</script>

<!--<p><?php echo $row->geo_lat; ?> |  <?php echo $row->geo_long; ?></p>
-->


<?php
                    }
                
                ?>  

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuKGCYMi3ufORcZ4ug4xp8aPO5FFYXJaw&callback=initMap">
</script>

 



    </div> 
<div style="margin-bottom: 105px"></div>