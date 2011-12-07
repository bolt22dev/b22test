<?php 
$this->load->view('components/header'); 
$form_action = ( !empty( $outlet_id ) ) ? base_url() . 'outlet/exec/edit/' . $outlet_id : base_url() . 'outlet/exec/add' ;
?>
<img id="top" src="<?php echo base_url();?>images/top.png" alt="">
   <div id="form_container">
      <h1><a>Transaction Menu</a></h1>
      <form id="form_169164" class="appnitro"  method="post" action="/transmenu/index/<?php echo $menu."/".$action; ?>">
         <div class="form_description">
            <h2>Transaction Menu</h2>
            <p>Select an outlet and inventory type for viewing the transactions</p>
         </div>      
         <?php if( validation_errors() ){ ?>
            <div id="error_message"><?php echo  validation_errors(); ?></div>      
         <?php } ?>      
         
         <?php if( isset( $system_message ) && !validation_errors() ){ ?>
            <div id="error_message"><?php echo $system_message; ?></div>      
         <?php } ?>   
         <ul>
            <li>
               <label class="description" for="element_1">Outlet Name </label>
               <div><?php echo form_dropdown('outlets', $outlets, '000005'); ?></div> 
            </li>      
            <li>
               <label class="description" for="element_2">Inventory Type </label>
               <div><?php echo form_dropdown('inventoryType', $inventoryType, '6'); ?></div>
            </li>
            <li class="buttons">
               <input id="saveForm" class="button_text" type="submit" name="submit" value="Go" />
            </li>
         </ul>
      </form>
   </div>
   <img id="bottom" src="<?php echo base_url();?>images/bottom.png" alt="">
<?php $this->load->view('components/footer'); ?>
