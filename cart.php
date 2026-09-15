<?php include 'config/db.php'; include 'includes/header.php';
if(isset($_GET['id'])){
mysqli_query($conn,"INSERT INTO cart(product_id,quantity) VALUES($_GET[id],1)");
}
$q=mysqli_query($conn,"SELECT products.name,products.price FROM cart JOIN products ON cart.product_id=products.id");
$total=0;
echo "<h2>Your Cart</h2>";
while($c=mysqli_fetch_assoc($q)){
$total+=$c['price'];
echo "<p>".$c['name']." - Rs ".$c['price']."</p>";
}
echo "<h3>Total: Rs $total</h3>";
?>
<a href="checkout.php" class="btn">Checkout</a>
<?php include 'includes/footer.php'; ?>