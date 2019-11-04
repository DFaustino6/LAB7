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
			<a class="navbar-brand" style="color: white" href="{$href}">{$FORUMName}</a>
		</div>
		<ul class="nav navbar-nav navbar-left">
	    	<li class="dropdown table-bordered" ><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white; background-color: #006699">Menu&nbsp;<span class="caret"></span></a>
	    		<ul class="dropdown-menu">
	    			<li><a href="#">{$MENU1}</a></li>
	    			<li><a href="#">{$MENU2}</a></li>
	    			<li><a href="#">{$MENU3}</a></li>
	    		</ul>	
	    	</li>
        </ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="{$href4}" style="color: white">{$MENU4}</a></li>
		</ul>
	</div>
</nav>
<div class="container" style="padding-top: 1%">
	<div class="container-fluid well">
		<div class="form-group">
			<label class="controlo-label col-sm-2">{$Action} your post:</label>
			<div class="col-sm-10">
				<textarea class="form-control" id="post" name="postContent" style="resize: vertical;">{$post_content}</textarea>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			     <button type="submit" name="post" class="btn btn-default">Post</button>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>