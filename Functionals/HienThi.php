<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        table {
            border-collapse: collapse;
        }

        table td,th {
            padding: 4px 20px;
            text-align: center;
        }

        form {
            margin-top: 30px;
        }

        form > input {
            margin-left: 6px;
        }
    </style>
<body>
    <h3 style="margin-left: 160px;">Thong Tin Khach Hang</h3>
    <table border="1">
        <?php
            include('../connect.php');
            $keyword = isset($_GET['submit']) ? 'where TenKH="'.$_GET['TenKH'].'"' : '';
            $sqlSelect = 'select * from muahang ' . $keyword;
            $result = mysqli_query($conn, $sqlSelect);

    // lấy ra giá trị của key num_rows để biết rằng kết quả từ lệnh query có trả về row data nào ko
            if($result -> {'num_rows'}) {
                echo '<tr><th>MaKH</th> <th>TenKH</th> <th>SoLuong</th> <th>DonGia</th> <th>TongTien</th></tr>';
                while($row = mysqli_fetch_array($result)) {
                    echo '<tr><td>'.$row['MaKH'].'</td> <td>'.$row['TenKH'].'</td>
                    <td>'.$row['SoLuong'].'</td> <td>'.$row['DonGia'].'</td>
                    <td>'.$row['TongTien'].'</td></tr>';
                }
            } else {
                echo '<p>Tên Khách Hàng Được Tìm Kiếm Không Tồn Tại.<br>Vui Lòng Nhập Lại!</p>';
            }
        ?>
    </table>

    <form action="" method="GET">
        <label for="">Nhap Ten KH Can Tim:</label>
        <input type="text" name="TenKH">
        <input type="submit" name="submit" value="Tìm">
    </form>
</body>
</html>