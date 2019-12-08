<?php 

  $MaKiemTraPost = "";
  $MaKiemTraGuiPost = "";

  if(isset($_POST['MaKiemTra']))
  {
      $MaKiemTraPost = $_POST['MaKiemTra'];
  }
  if(isset($_POST['MaKiemTraGui']))
  {
      $MaKiemTraGuiPost = $_POST['MaKiemTraGui'];
  }

  if($MaKiemTraPost === $MaKiemTraGuiPost)
  {
      echo 1;
  }
  else 
  {
      echo 0;
  }
?>