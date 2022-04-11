<?php 
session_start();
?>

<!doctype html>

<head>
    <title>Home</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php

include_once "nav.php";
print_r($_SESSION);
?>

<div class="container">
    <div class="row">
	<h1 class="text-center alert alert-success">
                Welcome to Homepage
            </h1>
			
        </div>
		</div>
		</body>
		</html>