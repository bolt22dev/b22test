<?php 
$this->load->view('components/header'); 
$form_action = ( !empty( $supplier_id ) ? base_url() . 'supplier/exec/edit/' . $supplier_id : base_url() . 'supplier/exec/add' );
?>

   <img id="top" src="<?php echo base_url();?>images/top.png" alt="">
   <div id="form_container">
      <h1><a>Supplier Maintenance</a></h1>
      <form id="form_169164" class="appnitro"  method="post" action="<?php echo $form_action;?>">
         <?php if( !empty( $supplier_id ) ){ echo "<input type=\"hidden\" value=\"{$supplier_id}\" name=\"id\"  />"; }?>
         <div class="form_description">
            <h2>Supplier Maintenance</h2>
            <p>Kingglobaltrading Supplier</p>
         </div>      
         
         <?php if( validation_errors() ){ ?>
            <div id="error_message"><?php echo  validation_errors(); ?></div>      
         <?php } ?>      
         
         <?php if( isset( $system_message ) && !validation_errors() ){ ?>
            <div id="error_message"><?php echo $system_message; ?></div>      
         <?php } ?>
         <ul>
            <li>
               <label class="description" for="element_1">Supplier Name</label>
               <div>
                  <input class="element text medium" name="supplier_name" type="text" maxlength="255" value="<?php echo (isset($supplier_name)? $supplier_name : ''); ?>"/>
               </div> 
            </li>      
            <li>
               <label class="description" for="element_2">Address </label>
               <div>
                  <textarea class="element text small" name="address" rows="1" cols="45"><?php echo (isset($address)? $address : ''); ?></textarea> 
               </div> 
            </li>
            <li>
               <label class="description" for="element_2">Contact Name </label>
               <div>
                  <input class="element text medium" name="contact_name" type="text" maxlength="255" value="<?php echo (isset($contact_name)? $contact_name : ''); ?>"/> 
               </div> 
            </li>
            <li>
               <label class="description" for="element_2">Mobile # </label>
               <div>
                  <input class="element text medium" name="mobile_no" type="text" maxlength="255" value="<?php echo (isset($mobile_no)? $mobile_no : ''); ?>"/> 
               </div> 
            </li>
            <li>
               <label class="description" for="element_2">Landline # </label>
               <div>
                  <input class="element text medium" name="landline_no" type="text" maxlength="255" value="<?php echo (isset($landline_no)? $landline_no : ''); ?>"/> 
               </div> 
            </li>
            <li>
               <label class="description" for="element_2">Fax</label>
               <div>
                  <input class="element text medium" name="fax" type="text" maxlength="255" value="<?php echo (isset($fax)? $fax : ''); ?>"/> 
               </div> 
            </li>
            <li class="buttons">
               <input id="saveForm" class="button_text" type="submit" name="submit" value="Save" />
            </li>
         </ul>
      </form>
   </div>
   <img id="bottom" src="<?php echo base_url();?>images/bottom.png" alt="">
<?php $this->load->view('components/footer'); ?>
