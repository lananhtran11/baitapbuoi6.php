<?php
$dbh = mysqli_connect('localhost', 'root' ,'');
if (!$dbh)
die ("Unable to connect MySQL: ". mysqli_error());
if (!mysqli_select_db($dbh,'baitapbuoi6' ))
die ("Unable to select database:". mysqli_error());
// Tao bang
$sql_stmt = "CREATE TABLE IF NOT EXISTS `sinhvien`(
    `MaSV` varchar(10) NOT NULL,
    `Hoten` varchar(50) NOT NULL,
    `Ngaysinh` date NOT NULL,
    `Lophoc` varchar(10) NOT NULL,
    `Diemtb` float NOT NULL,
    PRIMARY KEY (`MaSV`)
)";
$result = mysqli_query ($dbh, $sql_stmt);
if (!$result) {
    die ("Adding record failed :" . mysql_error());
}
else
{
    echo "Bang da duoc tao thanh cong";
};
//Them 5 sinh vien vao bang
$sql_stmt = "INSERT INTO `sinhvien`(`MaSV`, `Hoten`, `Ngaysinh`, `Lophoc`, `Diemtb`)";
$sql_stmt .= "VALUES('SV001', 'Tran Thi A', '2002-11-10', 'A1', '8,6'),
                    ('SV002', 'Tran Thi B', '2002-11-11', 'A2', '8,5'),          
                    ('SV003', 'Tran Thi C', '2002-11-12', 'A3', '8,4'),
                    ('SV004', 'Tran Thi D', '2002-11-13', 'A4', '8,3'),
                    ('SV005', 'Tran Thi E', '2002-11-14', 'A5', '8,2')";
$result = mysqli_query ($dbh, $sql_stmt);
if (!$result){
    die ("Adding record failed:". mysqli_error());
}
else 
{
    echo "Thong tin sinh vien da duoc them vao bang";
};
//Cập nhật điểm trung bình của sinh viên có mã "SV001" thành 8.5.
$sql_stmt = "UPDATE `sinhvien` SET `Diemtb`='8.5'";
$sql_stmt .= "WHERE `MaSV`='SV001'";
$result= mysqli_query($dbh, $sql_stmt);
if (!$result){
    die ("Adding record failed:". mysql_error());
}
else
{
    echo "Thong tin sinh vien da duoc cap nhat";
};
//Xoá thông tin của sinh viên có mã "SV003" khỏi bảng danh sách.
$sql_stmt = "DELETE FROM `sinhvien` WHERE `MaSV` = 'SV003'"; 
$result= mysqli_query($dbh, $sql_stmt);
if (!$result){
    die ("Adding record failed:". mysql_error());
}
else
{
    echo "Thong tin sinh vien da duoc xoa khoi danh sach";
};
?>