<html>
<head>
<meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head> 
<body>

<form action="controller/signup-controller.php" method="POST" id="myForm">
	Namamu : <input type="text" name="user-name" id="user-name"><br />
	Email : <input type="email" name="user-email" id="user-email"><br />
	<button class="mysubmit" />tes</button>
</form>

</body>
</html>
<script>
/*
	$("#myForm").submit(function(event){
		event.preventDefault();

    	$.post("http://localhost/familyApp/controller/signup-controller.php", function(data, status){
    		console.log(data);
        	alert("Data: " + data + "\nStatus: " + status);
    	});
    });
*/
</script>