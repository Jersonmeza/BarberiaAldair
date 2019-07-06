<!DOCTYPE HTML>

<html>
	<head>
		<title>Proyecto Barberia</title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/cuenta/main.css" />
		<link rel="stylesheet" href="css/inicioSesion/main.css" />

        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="dist/bootstrap-clockpicker.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/github.min.css">
<style type="text/css">
  .navbar h3 {
	color: #f5f5f5;
	margin-top: 14px;
 }
 .hljs-pre {
	background: #f8f8f8;
	padding: 3px;
 }
 .footer {
	border-top: 1px solid #eee;
	margin-top: 40px;
	padding: 40px 0;
 }
 .input-group {
	width: 110px;
	margin-bottom: 10px;
 }
 .pull-center {
	margin-left: auto;
	margin-right: auto;
 }
 @media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
 }
 @media (max-width: 767px) {
  .pull-center {
    float: right;
  }
 }
</style>
    
	</head>
	<body>
	                   
	

	<?php  include ("componentes/headerBarbero.php");?>
	<div class="container-login100 " style="background-image: url('images/banner.jpg');">
		
	<form action='ingresarTurno.php' method='post'>
		
				<div class="input-group clockpicker pull-center hola" data-placement="left" data-align="top" data-autoclose="true">
						Inicio: <input type="text" name="HoraInicio" class="form-control" value="00:00">
					<span class="input-group-addon">
							<span class="glyphicon glyphicon-time"></span>
					</span>
				</div>

		
			  <div class="input-group clockpicker pull-center todo_bien hola2" data-placement="left" data-align="top" data-autoclose="true">
					Finalizacion: <input type="text" name="HoraFinal" class="form-control" value="00:00">
				 <span class="input-group-addon">
						<span class="glyphicon glyphicon-time"></span>
				 </span>
				</div>

				<button type='submit' name='Ok'>
             Ingresar
        </button>

</form>
 	
					
					
    <?php require_once ("ingresarTurno.php"); ?>
	</div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<script src="vendor/countdowntime/countdowntime.js"></script>

	 <script type="text/javascript" src="assets/js/jquery.min.js"></script>
     <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="dist/bootstrap-clockpicker.min.js"></script>
<script type="text/javascript">
     $('.clockpicker').clockpicker()
	 .find('input').change(function(){
		console.log(this.value);
	  });
      var input = $('#single-input').clockpicker({
	 placement: 'bottom',
	 align: 'left',
	 autoclose: true,
	 'default': 'now'
       });

      $('.clockpicker-with-callbacks').clockpicker({
		donetext: 'Done',
		init: function() { 
			console.log("colorpicker initiated");
		},
		beforeShow: function() {
			console.log("before show");
		},
		afterShow: function() {
			console.log("after show");
		},
		beforeHide: function() {
			console.log("before hide");
		},
		afterHide: function() {
			console.log("after hide");
		},
		beforeHourSelect: function() {
			console.log("before hour selected");
		},
		afterHourSelect: function() {
			console.log("after hour selected");
		},
		beforeDone: function() {
			console.log("before done");
		},
		afterDone: function() {
			console.log("after done");
		}
	})
	.find('input').change(function(){
		console.log(this.value);
	});

      // Manually toggle to the minutes view
       $('#check-minutes').click(function(e){
	// Have to stop propagation here
	e.stopPropagation();
	input.clockpicker('show')
			.clockpicker('toggleView', 'minutes');
       });
      if (/mobile/i.test(navigator.userAgent)) {
	    $('input').prop('readOnly', true);
      }
</script>
<script type="text/javascript" src="assets/js/highlight.min.js"></script>
<script type="text/javascript">
 hljs.configure({tabReplace: '    '});
 hljs.initHighlightingOnLoad();
</script>


	</body>
</html>