<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- CSS -->

    <!-- main css -->
    <link rel="stylesheet" href="css/style.css"> 
    <!-- signUp css  -->
     <link rel="stylesheet" href="css/signup.css">

</head>
<body>
    

    <h3 class="h3-signup">Signup</h3>

    <form class="form-signup" action="includes/formhandler.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="E-Mail">
        <button class="button-style">SignUp</button>
    </form>


    <h3 class="h3-signup">Change Password and Email</h3>

    <form class="form-signup" action="includes/userupdate.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="E-Mail">
        <button class="button-style">Update</button>
    </form>

    <h3 class="h3-signup">Delete account</h3>

    <form class="form-signup" action="includes/userdelete.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button class="button-style">Delete</button>
    </form>
</body>
</html>