<!DOCTYPE html>
<hmtl>
<head>
	<title>FORUM</title>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-inverse" style="background-color: #006699; border-color: #006699">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" style="color: white" href="{$href0}">{$FORUMName}</a>
		</div>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="{$href1}" style="color: white">{$MENU1}</a></li>
		</ul>
	</div>
</nav>
<div class="container" style="padding-top: 1%">
	<div class="well">
		<div class="container-fluid text-center" style="padding-top: 0.5%;border-radius: 5px">
			 <form class="form-horizontal" action="login_action.php">
			 	<div class="form-group">
			      <label class="control-label col-sm-2" for="email">{$Action} you post:</label>
			      <div class="col-sm-10">
			        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
			      </div>
			    </div>
			    <div class="form-group">        
			      <div class="col-sm-5">
			        <button stype="submit" class="btn btn-success">Post</button>
			      </div>
			    </div>
			    <div class="form-group">        
			      <div class="col-sm-offset-2 col-sm-5">
			        <a href="index.php" role="button" class="btn btn-danger">Clear</a>
			      </div>
			    </div>
  			</form>
		</div>
	</div>
</div>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>