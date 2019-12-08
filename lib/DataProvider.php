<?php 

    class DataProvider
    {
        public static function ExecuteQuery($sql)       
        {
            $connection = mysqli_connect('localhost', 'root', '', '1760221_QuanLySanPham') or die("Không thể kết nối cơ sỡ dữ liệu!");

            mysqli_query($connection, "set names 'utf8'");
            $result  =  mysqli_query($connection, $sql);

            mysqli_close($connection);

            return $result;
        }
    }
?>