<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Person</title>
    <link rel="stylesheet" href="assets/css/stylesheet.css" type="text/css">
</head>
<body>
    <div id="input-box">

        <h1 id="titel">Create account</h1>
        <form action="insert.php" method="GET" id="input-form">
            <label for="input-firstname">FirstName</label><br>
            <input type="text" name="input-firstname" id="input-firstname" required><br>
            <label for="input-lastname">Lastname</label><br>
            <input type="text" name="input-lastname" id="input-Lastname" required><br>
            <label for="input-age">age</label><br>
            <input type="number" name="input-age" id="input-age" required><br>
            <label for="input-gender">Gender</label><br>
            <select name="input-gender" id="input-gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select><br>
            <label for="input-description">Description</label><br>
            <textarea name="input-description" id="input-description" rows="5" cols="40"></textarea>
            <div id="button-add-account"><input type="submit" value="Create Account"></div>
        </form>

        
    </div>
    <div id="input-box2">
        <h1>ACCOUNT HAS BEEN CREATED</h1>
        <div id="button-add-another-account">Add another account</div>
        <div id="button-house">Add accounts to house</div>
    </div>
    

    <script src="assets/js/scriptaddperson.js"></script>
</body>
<?php
 include "connection.php";
            $conn = new Database("localhost", "root", "root", "sorting_hat","3306");
           $firstname = $_GET['input-firstname'];
           $lastname = $_GET['input-Lastname'];
           $age = $_GET['input-age'];
           $gender = $_GET['input-gender'];
           $description = $_GET['input-description'];
           $conn->insertQuery("INSERT INTO acc (firstname,name, age, gender, description) VALUES ('$firstname',$lastname, $age,'$gender', '$description')");
            $people = $conn->getQuery("SELECT * from sorting_hat;");?>
</html>
