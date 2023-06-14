<?php
<?php
$DB_TYPE = "mysql";
$DB_HOST = "localhost";
$DB_NAME = "baitapbuoi6.2";
$USER_NAME = "root";
$USER_PASSWORD = "";

$lk = new PDO("$DB_TYPE:host=$DB_HOST;dbname=$DB_NAME", $USER_NAME, $USER_PASSWORD);
// Tao bang
$stsm = $lk->prepare('CREATE TABLE IF NOT EXISTS `Lichsugiaodich` (
   `Magiaodich` int NOT NULL AUTO_INCREMENT,
    `Ngaygiaodich` date NOT NULL,
    `Loaigiaodich` varchar(10) NOT NULL,
    `Sotien` char(15) NOT NULL,
    `Mota` varchar(100) NOT NULL,
    PRIMARY KEY (`Magiaodich`)
)');
$result=$stsm-> execute();
if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
} 
else 
{
    echo "Bang da duoc tao thanh cong";
};
// Thêm một giao dịch mới vào bảng lịch sử với thông tin: ngày giao dịch là 7/5/2023, loại giao dịch là "rút tiền", số tiền là 500, mô tả là "rút tiền ATM".
$stsm = $lk->prepare('INSERT INTO `sinhvien`(`Magiaodich`, `Ngaygiaodich`, `laoigiaodich`, `Sotien`, `Mota`) 
VALUE (?, ?, ?, ?, ?)');
$s1 = array('01', '2023-5-7', 'rut tien', '500', 'Rut tien ATM');
$s2 = array('02', '2023-5-8', 'rut tien', '100', 'Rut tien ATM');
$s3 = array('03', '2023-5-9', 'rut tien', '600', 'Rut tien ATM');
$s4 = array('04', '2023-5-10', 'rut tien', '700', 'Rut tien ATM');
$s5 = array('05', '2023-5-11', 'rut tien', '300', 'Rut tien ATM');

$result1=$stsm-> execute($s1);
if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
} 
else 
{
    echo "Thong tin cua giao dich da duoc them vao bang";
}
$result2=$stsm-> execute($s2);
if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
} 
else 
{
    echo "Thong tin cua giao dich da duoc them vao bang";
}
$result3=$stsm-> execute($s3);
if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
} 
else 
{
    echo "Thong tin cua giao dich da duoc them vao bang";
}
$result4=$stsm-> execute($s4);
if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
} 
else 
{
    echo "Thong tin cua giao dich da duoc them vao bang";
}
$result5=$stsm-> execute($s5);
if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
} 
else 
{
    echo "Thong tin cua giao dich da duoc them vao bang";
};
// Cập nhật số tiền của giao dịch có số thứ tự 3 trong bảng lịch sử thành 1000.
$stsm = $lk->prepare("UPDATE Lichsugiaodich SET Sotien = ?  WHERE Magiaodich=?");
$s1 = [1000,'03'];

$result=$stsm-> execute($s1);
if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
} 
else 
{
    echo "Thong tin giao dich da duoc cap nhat";
};
// Xoá thông tin của giao dịch có số thứ tự 5 khỏi bảng lịch sử.
$stsm = $lk->prepare("DELETE FROM Lichsugiaodich WHERE Magiaodich=?");
$s5 = ['05'];
$result=$stsm-> execute($s5);
if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
} 
else 
{
    echo "Thong tin cua giao dich da duoc xoa khoi bang";
};
?>
