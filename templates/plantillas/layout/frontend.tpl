<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- Tell the browser to be responsive to screen width -->
	    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	    <base href="{$PAGE.url}index.php" target="_top">
		<title>{$PAGE.empresaAcronimo}</title>
		<link rel="stylesheet" href="{$PAGE.ruta}dist/bootstrap/css/bootstrap.min.css">

		<link rel="stylesheet/less" type="text/css" href="{$PAGE.ruta}build/style.less" />
		<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet" />
		<link rel="stylesheet" href="{$PAGE.ruta}plugins/fontawesome/css/all.css" />


		<meta http-equiv="Expires" content="0">
		<meta http-equiv="Last-Modified" content="0">
		<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
		<meta http-equiv="Pragma" content="no-cache">
	</head>
	<body layout="home">
		<div id="modulo">
			{if $PAGE.vista neq ''}
				{include file=$PAGE.vista}
			{/if}
		</div>

		<script src="librerias/less.min.js" type="text/javascript"></script>

		 <!-- jQuery 2.1.4 -->
	    <script src="{$PAGE.ruta}dist/jquery/jQuery/jQuery-2.1.4.min.js"></script>
	    <!-- jQuery UI 1.11.4 -->
	    <script src="{$PAGE.ruta}dist/jquery/jQueryUI/jquery-ui.min.js"></script>
	    <link rel="stylesheet" href="{$PAGE.ruta}dist/jquery/jQueryUI/jquery-ui.css">
	    <!-- Bootstrap 3.3.5 -->
	    <script src="{$PAGE.ruta}dist/bootstrap/js/bootstrap.min.js"></script>

	    <!-- Validate -->
	    <script type="text/javascript" src="{$PAGE.ruta}plugins/validate/validate.es.js"></script>
	    <script type="text/javascript" src="{$PAGE.ruta}plugins/validate/validate.js"></script>

	    <!-- Date time picker-->
		<link rel="stylesheet" type="text/css" href="{$PAGE.ruta}plugins/datetimepicker/jquery.datetimepicker.min.css"/>
		<script type="text/javascript" src="{$PAGE.ruta}plugins/datetimepicker/jquery.datetimepicker.full.min.js"></script>

	    {foreach from=$PAGE.scriptsJS item=script}
			<script type="text/javascript" src="{$script}?m={rand()}"></script>
		{/foreach}
	</body>
</html>
