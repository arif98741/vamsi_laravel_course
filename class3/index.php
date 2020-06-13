<?php 
    require 'App/Form.php';
    $response = [];
    if(isset($_POST['submit_form']))
    {
        $form = new Form();
        $response = $form->submitForm($_POST);
        $response = $response->error;

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <p>Name</p>
        <input type="text" name="name">
        <br>

        <p>Age</p>
        <input type="text" name="age">
        <br>


        <p>Email</p>
        <input type="text" name="email">
        <br>

        <p>Address</p>
        <textarea name="address" id="" cols="30" rows="4"></textarea>
        <br>
        <br>

        <button type="submit" name="submit_form">Submit Now</button>
    
    </form>
    <?php if(count($response) != 0): ?>
        <?php foreach($response as $value){ ?>
            <p class="error"><?php echo $value; ?></p>
        <?php } ?>
    <?php endif; ?>

</body>
</html>

