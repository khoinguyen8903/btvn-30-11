<form action="index.php?controller=ProductsController&action=update" method="POST">
    <!-- Truyền id dưới dạng hidden -->
    <input type="hidden" name="id" value="<?= htmlspecialchars($product['id']) ?>">

    <div>
        <label for="name">Tên Sản Phẩm:</label>
        <input type="text" id="name" name="name" value="<?= htmlspecialchars($product['name']) ?>" required>
    </div>
    <div>
        <label for="price">Giá:</label>
        <input type="number" id="price" name="price" value="<?= htmlspecialchars($product['price']) ?>" required>
    </div>
    <div>
        <button type="submit">Cập Nhật</button>
    </div>
</form>
