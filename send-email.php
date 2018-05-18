<?php $products = $_SESSION['cart'];
$to = MANAGER_EMAIL;
$subject = "Shop";

$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type:text/html;charset=UTF-8";
$headers[] = 'From: <' . filter_var($_POST['email']) . '>';

?>
<html>
<body>
<title>Cart list from ClotheShop</title>
<div>
    <h4>Email: <?php echo filter_var($_POST['email']); ?></h4>
</div>
<div>
    <h4>Comment: <?php echo filter_var($_POST['comments']); ?></h4>
</div>
<table>
    <thead>
    <tr>
        <th>Title</th>
        <th>Price</th>
    </tr>
    </thead>
    <tbody>
    <tr>
		<?php foreach ($products as $product) : ?>
            <td>  <?php echo $product->title ?>   </td>
            <td>  <?php echo $product->price ?>   </td>
		<?php endforeach; ?>
    </tr>
    </tbody>
</table>
</body>
</html>


