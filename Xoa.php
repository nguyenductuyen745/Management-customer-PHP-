<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form > input:last-child {
            display: block;
            margin: 6px 0px 0px 100px;
        }
    </style>
</head>
<body>
    <h3>Xóa TT Khách Hàng</h3>
    <form action="" method="GET">
        <label for="">Ma Kh:</label>
        <input type="text" name="MaKH">
        <input type="submit" name="submit" value="Xóa">
    </form>
    <?php
        include('./connect.php');
        if(isset($_GET['submit'])) {
            $sqlDelete = 'delete from muahang where MaKH = "'.$_GET['MaKH'].'"';
            $result = mysqli_query($conn, $sqlDelete);

            // Phần này ko bắt buộc phải có.
            if($result) {
                echo '<p style="color: green;">Xóa TT Khách Hàng Thành Công</p>';
            } else {
                echo '<p style="color: red;">Xóa TT Khách Hàng Thất Bại</p>';
            }
        }
    ?>
</body>
</html>