<?php 
include 'config/db.php'; 
include 'includes/header.php';
?>

<h2 class="title1">Shop</h2>

<div class="filters">
    <button onclick="filterProducts('all')">All</button>
    <button onclick="filterProducts('men')">Men</button>
    <button onclick="filterProducts('women')">Women</button>
    <button onclick="filterProducts('kids')">Kids</button>
</div>

<div class="grid1">
<?php
$query = mysqli_query($conn, "SELECT * FROM products ORDER BY created_at DESC");
while($p = mysqli_fetch_assoc($query)){
?>
    <div class="card1" data-category="<?php echo $p['category']; ?>">
        <img src="assets/images/<?php echo $p['image']; ?>" alt="">
        <h3><?php echo $p['name']; ?></h3>
        <p class="price1">Rs <?php echo $p['price']; ?></p>
        <p class="desc1"><?php echo $p['description']; ?></p>
        <a href="product.php?id=<?php echo $p['id']; ?>" class="btn1">View Product</a>
    </div>
<?php } ?>
</div>

<script>
function filterProducts(category) {
    let cards = document.querySelectorAll('.card1');
    cards.forEach(card => {
        card.style.display =
            (category === 'all' || card.dataset.category === category)
            ? 'block' : 'none';
    });
}
</script>

<?php include 'includes/footer.php'; ?>
