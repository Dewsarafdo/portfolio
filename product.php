<?php include 'config/db.php'; include 'includes/header.php';
$id=$_GET['id'];
$p=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM products WHERE id=$id"));
?>
<div class="product">
<img src="assets/images/<?php echo $p['image']; ?>">
<div>
<h2><?php echo $p['name']; ?></h2>
<p><?php echo $p['description']; ?></p>
<h3>Rs <?php echo $p['price']; ?></h3>
<a href="cart.php?id=<?php echo $id; ?>" class="btn">Add to Cart</a>
</div>
</div>
<?php include 'includes/footer.php'; ?>