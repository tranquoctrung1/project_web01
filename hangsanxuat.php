<?php

    $tieude = 'Hãng Sản Xuât';
    $class = "hangsanxuat";
    $noidungtrang ="<section class='thanh-hang-san-xuat text-center'>
    <nav class='navbar navbar-expand-lg navbar-light bg-light'>
      <div class='container'>
        <div class='row'>
          <div class='col'>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNavDropdown' aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
            <div class='collapse navbar-collapse' id='navbarNavDropdown'>
              <ul class='navbar-nav'>
                <li class='nav-item'><a class='nav-link' href='./hangsanxuat.php?p=1'> <img class='mr-2' src='./images/adidas.png' alt=''>Adidas</a></li>
                <li class='nav-item'><a class='nav-link' href='./hangsanxuat.php?p=2'> <img class='mr-2' src='./images/puma.png' alt=''>Puma</a></li>
                <li class='nav-item'><a class='nav-link' href='./hangsanxuat.php?p=3'> <img class='mr-2' src='./images/vietnam.png' alt=''>Việt Nam</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </section>
  <section class='hang-san-xuat'>
    <div class='hinh-nen-1'></div>
    <div class='hinh-nen-2'></div>
    <div class='container'>
      <div class='col-1 pl-0'>
        <nav>
          <ul>
            <li id='kichHoat'></li>
            <li><a href='./hangsanxuat.php?p=1'> <img class='mr-2' src='./images/adidas.png' alt=''>Adidas</a></li>
            <li><a href='./hangsanxuat.php?p=2'> <img class='mr-2' src='./images/puma.png' alt=''>Puma</a></li>
            <li><a href='./hangsanxuat.php?p=3'> <img class='mr-2' src='./images/vietnam.png' alt=''>Việt Nam</a></li>
          </ul>
        </nav>
      </div>
      <div class='row' id='content'>
      </div>
    </div>
  </section>";

    include('./layout/master.php');

?>
<script src="./js/hangsanxuat.js"></script>
