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
            background: linear-gradient(to right, #e0eafc, #cfdef3);
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding-top: 40px;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            padding: 40px;
            border-radius: 12px;
            width: 95%;
            max-width: 900px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            font-size: 18px;
        }

        .language-switch {
            text-align: right;
            margin-bottom: 10px;
        }

        .language-switch a {
            margin-left: 10px;
            color: #007BFF;
            font-weight: bold;
            text-decoration: none;
        }

        .language-switch a:hover {
            text-decoration: underline;
        }

        h2 {
            text-align: center;
            color: #007BFF;
            margin-bottom: 30px;
            font-size: 28px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input[type="email"],
        input[type="password"] {
            padding: 12px;
            font-size: 16px;
            border-radius: 6px;
            border: 1px solid #ccc;
            width: 100%;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 12px;
            font-size: 18px;
            border-radius: 6px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        p {
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
        }

        a {
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
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
