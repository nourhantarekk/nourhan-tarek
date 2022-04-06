<?php
if($_POST){
	$use=($_POST['number1']) ;
    if($use <=50)
    $bill=$use*0.5;
	elseif ($use <=150)
      $bill=$use*0.75;
    elseif ($use <=250)
      $bill=$use*1.20;
	  elseif ($use >250)
   $bill=$use*1.50;
   $ad_charge=($bill*0.20);
   $bill+=$ad_charge;
    $msg="<div class='alert alert-success'>
Your bill is:$bill <br>
your usage:$use
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
                          <label for="number1">usage</label>
                          <input type="number" name="number1" class="form-control" 
                          placeholder=" enter no. pf units" >

                          
                        </div>
                        <button class="btn btn-outline-dark rounded btn-sm"> Get bill </button>

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