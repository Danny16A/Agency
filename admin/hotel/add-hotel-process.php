<?php
// Trước khi cho người dùng xâm nhập vào bên trong
// Phải kiểm tra THẺ LÀM VIỆC
session_start();
if(!isset($_SESSION['isLoginOK'])){
    header("location:login.php");
}

    // Xử lý giá trị GỬI TỚI
    if(isset($_POST['makhachsan'])){
        $makhachsan = $_POST['makhachsan'];
    }

    $tenkhachsan = $_POST['tenkhachsan'];
    $diachi = $_POST['diachi'];
    $gia = $_POST['gia'];
    $tienich = $_POST['tienich'];
    $anh = $_POST['anh'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','db_hahalolo');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "INSERT INTO khachsan (makhachsan, tenkhachsan, diachi, gia, tienich, anh) VALUES ('$makhachsan','$tenkhachsan','$diachi','$gia', '$tienich', '$anh')";
    // echo $sql;
    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        header("location: error.php"); //Chuyển hướng lỗi
    }else{
        header("location:list_room.php"); //Chuyển hướng lại Trang Quản trị
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);

?>