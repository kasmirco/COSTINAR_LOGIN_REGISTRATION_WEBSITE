
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <?php
            session_start();
            if (isset($_SESSION["user"])) {
        ?>
        <h1>Welcome to Dashboard</h1>
        <a href="logout.php" class="btn btn-warning">Logout</a>
        <?php } else { ?>
            <h1>Welcome to Homepage</h1>
            <div class="input">
            <big><button onclick="window.location.href='login.php';">Teacher</button>
            <i class='bx bxs-user'></i>
        <br></br>
            <button onclick="window.location.href='login.php';">Student</button>
            <i class='bx bxs-user'></i> </big>
            <div class="input">
        </div>
        <?php }?>
    </div>
</body>
</html>