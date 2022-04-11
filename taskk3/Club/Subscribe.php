<?php

include_once "nav.php";
if($_POST){
$_SESSION['name'] = $_POST['name'];
$_SESSION['count'] = $_POST['count'];
print_r($_SESSION);
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>sub</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 ">
	<form method="post" action="games.php">	
	<table class="table">
	 <div class="form-group m-2 ">
              <tr>  
                   <td> <label for="name">Name of subscriber</label>
                    <input type="text" name="name" ></td></tr>
					
					<tr> <td> <label for="count">num of Fam members</label>
                    <input type="number" name="count" > </td> </tr>
					
					</div>
					</table>
				<tr> <td> <button class="btn btn-outline-dark btn rounded mt-3"> subscribe</button> </td> </tr>
				</table>

               
            </form>
        </div>
		</body>
		</html>