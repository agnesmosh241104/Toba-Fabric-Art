<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

require 'db.php'; // File koneksi database

$user_id = $_SESSION['user_id'];

// Fetch all products
$query = "SELECT * FROM products";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome to your dashboard</h2>
    <h3>Product List</h3>
    <ul>
        <?php while ($product = $result->fetch_assoc()) : ?>
            <li>
                <?php echo $product['name']; ?> - $<?php echo $product['price']; ?>
                <form method="POST" action="add_to_wishlist.php" style="display:inline;">
                    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                    <button type="submit">Add to Wishlist</button>
                </form>
            </li>
        <?php endwhile; ?>
    </ul>

    <a href="wishlist.php">View Wishlist</a>
</body>
</html>
