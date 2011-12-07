<?php $this->load->view('components/header'); ?>
<div style="position:absolute;top:30%;left:35%;">

   <?php $this->load->view('components/griddiv'); ?>
   
</div>
<?php $this->load->view('components/footer',array('grid'=>$supplierGrid)); ?>