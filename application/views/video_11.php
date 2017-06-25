<html>
<head>
    <title> OpenTok Video </title>
    <link href="<?php echo base_url();?>assets/css/app.css" rel="stylesheet" type="text/css">
    <script src="https://static.opentok.com/v2/js/opentok.js"></script>
</head>
<body>

    <div id="videos">
        <div id="subscriber"></div>
        <div id="publisher"></div>
    </div>
	
	<script>
		var apiKey = "<?php echo $apiKey;?>";          //YOUR_API_KEY;
		var sessionId = "<?php echo $sessionId;?>";
		var token = "<?php echo $token;?>";
		
		//alert(apiKey +' == '+ sessionId);
	</script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/app.js"></script>
</body>
</html>