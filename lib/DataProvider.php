<?php 

    class DataProvider
    {
        public static function ExecuteQuery($sql)       
        {
            $connection = mysqli_connect('sql105.byethost.com', 'b17_24932114', 'Tranquoctrung1!', 'b17_24932114_quanlybanhang') or die("Không thể kết nối cơ sỡ dữ liệu!");

            mysqli_query($connection, "set names 'utf8'");
            $result  =  mysqli_query($connection, $sql);

            mysqli_close($connection);

            return $result;
        }
        ///
        public static function ChangeURL($path)
        {
            echo "<script type='text/javascript'>";
            echo "location= '$path' ";
            echo "</script>";
        }



    }
?>