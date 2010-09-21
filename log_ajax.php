<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="keywords" content="" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Language" content="en-US" />

<title>Proposals</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script>
$(document).ready(function() {
	
	$("#doit").click(function() {
		
		$.get("log_firebug.php", function(data) {
			
            $("#result").html(data);
            
        });
        
	});
});
</script>
</head>
<body>
<input type="button" id="doit" value="Send AJAX Request" />
<div id="result"></div>
</body>
</html>