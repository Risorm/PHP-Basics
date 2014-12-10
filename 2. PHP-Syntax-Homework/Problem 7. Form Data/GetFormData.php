<?php

/*Write a PHP script GetFormData.php which retrieves the input data from an HTML form, and displays it as string.
The input fields should hold name, age and gender (radio buttons). The returned string should be a message containing
the information submitted by the form. 100% accuracy is NOT required. Semantic HTML is required. */

function GetData() {
    if (isset($_POST['SubmitButton'])) {
        $name = $_POST['name'];
        $age = intval($_POST['age']);
        $gender = $_POST['gender'];?>
        <p><?php echo "My name is {$name}. I am {$age} years old. I am a {$gender}."; ?></p>
    <?php
    }
}
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <style>
        form {
            width: 150px;
        }
    </style>
    <meta charset="UTF-8">
    <title>Get Form Data</title>
</head>
<body>
<form action="GetFormData.php" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" required/>
    <label for="age">Age</label>
    <input type="text" name="age" required/>
    <input type="radio" name="gender" id="female" value="female" required/>
    <label for="female">Female</label>
    <input type="radio" name="gender" id="male" value="male" required/>
    <label for="male">Male</label>
    <input type="submit" name="SubmitButton"/>
</form>
<?php GetData()?>
</body>
</html>