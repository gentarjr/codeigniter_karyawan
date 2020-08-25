<script type="text/javascript" src="<?php echo base_url(); ?>assets/design/js/required.min.js?v=<?php echo $this->config->item('version');?>"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/design/js/bootstrap.min.js?v=<?php echo $this->config->item('version');?>"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/design/js/jquery.dataTabless.min.js?v=<?php echo $this->config->item('version');?>"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/design/js/dataTables.bootstrapp.min.js?v=<?php echo $this->config->item('version');?>"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/design/js/metisMenu.min.js?v=<?php echo $this->config->item('version');?>"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/design/js/dataTables.responsive.js?v=<?php echo $this->config->item('version');?>"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/design/js/multi_nested_list.js?v=<?php echo $this->config->item('version');?>"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/design/plugins/datetimepicker/moment.js?v=<?php echo $this->config->item('version');?>"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/design/plugins/datetimepicker/datetimepicker.js?v=<?php echo $this->config->item('version');?>"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/design/plugins/datepicker/datepickers.js?v=<?php echo $this->config->item('version');?>"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/design/js/menu_admin.js?v=<?php echo $this->config->item('version');?>"></script>
<script type="text/javascript">
	$(document).ajaxStart(function() {
		console.log(localStorage);
		if(localStorage.length == 0){
			localStorage.setItem('menu', 'login');
			temp_storage = '';
			onUserInactivity();
			window.location = base_url;
		}else{
			$('#overlay-screen').css('display', 'block');
		}
	});
	$(document).ajaxStop(function() {
		$('#overlay-screen').hide();
	});
	$(document).ajaxError(function(){
		$('#overlay-screen').hide();
	});
	document.onmousedown=disableclick;
	status="Right Click Disabled";
	function disableclick(event)
	{
		if(event.button==2)
		{
			alert(status);
			return false;    
		}
	}

	$(document).bind("contextmenu",function(e) {
		e.preventDefault();
	});

	var be = '';
	var bbe = '';

	$(document).keydown(function(e){
		if(e.which === 123){
			return false;
		}

		if(bbe == 17 && be == 16 && e.which == 73){
			return false;
		}else if(bbe == 16 && be == 17 && e.which == 73){
			return false;
		}else if(bbe == 17 && be == 16 && e.which == 67){
			return false;
		}else if(bbe == 16 && be == 17 && e.which == 67){
			return false;
		}
		bbe = be;
		be = e.which;
	});
</script>

<script src="<?php echo base_url(); ?>assets/design/plugins/dateformat/date.format.js?v=<?php echo $this->config->item('version');?>"></script>
<script src="<?php echo base_url(); ?>assets/design/plugins/mask-input/jquery.maskedinput.min.js?v=<?php echo $this->config->item('version');?>"></script>
<script src="<?php echo base_url(); ?>assets/design/plugins/accounting/accounting.min.js?v=<?php echo $this->config->item('version');?>"></script>
</body>
</html>