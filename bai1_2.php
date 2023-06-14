<?php
<?php
$DB_TYPE = "mysql";
$DB_HOST = "localhost";
$DB_NAME = "baitapbuoi6.2";
$USER_NAME = "root";
$USER_PASSWORD = "";

$lk = new PDO("$DB_TYPE:host=$DB_HOST;dbname=$DB_NAME", $USER_NAME, $USER_PASSWORD);
// Connect to database

// Create table
$stsm = $lk->prepare('CREATE TABLE IF NOT EXISTS `sinhvien` (
    `MaSV` varchar(10) NOT NULL,
  `Hoten` varchar(50) NOT NULL,
  `Ngaysinh` date NOT NULL,
  `Lophoc` varchar(10) NOT NULL,
  `Diemtb` float NOT NULL,
  PRIMARY KEY (`MaSV`)
)');
$result=$stsm-> execute();
if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
} 
else 
{
    echo "Table has been add in your data";
};


$stsm = $lk->prepare('INSERT INTO `sinhvien`(`MaSV`, `Hoten`, `Ngay_sinh`, `Lop_hoc`, `Diem_TB`) 
VALUE (?, ?, ?, ?, ?)');
$s1 = array('SV001', 'Tran Thi A', '2002-11-10', 'A1', '8,6');
$s2 = array('SV002', 'Tran Thi B', '2002-11-11', 'A2', '8,5');
$s3 = array('SV003', 'Tran Thi C', '2002-11-12', 'A3', '8,4');
$s4 = array('SV004', 'Tran Thi D', '2002-11-13', 'A4', '8,3');
$s5 = array('SV005', 'Tran Thi E', '2002-11-14', 'A5', '8,2');

$result=$stsm-> execute($data);
if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "History transaction has been add in your data";
}
$result2=$stsm-> execute($data2);
if (!$result2) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "History transaction has been add in your data";
}
$result3=$stsm-> execute($data3);
if (!$result3) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "History transaction has been add in your data";
}
$result4=$stsm-> execute($data4);
if (!$result4) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "History transaction has been add in your data";
}
$result5=$stsm-> execute($data5);
if (!$result5) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "History transaction has been add in your data";
};

//Update data
$stsm = $conn->prepare("UPDATE sinhvien SET Diem_TB = ?  WHERE MaSV=?");
$data = [8.5,'SV001'];

$result=$stsm-> execute($data);
if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Student's infor has been update in your data";
};

//Delete data
$stsm = $conn->prepare("DELETE FROM sinhvien WHERE MaSV=?");
$data = ['SV003'];

$result=$stsm-> execute($data);
if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Student's infor has been delete in your data";
};
?>
?>