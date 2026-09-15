
<?php include 'includes/header.php';
include 'config/db.php';
$id=$_GET['id'];
$p=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM products WHERE id=$id"));
?>
<h2><?= $p['name'] ?></h2>
<img src="assets/images/products/<?= $p['image'] ?>">
<p><?= $p['description'] ?></p>
<p class="price">$<?= $p['price'] ?></p>
<button onclick="addToCart(<?= $p['id'] ?>)">Add to Cart</button>
<?php include 'includes/footer.php'; ?>
