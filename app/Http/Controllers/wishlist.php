<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

require 'db.php'; // File koneksi database

$user_id = $_SESSION['user_id'];

// Fetch wishlist
$query = "SELECT products.name, products.price FROM wishlist 
          JOIN products ON wishlist.product_id = products.id 
          WHERE wishlist.user_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wishlist</title>
</head>
<body>
    <h2>Your Wishlist</h2>
    <ul>
        <?php while ($item = $result->fetch_assoc()) : ?>
            <li><?php echo $item['name']; ?> - $<?php echo $item['price']; ?></li>
        <?php endwhile; ?>
    </ul>
    <a href="dashboard.php">Back to Dashboard</a>
</body>
</html>
