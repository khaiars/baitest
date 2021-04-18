<?php

require "connect.php";

$query = "SELECT content_tin FROM tin ORDER BY RAND() limit 1";
$result = mysqli_query($connection,$query);

if ($result) {
   
    // Hàm `mysql_fetch_row()` sẽ chỉ fetch dữ liệu một record mỗi lần được gọi
    // do đó cần sử dụng vòng lặp While để lặp qua toàn bộ dữ liệu trên bảng posts
    while ($row=mysqli_fetch_row($result)) {
        printf ( $row[0]);
    }

    // Máy tính sẽ lưu kết quả từ việc truy vấn dữ liệu bảng
    // Do đó chúng ta nên giải phóng bộ nhớ sau khi hoàn tất đọc dữ liệu
    mysqli_free_result($result);
}
?>
