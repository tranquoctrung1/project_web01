    var thanhChua = document.getElementById('thanhChua');
    var timKiem = document.querySelector('.tim-kiem');
    var kichHoatTimKiem = document.getElementById('kichHoatTimKiem');
    var guiThongTinForm = document.getElementById('formTimKiem');
    var duLieutimKiem = document.getElementById('duLieuTimKiem');
    thanhChua.addEventListener('click', () =>
    {
        thanhChua.classList.toggle('thay-doi');
        timKiem.classList.toggle('kich-hoat');
    })

    // gọi ajax để tìm kiếm dữ liệu

    duLieutimKiem.addEventListener('keyup', TimKiemCoBan);

    function TimKiemCoBan(e)
    {
        if(e.keyCode == 13)
        {
        if(e.target.value != '')
        {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("content").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "./component/TimKiemCoBan.php?q=" + e.target.value, true);
                xmlhttp.send();
        }
        }
    }

    kichHoatTimKiem.addEventListener('click', () =>
    {
        if(duLieutimKiem.value != '')
        {
            var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("content").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "./component/TimKiemCoBan.php?q=" + duLieutimKiem.value, true);
                xmlhttp.send();
        }
    })


    function ThemHang(e)
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText)
                if(this.responseText == 0)
                {
                    location.href = './dangnhap.php';
                }
                else
                {
                    document.getElementById('coSanPham').classList.add('kich-hoat');
                }
            }
        }
        xmlhttp.open("POST", "./controller/GioHang/xlThemVaoGioHang.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("id=" + e.dataset.masanpham +"&num=1");
    }
