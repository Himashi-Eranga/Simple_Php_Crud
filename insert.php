<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Insert user Details</h1>
    <form action="./addDetails.php" method="POST">
        <lable>User Name:</lable>
        <input type="text" name="uname"></br></br>
        <lable>User Gmail:</lable>
        <input type="email" name="ugmail"></br></br>
        <lable>Phone Number:</lable>
        <input type="text" name="unumber"></br></br>
        <lable>User Address:</lable>
        <input type="text" name="uaddress"></br></br>
        <lable>Password:</lable>
        <input type="password" name="upassword"></br></br>
        <button type="submit">Submit</button>

    </form>
</body>
</html>