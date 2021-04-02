<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        div {
            margin: 5px 0px;
        }

        label {
            display: inline-block;
            min-width: 70px;
        }

        form > input {
            margin: 4px 0px 0px 100px;
        }

        .success {
            color: green;
        }

        .fail {
            color: red;
        }
    </style>
<body>
    <?php
        include('./connect.php');
        if(isset($_POST['Luu'])) {
            $TenKH = $_POST['TenKH'];
            $SoLuong = $_POST['SoLuong'];
            $DonGia = $_POST['DonGia'];
            $TongTien = $SoLuong * $DonGia;

            $sqlUpdate = 'update muahang set TenKH = "'.$TenKH.'", 
            SoLuong = "'.$SoLuong.'", DonGia = "'.$DonGia.'", TongTien="'.$TongTien.'" where MaKH = "'.$_GET['Makh'].'"';
            $result = mysqli_query($conn, $sqlUpdate);

            // Phần này ko bắt buộc phải có.
            //Start
            if($result) {
                echo '<p style="color: green;">Cập Nhật TT Khách Hàng Thành Công</p>';
            } else {
                echo '<p style="color: red;">Cập Nhật TT Khách Hàng That Bai</p>';
            } //End
        }

            $sqlSelect = 'select * from muahang where MaKH = "'.$_GET['Makh'].'"';
            $resultSelect = mysqli_query($conn, $sqlSelect);
            $row = mysqli_fetch_array($resultSelect);
    ?>
<h3>Sửa Thông Tin Khách Hàng</h3>
    <form action="" method="POST">
        <div>
            <label for="">Ma KH:</label>
            <input type="text" name="MaKH" disabled value=<?php echo $row['MaKH']?> >
        </div>
        <div>
            <label for="">Ten KH:</label>
            <input type="text" name="TenKH" value="<?php echo $row['TenKH']?>" >
        </div>
        <div>
            <label for="">So Luong:</label>
            <input type="number" name="SoLuong" value="<?php echo $row['SoLuong']?>" >
        </div>
        <div>
            <label for="">Don Gia:</label>
            <input type="text" name="DonGia" value="<?php echo $row['DonGia']?>" >
        </div>
        <input type="submit" name="Luu" value="Lưu lại">
    </form>
</body>
</html>