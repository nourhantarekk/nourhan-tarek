<?php
if($_POST){
	$sum=($_POST['number1']+$_POST['number2']+$_POST['number3']+$_POST['number4']+$_POST['number5'])/250  ;
    if($sum >=(90/100))
    $n1="grade :A";
        elseif($sum >=(80/100))
		 $n1="grade :B";
		 elseif($sum >=(70/100))
		 $n1="grade :C";
		 elseif($sum>=(60/100))
		 $n1="grade :D";
		 elseif($sum>=(40/100))
		 $n1="grade :E";
		 elseif($sum<(40/100))
		 $n1="grade :F";
    $sum*=100;
    $msg="<div class='alert alert-success'>
percentage:$sum% <br> $n1
    </div>";
}

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container">
<div class="col-4 offset-4 mt-5">
                  <form method="post">
                        <div class="form-group">
                          <label for="number1">physics</label>
                          <input type="number" name="number1" class="form-control" 
                          placeholder=" enter physics grade" >

                          <label for="number2">chemistry</label>
                          <input type="number" name="number2" class="form-control" 
                          placeholder=" enter chemistry grade" >

                          <label for="number3">bio</label>
                          <input type="number" name="number3" class="form-control" 
                          placeholder=" enter bio grade" >
						  
						  <label for="number4">math</label>
                          <input type="number" name="number4" class="form-control" 
                          placeholder=" enter math grade" >
						  
						  <label for="number5">comp</label>
                          <input type="number" name="number5" class="form-control" 
                          placeholder=" enter comp grade" >
                        </div>
                        <button class="btn btn-outline-dark rounded btn-sm"> Get max/min </button>

                  </form>
				  <?php 
                       if($_POST){
                          echo $msg;
                       }
					   
                    ?>
                 
</div>
</div>
</body>
</html>