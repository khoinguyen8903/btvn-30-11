<?php
// Lấy controller và action từ URL, nếu không có sẽ mặc định là 'ProductsController' và 'index'
$controllerName = isset($_GET['controller']) ? $_GET['controller'] : 'ProductsController'; 
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null; // Lấy id từ URL

// Bao gồm tệp connect.php để kết nối cơ sở dữ liệu
require_once __DIR__ . '/connect.php';

// Bao gồm controller để xử lý logic
require_once __DIR__ . '/controllers/ProductsController.php';

// Kiểm tra nếu controller tồn tại
if (class_exists($controllerName)) {
    // Khởi tạo controller
    $controller = new $controllerName($pdo);

    // Kiểm tra nếu action tồn tại trong controller
    if (method_exists($controller, $action)) {
        // Nếu action là 'update', truyền tham số $id
        if ($action === 'update' && $id !== null) {
            $controller->$action($id); // Truyền id vào phương thức update
        } else {
            // Nếu không cần id, gọi action bình thường
            $controller->$action();
        }
    } else {
        // Action không tồn tại
        echo "Action không tồn tại!";
    }
} else {
    // Controller không tồn tại
    echo "Controller không tồn tại!";
}

?>
