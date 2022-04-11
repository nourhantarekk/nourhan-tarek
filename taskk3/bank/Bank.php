<?php
if($_POST){
$nam=($_POST['namee']);
$loann=($_POST['loan']);
$yrs=($_POST['pay']);
if($yrs<3)
{
	$profit=((0.1*$loann)*$yrs);
	$sum=$profit+$loann;
	$month=($sum/($yrs*12));
}
else
{
	$profit=((0.15*$loann)*$yrs);
	$sum=$profit+$loann;
	$month=($sum/($yrs*12));
}
$plan="<div class='alert alert-success'>
Name:$nam <br> 
Sum:$loann <br>
Profit:$profit<br>
Years of pay:$yrs <br>
Total:$sum
    </div>";
}?>
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
    <div class="container mt-3 ">
	
	<form method="post">
                        <div class="form-group ">
                          <label for="namee">name</label>
                          <input type="text" name="namee" class="form-control" 
                          placeholder=" enter Name" >

                          <label for="loan">Loan</label>
                          <input type="number" name="loan" class="form-control" 
                          placeholder=" enter Loan needed" >

                          <label for="pay">years of payment</label>
                          <input type="number" name="pay" class="form-control" 
                          placeholder=" enter years of payment" >
						  </div>
                        <button class="btn btn-outline-dark rounded btn-sm m-3"> Get Payment plan </button>
						</form>
						<?php 
                       if($_POST){
                          echo $plan;
                       }
					   
                    ?>
						</div>
						
						</body>
						</html>
						
						  