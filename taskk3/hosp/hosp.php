<?php
include_once "nav.php";
if($_POST){
 if (isset($_POST['hyg'])){ 
$hyg=($_POST['hyg']);
 $sum+=($hygiene=getval($hyg));}
 
if (isset($_POST['price'])){
$pay=($_POST['price']);
$sum+=($payment=getval($pay));
}
if (isset($_POST['nurs'])){
$nurse=($_POST['nurs']);
$sum+=($nursing=getval($nurse));}

if (isset($_POST['doc']))
{$drs=($_POST['doc']);
$sum+=($docs=getval($drs));}

if (isset($_POST['quiet'])){
$env=($_POST['quiet']);
$sum+=($environment=getval($env));}

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
	<form method="post" action="result.php">
	<table class="table">
	 
	 <thead>
	<tr>
	<th> Question </th>
	<th> perfect </th>
	<th> good </th>
	<th> okay </th>
	<th> bad </th>
	</tr>
	 <tr>
	 <td>
	 <p> are you satisfied with hygiene</p> </td>
                        
						
                           <div class="form-group ">
                         <td> <input type="radio"  name="hyg" value="perfect"  > 
						 <label for="hyg"> perfect </label> </td>
		
                         <td>  <input type="radio"  name="hyg" value="good"  >
						   <label for="hyg"> good </label> </td>
						  
                         <td>  <input type="radio"  name="hyg" value="okay"   >
						     <label for="hyg">okay</label>  </td>
						  
						   
                          <td> <input type="radio"  name="hyg" value="bad"   >
							<label for="hyg">bad</label> </td>
							</div>
							</tr>
							
			<tr>  <td>	<p> are you satisfied with Prices</p>  </td>
					<div class="form-group ">
					 <td> <input type="radio"  name="price" value="perfect"  >
						  <label for="price">perfect</label> </td>
		
                       <td>    <input type="radio"  name="price" value="good"   >
						   <label for="price">good</label>  </td>
						  
                          <td> <input type="radio"  name="price" value="okay"   >
						     <label for="price">okay</label> </td>
						  
						   
                        <td>   <input type="radio"  name="price" value="bad"   >
							<label for="price">bad</label> </td>
							</div>
						</tr>	
						
						<tr>	<td> <p> are you satisfied with Nurses</p> </td>
					<div class="form-group ">
					 <td> <input type="radio"  name="nurs" value="perfect"  >
						  <label for="nurs">perfect</label> </td>
		
                        <td>   <input type="radio"  name="nurs" value="good"   >
						   <label for="nurs">good</label> </td>
						  
                          <td> <input type="radio"  name="nurs" value="okay"   >
						     <label for="nurs">okay</label> </td>
						  
						   
                          <td> <input type="radio"  name="nurs" value="bad"   >
							<label for="nurs">bad</label>  </td>
							</div>
							</tr>
							<tr> <td>
							<p> are you satisfied with doctors</p>  </td>
					<div class="form-group ">
					 <td> <input type="radio"  name="doc" value="perfect"  >
						  <label for="doc">perfect</label> </td>
		
                          <td> <input type="radio"  name="doc" value="good"   >
						   <label for="doc">good</label> </td>
						  
                      <td>     <input type="radio"  name="doc" value="okay"   >
						     <label for="doc">okay</label> </td>
						  
						   
                         <td>  <input type="radio"  name="doc" value="bad"   >
							<label for="doc">bad</label> </td>
							</div>
							</tr>
							<tr>
							 <td> <p> are you satisfied quietness </p> </td>
					<div class="form-group ">
					 <td><input type="radio"  name="quiet" value="perfect"  >
						  <label for="quiet">perfect</label> </td>
		
                          <td> <input type="radio"  name="quiet" value="good"   >
						   <label for="quiet">good</label></td>
						  
                          <td> <input type="radio"  name="quiet" value="okay"   >
						     <label for="quiet">okay</label></td>
						  
						   
                          <td> <input type="radio"  name="quiet" value="bad"   >
							<label for="quiet">bad</label></td>
							</tr>
							</div>
                       <tr> <td> <button class="btn btn-outline-dark rounded btn-sm m-3"> Result </button></td></tr>
						
						</table>
						</form>
						<?php 
                       if($_POST){
                          echo $sum;
						  echo $_SESSION['num'] ;
						  if($sum<25)
						  $msg="sorry";
						else
						echo "thanks";
}?>
                     
						</div>
						
						</body>
						</html>
						
						  