<!DOCTYPE html>
<html>
<head>
<title><!--[site_name]--></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="//netdna.bootstrapcdn.com/bootswatch/3.2.0/flatly/bootstrap.min.css" rel="stylesheet">
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
<?=injectionJS();?>
</head>
<body>
<form role="form" action="includes/process.php?action=update" method="post" onsubmit="return updateLocation(this);">
<div class="modal fade" id="proxyoptions" tabindex="-1" role="dialog" aria-labelledby="proxyoptionsLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="proxyoptionsLabel">Options</h4>
      </div>
      <div class="modal-body">
        <?php foreach ($toShow as $option) echo '<div class="checkbox"><label data-toggle="tooltip" data-placement="right" title="'.$option['escaped_desc'].'"><input type="checkbox" name="'.$option['name'].'" id="'.$option['name'].'"'.$option['checked'].'> '.$option['title'].'</label></div>'; ?>
      </div>
    </div>
  </div>
</div>
<div class="jumbotron">
	<div class="container">
	
		<div class="text-danger"><!--[error]--></div>
		<button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#proxyoptions"><span class="glyphicon glyphicon-wrench"></span></button>
		<h1><!--[site_name]--></h1>
		<div class="form-group">
		    <label for="input">Enter URL</label>
		    <input type="url" name="u" id="input" class="form-control" placeholder="http(s)://" required autofocus>
		</div>		
	</div>	
</div>
<div class="container">
	<p class="text-center"><!--[ad]--></p>
	<p class="text-center">Powered by <a href="http://www.glype.com/">Glype</a>&reg; <!--[version]--> - Theme: glypestrap via <a href="http://pattyland.de" target="_blank">pattyland</a></p>  
</div>
</form>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
$('#proxyoptions label').tooltip();
</script>
</body>
</html>
