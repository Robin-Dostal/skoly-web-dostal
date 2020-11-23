<?php
?>


 <h3>Přidat školu</h3>
    <form method="post" action="<?php echo base_url() ?>welcome/skolaAdd">  
                    <?php
                    if ($this->uri->segment(2) == "inserted") {
                        //main - segment(1)  
                        //inserted - segment(2)  
                        echo '<p class="text-success">Data byla vložena</p>';
                    }
                    if ($this->uri->segment(2) == "updated") {
                        echo '<p class="text-success">Data Updated</p>';
                    }
                    ?> 

                    <?php
                    if (isset($user_data)) {
                        var_dump($user_data);

                        foreach ($user_data->result() as $row) {
                            ?>  
        
       
                            <div class="form-group col-lg-6">  
                                <label>Název školy</label>  
                                <input type="text" name="nazev_skoly" value="<?php echo $row->nazev_skoly; ?>" class="form-control" />  
                                <span class="text-danger"><?php echo form_error("nazev_skoly"); ?></span>  
                            </div>  
        
        
                            <div class="form-group col-lg-6">  
                                <label>Město / obec</label>  
                                    <select name="mesto" id="mesto">
                                         <option value="mesto"><?php echo $row->nazev_mesta; ?></option>
                                    </select>
                            </div>

                                
                                
        
                            <div class="form-group col-lg-6">  
                                <label>Geo lat</label>  
                                <input type="text" name="geo_lat" value="<?php echo $row->geo_lat; ?>" class="form-control" />  
                                <span class="text-danger"><?php echo form_error("geo_lat"); ?></span>  
                            </div>  
        
                        <div class="form-group col-lg-6">  
                                <label>Geo long</label>  
                                <input type="text" name="geo_long" value="<?php echo $row->geo_long; ?>" class="form-control" />  
                                <span class="text-danger"><?php echo form_error("geo_long"); ?></span>  
                            </div>  
        
         <div class="form-group">  
                                <input type="hidden" name="hidden_id" value="<?php echo $row->id; ?>" />  
                                <input type="submit" name="update" value="Přidat" class="btn" style="background-color: #1b6d85; color: white; margin-left: 15px"/>  
                            </div>      
          <?php
                        }
                    } else {
                        ?>  
         <div class="form-group col-lg-6">  
                            <label>Název školy</label>  
                            <input type="text" name="nazev_skoly" class="form-control" />  
                            <span class="text-danger"><?php echo form_error("nazev_skoly"); ?></span>  
                        </div> 
        
        
        

        
        
          <div class="form-group col-lg-6">  
                                <label>Město / obec</label>  
                                <select name="mesto" id="mesto" class="form-control"> 
                                        <option value="mesto">--- Zvolte město nebo obec ---</option>
                                        <?php
                                        foreach ($nactiMesto->result() as $row) {
                                            ?>
                                        <option value="mesto"><?php echo $row->nazev_mesta; ?></option>
                                        
                                                      <?php
                                                }

                                            ?>  
                                    </select>
                                
                  
                            </div>

        
                    <div class="form-group col-lg-6">  
                                <label>Geo lat</label>  
                                <input type="text" name="geo_lat" class="form-control" />  
                                <span class="text-danger"><?php echo form_error("geo_lat"); ?></span>  
                            </div>  
        
                    <div class="form-group col-lg-6">  
                                <label>Geo long</label>  
                                <input type="text" name="geo_long" class="form-control" />  
                                <span class="text-danger"><?php echo form_error("geo_long"); ?></span>  
                            </div>  
        
        
         <div class="form-group">  
                            <input type="submit" name="insert" value="Přidat" class="btn" style="background-color: #1b6d85; color: white; margin-left: 15px" />  
                        </div> 
           <?php
                    }
                    ?>  
        
       
        </form>
 
   
  

</div>

