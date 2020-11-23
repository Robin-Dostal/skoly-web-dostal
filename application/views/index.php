<div style="margin-top: 130px"></div>
<div class="container">
<div class="row">
   <?php
                if ($nacti->num_rows() > 0) {
                    foreach ($nacti->result() as $row) {
                        
               
                        ?>

    <div class="card col-lg-4 col-sm-6 " style="margin-bottom: 20px"> 
        <div class="card-body " >

            <h5 class="cadr-title">Město / obec: <?php echo $row->nazev_mesta; ?>
            <hr>
        <p class="card-text">Škola: <?php echo $row->nazev_skoly;?></p>  
    <p class="card-text">Obor: </p>
    <p class="card-text"><?php echo $row->nazev; ?>:  <?php echo $row->pocet; ?></p>
       
                           
     </div>
   </div>

         
                <?php
                    }
                } else {
                    ?>  
                    <tr>  
                        <td colspan="5">Nebyla nalezena žádná data</td>  
                    </tr>  
                    <?php
                }
                ?>  
   </div> 
</div> 
<div style="margin-bottom: 105px"></div>