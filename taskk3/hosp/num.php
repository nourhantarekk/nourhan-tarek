<?php


include_once "nav.php";
if($_POST){
$_SESSION['num'] = $_POST['num'];}
print_r($_SESSION);
?>

<!doctype html>
<html lang="en">

<head>
    <title>Loan</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 text-center ">
	  <form method="POST" action="hosp.php">
                <div class="form-group">
                    <label for="num">number</label>
                    <input type="number" name="num" id="numr">
					<br>
					<button class="btn btn-outline-dark btn rounded mt-3"> submit</button>
					</div>
                
            </form>
        </div>
		</body>
		</html>