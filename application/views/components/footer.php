

		<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.5.2.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui-1.8.12.custom.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/jqgrid/grid.locale-en.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/jqgrid/jquery.jqGrid.src.js"></script>
		<!--script type="text/javascript" src="<?php //echo base_url(); ?>js/common.js"></script-->
		<?php 
			if(!isset($grid)) $grid = ''; 
			echo $grid;
		?>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/<?php echo (isset($this->js) ? $this->js : $this->router->fetch_class())  ?>-autoload.js"></script>
	</body>
</html>
