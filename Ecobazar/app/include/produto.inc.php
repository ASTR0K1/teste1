<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $nome = $_POST['nome'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $fornecedor = $_POST['fornecedor'];
    $marca = $_POST['marca'];
    $descricao = $_POST['descricao'];

    require_once '../../config/database.php';

    // Handle file upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $imageTmpPath = $_FILES['image']['tmp_name'];
        $imageName = $_FILES['image']['name'];
        $imageSize = $_FILES['image']['size'];
        $imageType = $_FILES['image']['type'];
        
        $allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'];
        if (in_array($imageType, $allowedTypes)) {
            $uploadDir = 'uploads_pictures/';
            $destinationPath = $uploadDir . $imageName;
            
            if (move_uploaded_file($imageTmpPath, $destinationPath)) {
                // Insert product into database
                $stmt = $pdo->prepare('INSERT INTO Produtos (nome, price, stock, fornecedor, marca, descricao, image) VALUES (?, ?, ?, ?, ?, ?, ?);');
                if ($stmt->execute([$nome ,$price ,$stock ,$fornecedor ,$marca ,$descricao ,$destinationPath])) {
                    header('Location: ../../public/page-admin-produtos.php?novo+produto');
                    echo "Product added successfully.";
                } else {
                    echo "Failed to add product.";
                }
            } else {
                echo "Failed to move uploaded file.";
            }
        } else {
            echo "Unsupported file type.";
        }
    }else {
        echo "No file uploaded or there was an upload error.";
    }
} else {
    echo "Invalid request method.";
}
