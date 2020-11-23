<div style="margin-top: 130px"></div>
<div class="container">

    
 <!--přídání města-->
 
        <h3>Přidat město</h3>
    <form method="post" action="<?php echo base_url() ?>welcome/mestoAdd">  
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
                                <label>Název města</label>  
                                <input type="text" name="nazev_mesta" value="<?php echo $row->nazev_mesta; ?>" class="form-control" />  
                                <span class="text-danger"><?php echo form_error("nazev_mesta"); ?></span>  
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
                            <label>Název města</label>  
                            <input type="text" name="nazev_mesta" class="form-control" />  
                            <span class="text-danger"><?php echo form_error("nazev_mesta"); ?></span>  
                        </div> 
         <div class="form-group">  
                            <input type="submit" name="insert" value="Přidat" class="btn" style="background-color: #1b6d85; color: white; margin-left: 15px" />  
                        </div> 
           <?php
                    }
                    ?>  
        </form>
 
        
        
 

               

