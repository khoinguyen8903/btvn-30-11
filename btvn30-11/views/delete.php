<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Xóa Sản Phẩm</title>
</head>
<body>
    <h1>Xóa Sản Phẩm</h1>
    <p>Bạn có chắc chắn muốn xóa sản phẩm này không?</p>
<!-- Xóa sản phẩm -->
<!-- Xóa sản phẩm -->
<form action="/index.php?controller=ProductsController&action=delete" method="POST" style="display:inline;">
    <input type="hidden" name="id" value="<?= $product['id'] ?>">
    <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">Xóa</button>
</form>


</body>
</html>
