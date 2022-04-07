<?php
// dynamic table
// dynamic rows
// dynamic columns
// check if gender of user == m ==> male
// check if gender of user == f ==> female

$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'football', 'swimming', 'running'
        ],
        'activities' => [
            "school" => 'drawing',
            'home' => 'painting'
        ],
        
    ],
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],
    (object)[
        'id' => 3,
        'name' => 'menna',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
        
        
    ], 
     
];

?>
<!doctype html>
<html lang="en">

<head>
    <title>table</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
	<div class="col ">
	<table class="table">
            <?php foreach ($users as $user)
			{ ?>
            <tr> 
            <?php foreach ($user as $key=>$value )
			{ ?>
			   
               <td>
               <?php if ($key=='id')
			      {echo( $user->id);
                continue;
                }
                

			  
                     elseif ($key=='name')
                    {echo $user->name;
                    continue;
                }

               
                     elseif ($key=='gender')
                     {{if( $user->gender->gender=='f')
					echo "female";
				    elseif($user->gender->gender== 'm')
                    echo( "male");}
                        continue;
                    }
                        
						
                              else 
                              {print_r($user->$key);
                                continue;
                              }?></td>
						</tr>
			 <?php } ?>
             <?php } ?>
            </table>
            </div>
            </div>
			</body>
			</html>