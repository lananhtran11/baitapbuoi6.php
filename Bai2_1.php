<?php
$dbh = mysqli_connect('localhost', 'root' ,'');
if (!$dbh)
die ("Unable to connect MySQL: ". mysqli_error());
if (!mysqli_select_db($dbh,'baitapbuoi6' ))
die ("Unable to select database:". mysqli_error());
// // Tao bang
$sql_stmt = "CREATE TABLE IF NOT EXISTS `Lichsugiaodich`(
    `Magiaodich` int NOT NULL AUTO_INCREMENT,
    `Ngaygiaodich` date NOT NULL,
    `Loaigiaodich` varchar(10) NOT NULL,
    `Sotien` char(15) NOT NULL,
    `Mota` varchar(100) NOT NULL,
    PRIMARY KEY (`Magiaodich`)
)";
$result = mysqli_query ($dbh, $sql_stmt);
if (!$result) {
    die ("Adding record failed :" . mysql_error());
}
else
{
    echo "Bang da duoc tao thanh cong";
};
// Thêm một giao dịch mới vào bảng lịch sử với thông tin: ngày giao dịch là 7/5/2023, loại giao dịch là "rút tiền", số tiền là 500, mô tả là "rút tiền ATM".
$sql_stmt = "INSERT INTO `Lichsugiaodich`(`Magiaodich`, `Ngaygiaodich`, `Loaigiaodich`, `Sotien`, `Mota`)";
$sql_stmt .= "VALUES('01', '2023-5-7', 'rut tien', '500', 'Rut tien ATM'),
                    ('02', '2023-5-8', 'rut tien', '100', 'Rut tien ATM'),          
                    ('03', '2023-5-9', 'rut tien', '600', 'Rut tien ATM'),
                    ('04', '2023-5-10', 'rut tien', '700', 'Rut tien ATM'),
                    ('05', '2023-5-11', 'rut tien', '300', 'Rut tien ATM')";
$result = mysqli_query ($dbh, $sql_stmt);
if (!$result){
    die ("Adding record failed:". mysqli_error());
}
else 
{
    echo "Thong tin giao dich da duoc them vao bang";
};
// // Cập nhật số tiền của giao dịch có số thứ tự 3 trong bảng lịch sử thành 1000.
$sql_stmt = "UPDATE `Lichsugiaodich` SET `sotien`='1000'";
$sql_stmt .= "WHERE `Magiaodich`='03'";
$result= mysqli_query($dbh, $sql_stmt);
if (!$result){
    die ("Adding record failed:". mysql_error());
}
else
{
    echo "Thong tin giao dich da duoc cap nhat";
};
// Xoá thông tin của giao dịch có số thứ tự 5 khỏi bảng lịch sử.
$sql_stmt = "DELETE FROM `Lichsugiaodich` WHERE `Magiaodich` = '05'"; 
$result= mysqli_query($dbh, $sql_stmt);
if (!$result){
    die ("Adding record failed:". mysql_error());
}
else
{
    echo "Thong tin giao dich da duoc xoa khoi danh sach";
};
?>