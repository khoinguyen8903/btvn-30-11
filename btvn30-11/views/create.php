<form action="index.php?controller=ProductsController&action=create" method="POST">
    <div>
        <label for="name">Tên Sản Phẩm:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="price">Giá:</label>
        <input type="number" id="price" name="price" required>
    </div>
    <div>
        <button type="submit">Thêm Sản Phẩm</button>
    </div>
</form>
