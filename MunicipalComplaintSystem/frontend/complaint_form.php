
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Submit Complaint</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Submit a Complaint</h2>
        <form action="../backend/submit_complaint.php" method="POST">
            <label for="category">Category:</label><br>
            <select id="category" name="category" required>
                <option value="">-- Select Category --</option>
                <option value="Garbage">Garbage</option>
                <option value="Water Supply">Water Supply</option>
                <option value="Road Damage">Road Damage</option>
                <option value="Street Lights">Street Lights</option>
                <option value="Traffic">Traffic</option>
                <option value="Drainage">Drainage</option>
                <option value="Other">Other</option>
            </select>

            <label for="description">Description:</label><br>
            <textarea id="description" name="description" rows="5" required placeholder="Describe your issue here..."></textarea><br><br>

            <input type="submit" value="Submit Complaint">
        </form>

        <p><a href="view_complaints.php">View My Complaints</a></p>

        <div style="text-align: center; margin-top: 30px;">
            <a href="../logout.php" style="
                padding: 10px 20px;
                background-color: #007BFF;
                color: white;
                text-decoration: none;
                border-radius: 5px;
                font-size: 16px;
            ">Logout</a>
        </div>
    </div>
</body>
</html>
