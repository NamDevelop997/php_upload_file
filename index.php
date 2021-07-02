<?php
require 'lib/show_arr.php';
// show_array($_FILES);
// tạo biến để lưu trữ hình ảnh trong thư mục 
$upload_dir = "upload/";
// đường dẫn của file sau khi upload  
$upload_file = $upload_dir . $_FILES['file_upload']['name'];

if (move_uploaded_file($_FILES['file_upload']['tmp_name'], $upload_file)) {
    echo "<a href= '{$upload_file}'>Download file {$_FILES['file_upload']['tmp_name']} </a>";
} else {
    echo "upload file fails!";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP form upload file</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file_upload"> <br><br>
        <input type="submit" value="submit">
    </form>
</body>

</html>