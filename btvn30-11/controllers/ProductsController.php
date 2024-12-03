<?php
require_once __DIR__ . '/../Models/Products.php';

class ProductsController
{
    private $model;

    public function __construct($pdo)
    {
        $this->model = new Product($pdo);
    }

    public function index()
    {
        $products = $this->model->getAll();
        include __DIR__ . '/../views/index.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $price = $_POST['price'];
            
            // Không xử lý ảnh nữa
            $image = '';
    
            $this->model->create($name, $price, $image);
            header('Location: index.php?controller=ProductsController&action=index');
        } else {
            include __DIR__ . '/../views/create.php';
        }
    }

    public function update($id, $newArgument = null)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy dữ liệu từ form POST
            $name = $_POST['name'];
            $price = $_POST['price'];
            $image = null; // Giả sử bạn không xử lý ảnh nữa
    
            // Kiểm tra nếu có đối số mới (nếu có)
            if ($newArgument !== null) {
                // Xử lý với $newArgument nếu cần
            }
    
            // Cập nhật sản phẩm trong cơ sở dữ liệu
            $this->model->update($id, $name, $price);
    
            // Sau khi cập nhật, chuyển hướng lại trang danh sách
            header('Location: index.php?controller=ProductsController&action=index');
            exit();
        } else {
            // Khi không phải POST, lấy dữ liệu sản phẩm để hiển thị lên form sửa
            $product = $this->model->getById($id);
            include __DIR__ . '/../views/edit.php';
        }
    }
    

    public function delete()
    {
        // Lấy id từ POST
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $this->model->delete($id);
            header('Location: index.php?controller=ProductsController&action=index');
        } else {
            // Nếu không có id, chuyển hướng về trang danh sách sản phẩm
            header('Location: index.php?controller=ProductsController&action=index');
        }
    }
}
?>
