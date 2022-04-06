<?php
if($_POST){
	
	$numbr=0;
	$n1=($_POST['number1']) ;
	$root=($_POST['number2']) ;
	$numbr=pow($n1,(1/$root));
    $msg="<div class='alert alert-success'>
	Your num is:$n1<br>
Your base is:$numbr<br>
your root is:$root
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
                          <label for="number1">num1</label>
                          <input type="number" name="number1" class="form-control" 
                          placeholder=" enter num 1" >
						  
						  <label for="number2">num2</label>
                          <input type="number" name="number2" class="form-control" 
                          placeholder=" enter root" >
						  
						   

                        </div>
                        <button class="btn btn-outline-dark rounded btn-sm"> get sum </button>

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