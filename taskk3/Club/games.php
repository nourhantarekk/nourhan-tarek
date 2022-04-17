<?php

include_once "nav.php";

if($_POST){
	$num=($_POST['count']);
	$name=($_POST['name']);
	//echo $num,$name;
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>games</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3 ">
	<form method="post" action="">
	<table class="table">
	<?php for ($i=1; $i< ($num) ;$i++)
	 { ?>
	 <tr> <td> Member <?php echo ($i); ?> </td>
	 <td> <input type="checkbox"  name="sport[]" value="football"  > 
						 <label for="sport[]"> football </label> </td>
						 
						 <td> <input type="checkbox"  name="sport[]" value="vollyball"  > 
						 <label for="sport[]"> vollyball </label> </td>
						 
						 <td> <input type="checkbox"  name="sport[]" value="swim"  > 
						 <label for="sport[]"> swim </label> </td>
						 
						 <td> <input type="checkbox"  name="sport[]" value="other"  > 
						 <label for="sport[]"> other </label> </td>
						 <?php ?>
							
						   
						<?php
							 } ?>
							 <tr> <td> <button class="btn btn-outline-dark rounded btn m-3"> Result </button></td></tr>
							 <?php  print_r($_POST['sport']);
							 
								$membrs= [
									 [
										$memb= [
										
											'football'=>300,
											'volly'=>200,
											'swim'=>150,
											'other'=>100
										 
									 ],
									],
									
								 ]
							 ;
							 
								?>
							</table>
							
							</form>
							

	 
	</div>
	</body>