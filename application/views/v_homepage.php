<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Market Web II</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/bootstrap/css/bootstrap.min.css">
</head>

<body>
	
	<?php $this->load->view('template/header'); ?>

	<div class="container-fluid">
		<div class="col-md-3">
			
			<?php $this->load->view('template/side'); ?>

		</div>
		<div class="col-md-9">
			
			<?php $this->load->view($page); ?>

		</div>
	</div>

	<?php $this->load->view('template/footer'); ?>

<script type="text/javascript" src="<?php echo base_url();?>asset/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>