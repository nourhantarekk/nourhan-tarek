<?php

include_once "nav.php";
$num=$_SESSION['num'];
if($_POST){
$hyg=($_POST['hyg']);
$pay=($_POST['price']);
$nurse=($_POST['nurs']);
$drs=($_POST['doc']);
$env=($_POST['quiet']);
//print_r($_POST);
function getval($val){
    if($val=='perfect')
		$value=10;
	elseif($val=='good')
	$value=5;
	elseif($val=='okay')
	$value=3;
	else
	$value=0;
return $value;
}

$sum=0;
$sum+=($hygiene=getval($hyg));
$sum+=($payment=getval($pay));
$sum+=($nursing=getval($nurse));
$sum+=($docs=getval($drs));
$sum+=($environment=getval($env));
}

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
    <div class="container mt-3 ">
	<form method="post">
	<table class="table">
		 <thead>
	<tr>
	<th> Question </th>
	<th> Rate </th>
	<th> Mark </th> 
	</tr>
	</thead>
	 <tr>
	 <td>
	 <p> are you satisfied with hygiene</p> </td>
	 <td> <?php echo $hyg; ?> </td> 
	        <td> <?php $mark=(getval($hyg));
			echo $mark; ?>  </td></tr>
	 
	 <tr>
	 <td>
	 <p> are you satisfied with Prices</p> </td>
	 <td> <?php echo $pay; ?> </td>
			<td> <?php $mark=(getval($pay));
			echo $mark; ?>  </td></tr>	 </tr>
	 
	 <tr>
	 <td>
	 <p> are you satisfied with Nurses</p> </td>
	 <td> <?php echo $nurse; ?> </td>
			<td> <?php $mark=(getval($nurse));
			echo $mark; ?>  </td></tr>	 </tr>
	 
	 <tr>
	 <td>
	 <p> are you satisfied with doctors</p> </td>
	 <td> <?php echo $drs; ?> </td> 
	 <td> <?php $mark=(getval($drs));
			echo $mark; ?>  </td></tr></tr>
	 
	 <tr>
	 <td>
	 <p> are you satisfied with Quietness</p> </td>
	 <td> <?php echo $env; ?> </td> 
	 <td> <?php $mark=(getval($env));
			echo $mark; ?>  </td></tr>
			
			
   </table>
   <div class="alert alert-dark" role="alert ">
			<?php if($sum<25)
						  $msg=" evaluation sum is: $sum Please contact patient for evaluation on :$num ";
					  else $msg="evaluation sum is: $sum thanks for evaluation";
					  echo $msg;
					  ?>
					  </div>
	 </form>
</div>
	 
	 </body>
	 </html>