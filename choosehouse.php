<?php
 include "connection.php";
            $conn = new Database("localhost", "root", "root", "sorting_hat","3306");
            $people = $conn->getQuery("SELECT * from sorting_hat;");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <?php
            foreach ($people as $lol) {
            ?>
                <tr> 
                    <th> 
                        <?php echo $lol["firstname"];?> 
                    </th> 
                    <th> 
                        <?php echo $lol["name"];?> 
                    </th> 
                    <th>
                        <?php echo $lol["age"]; ?>
                    </th>
                    <th> 
                        <?php echo $lol["gender"]; ?>
                    </th>
                    <th> 
                        <?php echo $lol["description"]; ?>
                    </th>
                </tr> 
            <?php
            }
            ?>
                
    </h2>
    <?php
    foreach ($people as $lol) {
            ?>
                <tr> 
                    <th> 
                        <?php echo $lol["house"];?> 
                    </th> 
                    <th> 
                        <?php echo $lol["house"];?> 
                    </th> 
                    <th>
                        <?php echo $lol["house"]; ?>
                    </th>
                    <th> 
                        <?php echo $lol["house"]; ?>
                    </th>
                   
                </tr> 
            <?php
            }
            ?>
            </h2>
</body>
</html>