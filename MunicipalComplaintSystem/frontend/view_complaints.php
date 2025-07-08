<?php
session_start();
$lang = $_GET['lang'] ?? 'en';

$title = "Login";
$heading = "Login";
$email_label = "Email";
$password_label = "Password";
$submit_btn = "Login";
$register_text = "Don't have an account?";
$register_link = "Register";

if ($lang === 'ur') {
    $title = "لاگ ان کریں";
    $heading = "لاگ ان کریں";
    $email_label = "ای میل";
    $password_label = "پاس ورڈ";
    $submit_btn = "لاگ ان";
    $register_text = "اکاؤنٹ نہیں ہے؟";
    $register_link = "رجسٹریشن کریں";
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #e3f2fd;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
            width: 350px;
            max-width: 90%;
        }

        h2 {
            text-align: center;
            color: #007BFF;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #007BFF;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 6px;
            margin-top: 20px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        p {
            text-align: center;
            margin-top: 15px;
        }

        a {
            color: #007BFF;
            text-decoration: none;
        }

        .language-switch {
            text-align: right;
            margin-bottom: 10px;
        }

        .language-switch a {
            margin-left: 10px;
            color: #007BFF;
            font-weight: bold;
        }

        .language-switch a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="language-switch">
            <a href="?lang=en">English</a> | <a href="?lang=ur">اردو</a>
        </div>

        <h2><?php echo $heading; ?></h2>

        <form action="../backend/login_process.php" method="POST">
            <input type="email" name="email" required placeholder="<?php echo $email_label; ?>">
            <input type="password" name="password" required placeholder="<?php echo $password_label; ?>">
            <input type="submit" value="<?php echo $submit_btn; ?>">
        </form>

        <p><?php echo $register_text; ?> <a href="register.php?lang=<?php echo $lang; ?>"><?php echo $register_link; ?></a></p>
    </div>
</body>
</html>

