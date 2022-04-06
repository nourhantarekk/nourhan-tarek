<?php
if($_POST){
    if($_POST['number1'] > $_POST['number2'])
    {
        if($_POST['number1'] > $_POST['number3'])   
        {
        $maxx=$_POST['number1'];
        if($_POST['number2'] > $_POST['number3'])
        $minn=$_POST['number3'];
        else
        $minn=$_POST['number2'];
    }
        else{
            $maxx=$_POST['number3'];
            $minn=$_POST['number2'];
        }
    }
    elseif($_POST['number2'] > $_POST['number3'])
    {$maxx=$_POST['number2'];
    if($_POST['number1']>$_POST['number3'])
    $minn=$_POST['number3'];
    }
    else{
        $maxx=$_POST['number3'];
        $minn=$_POST['number1'];
    }
    $msg="<div class='alert alert-success'>
<ul>
    <li>max is: $maxx</li>
    <li>min is: $minn</li>
    </ul>
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
                          <label for="number1">First num</label>
                          <input type="number" name="number1" class="form-control" 
                          placeholder=" enter first num" >

                          <label for="number2">sec num</label>
                          <input type="number" name="number2" class="form-control" 
                          placeholder=" enter sec num" >

                          <label for="number3">Third num</label>
                          <input type="number" name="number3" class="form-control" 
                          placeholder=" enter third num" >
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