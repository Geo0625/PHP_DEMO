<!-- php code with variable data assignment -->
<!-- Linking php file to html -->
<?php include 'purephp.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DEMO BSIT BA 3101</title>
</head>
<body>
    <a href="example2.php">Email</a>
    <!-- <h1>Hello, World!</h1> -->
    <?php //echo "<h1>Hello, World</h1>";?>
    
    <!-- shortcut of echo -->
    <?//= $user_id?>

    <h2>Username: <u><?php echo $username; ?></u></h2>
    <h2>Student Name: <u><?php echo $name; ?></u></h2>
    <h2>Year: <u><?php echo $year; ?></u></h2>
    <h2>User ID: <u><?php echo $user_id; ?></u></h2>


    <button type="button" onclick="greetUser()">Greet User</button>

    <script>
        // variables
        var username = "<?php echo $username?>";
        var user_id = "<?php echo $user_id?>";
        var name = "<?php echo $name?>";
        var year = "<?php echo $year?>";

        //function
        function greetUser(){
            alert("Hello " + username + "! " + "\nUser ID: " + user_id + " " + "\nName: " + name + "\nYear: " + year);
        }
    </script>
</body>
</html>