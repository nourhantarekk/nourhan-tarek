<?php
if($_POST){
	
    if($_POST['number1'] > 0)
    {
    $msg1="<div class='alert alert-success'>
			number1 is positive
    </div>";}
	else{$msg1="<div class='alert alert-success'>
			number1 is negative
    </div>";}
		
	    if($_POST['number2'] > 0)
    {
    $msg2="<div class='alert alert-success'>
			number2 is positive
    </div>";}
	else{$msg2="<div class='alert alert-success'>
			number2 is negative
    </div>";}
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
                          <label for="number1">First num</label>
                          <input type="number" name="number1" class="form-control" 
                          placeholder=" enter first num" >

                          <label for="number2">sec num</label>
                          <input type="number" name="number2" class="form-control" 
                          placeholder=" enter sec num" >

                         
                        </div>
                        <button class="btn btn-outline-dark rounded btn-sm"> Get sign </button>

                  </form>
				  <?php 
                       if($_POST){
                          echo $msg1;
						  echo $msg2;
                       }
					   
                    ?>
                 
</div>
</div>
</body>
</html>