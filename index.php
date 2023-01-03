<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="http://arunpandiyan.in/assets/css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#submit").click(function(){
		var text = $("#test").val().replace(/\s/g,'');
		// mytext = text(text).replace(' ', '');
		console.log(text);
	})
});
</script>
</head>
<body>
<div class="container mt-5">
<textarea name="" id="test" cols="30" rows="10" class="form-control"></textarea>
<div class="text-center mybtn mt-5">
<input type="button" id="submit" class="btn btn-primary" value="minify">

</div>
</div>

<div class="result"></div>
</body>
</html>
