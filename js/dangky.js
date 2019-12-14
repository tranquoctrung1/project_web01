// bat su kien focus them them vao input
$(".txtb input").on("focus",function()
{
    $(this).addClass("focus");
});

$(".txtb input").on("blur",function()
{
    if($(this).val()=="")
    $(this).removeClass("focus");
    
});

// các hàm tự động thêm các option cho các ô select
var today= new Date();

var namhientai=today.getFullYear();

var yyyynam=document.querySelector('.yyyynam');
for (let index = 1970; index <= namhientai; index++) {
    var option = document.createElement('option');
    option.setAttribute('value',index);
    option.innerText=index;
    yyyynam.append(option); 
}

var mmthang=document.querySelector('.mmthang');
for (let index = 1; index <= 12; index++) {
    var option = document.createElement('option');
    option.setAttribute('value',index);
    option.innerText=index;
    mmthang.append(option);
}

var ddngay=document.querySelector('.ddngay');
for (let index = 1; index <= 31; index++) {
    var option = document.createElement('option');
    option.setAttribute('value',index);
    option.innerText = index;
    ddngay.append(option);
}

// mảng các tỉnh/thành phố
var arr= ["Thành phố Hà Nội", "Tỉnh Hà Giang", "Tỉnh Cao Bằng", "Tỉnh Bắc Kạn", "Tỉnh Tuyên Quang", "Tỉnh Lào Cai", "Tỉnh Điện Biên", "Tỉnh Lai Châu", "Tỉnh Sơn La", "Tỉnh Yên Bái", "Tỉnh Hoà Bình", "Tỉnh Thái Nguyên", "Tỉnh Lạng Sơn", "Tỉnh Quảng Ninh", "Tỉnh Bắc Giang", "Tỉnh Phú Thọ", "Tỉnh Vĩnh Phúc", "Tỉnh Bắc Ninh", "Tỉnh Hải Dương", "Thành phố Hải Phòng", "Tỉnh Hưng Yên", "Tỉnh Thái Bình", "Tỉnh Hà Nam", "Tỉnh Nam Định", "Tỉnh Ninh Bình", "Tỉnh Thanh Hóa", "Tỉnh Nghệ An", "Tỉnh Hà Tĩnh", "Tỉnh Quảng Bình", "Tỉnh Quảng Trị", "Tỉnh Thừa Thiên Huế", "Thành phố Đà Nẵng", "Tỉnh Quảng Nam", "Tỉnh Quảng Ngãi", "Tỉnh Bình Định", "Tỉnh Phú Yên", "Tỉnh Khánh Hòa", "Tỉnh Ninh Thuận", "Tỉnh Bình Thuận", "Tỉnh Kon Tum", "Tỉnh Gia Lai", "Tỉnh Đắk Lắk", "Tỉnh Đắk Nông", "Tỉnh Lâm Đồng", "Tỉnh Bình Phước", "Tỉnh Tây Ninh", "Tỉnh Bình Dương", "Tỉnh Đồng Nai", "Tỉnh Bà Rịa - Vũng Tàu", "Thành phố Hồ Chí Minh", "Tỉnh Long An", "Tỉnh Tiền Giang", "Tỉnh Bến Tre", "Tỉnh Trà Vinh", "Tỉnh Vĩnh Long", "Tỉnh Đồng Tháp", "Tỉnh An Giang", "Tỉnh Kiên Giang", "Thành phố Cần Thơ", "Tỉnh Hậu Giang", "Tỉnh Sóc Trăng", "Tỉnh Bạc Liêu", "Tỉnh Cà Mau"];


var thanhpho=document.querySelector('.thanhpho')
for (let index = 0; index < arr.length; index++) {
    var option = document.createElement('option');
    option.setAttribute('value',arr[index]);
    option.innerText=arr[index];
    thanhpho.append(option);
    
}

const userdangnhap = document.getElementById('userdangnhap');
const passworddangnhap = document.getElementById('passworddangnhap');
const kiemtrapassworddangnhap = document.getElementById('kiemtrapassworddangnhap');
const makiemtra = document.getElementById('makiemtra');
const hoten = document.getElementById('hoten');
const ngay = document.getElementById('ddngay');
const thang = document.getElementById('mmthang');
const nam = document.getElementById('yyyynam');
const thanhphoten = document.getElementById('thanhpho');
const maKiemTraGui = document.getElementById('maKiemTraGui')


// định nghĩa các hàm liên quan đến onblur của trang đăng ký
// userdangnhap.addEventListener('blur', KiemTraTenDangNhap); 
// passworddangnhap.addEventListener('blur', KiemTraMatKhau);
// kiemtrapassworddangnhap.addEventListener('blur', KiemTraNhapLaiMatKhau);
// hoten.addEventListener('blur', KiemTraHoTen);
// makiemtra.addEventListener('blur', KiemTraMa);

// định nghĩa các hàm liên quan đến onchange của trang đăng ký
ngay.addEventListener('change', KiemTraNgay);
thang.addEventListener('change', KiemTraThang);
nam.addEventListener('change', KiemTraNam);
thanhphoten.addEventListener('change', KiemTraThanhPho);

// các hàm kiểm tra khi onblur vào các ô input
function KiemTraTenDangNhap()
{
    if(userdangnhap.value == '' || userdangnhap.value == null)
    {
        alert("Tên đăng nhập không được để trống!");
        return false;
    }
    else 
    {
        // gọi hàm ajax để kiểm tra tên đăng nhập có trùng hay không
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if(this.responseText == '1')
                {
                    alert("Tên đăng nhập bị trùng!");
                    return false;
                }
            }
        }
        xmlhttp.open("POST", "./controller/xlTrungTenDangKy.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("TenDangNhap="+userdangnhap.value);
    }
}

function KiemTraMatKhau()
{
    if(passworddangnhap.value == '' || passworddangnhap.value == null)
    {
        alert("Mật khẩu không được để trống!");
        return false;
    }
}

function KiemTraNhapLaiMatKhau()
{
    if(kiemtrapassworddangnhap.value == '' || kiemtrapassworddangnhap.value == null)
    {
        alert("Xác nhận mật khẩu không được để trống");
        return false;
    }
    if(kiemtrapassworddangnhap.value !== passworddangnhap.value)
    {
        alert("Xác nhận mật khẩu không trùng với mật khẩu!");
        return false;
    }
}

function KiemTraHoTen()
{
    if(hoten.value == '' || hoten.value == null)
    {
        alert("Họ tên không được để trống!");
        return false;
    }
}

// Các hàm kiểm tra khi onchange vào các ô select
function KiemTraNgay()
{
    if(isNaN(parseInt(ngay.value)))
    {
        alert("Mời bạn chọn ngày!");
        return false;
    }
}

function KiemTraThang()
{
    if(isNaN(parseInt(thang.value)))
    {
        alert("Mời bạn chọn tháng!");
        return false;
    }
}

function KiemTraNam()
{
    if(isNaN(parseInt(nam.value)))
    {
        alert("Mời bạn chọn năm!");
        return false;
    }
}

function KiemTraThanhPho ()
{
    if(thanhphoten.value == '123')
    {
        alert("Mời bạn chọn thành phố!");
        return false;
    }
}

function KiemTraMa()
{
    if(makiemtra.value == '' || makiemtra.value == null)
    {
        alert("Mã kiểm tra sai!");
        makiemtra.focus();
        return false;
    }
    else
    {
        // gọi hàm ajax để kiểm tra mã kiễm tra có trùng hay không
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            if(this.responseText == '0')
            {
                alert('Mã xác nhận không đúng!');
                return false;
            }
            }
        }
        xmlhttp.open("POST", "./controller/xlMaKiemTra.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("MaKiemTra="+makiemtra.value+"&MaKiemTraGui="+maKiemTraGui.value);
    }
}

function KiemtraDangKy()    
{
    if(isNaN(parseInt(ngay.value)))
    {
        alert("Mời bạn chọn thành ngày!");
        ngay.focus();
        return false;
    }
    if(isNaN(parseInt(thang.value)))
    {
        alert("Mời bạn chọn thành tháng!");
        thang.focus();
        return false;
    }
    if(isNaN(parseInt(nam.value)))
    {
        alert("Mời bạn chọn thành năm!");
        nam.focus();
        return false;
    }
   if(thanhphoten.value == '123')
    {
        alert("Mời bạn chọn thành phố!");
        thanhphoten.focus();
        return false;
    }
    if(hoten.value == '' || hoten.value == null)
    {
        alert("Họ tên không được để trống!");
        hoten.focus();
        return false;
    }
    if(userdangnhap.value == '' || userdangnhap.value == null)
    {
        alert("Tên đăng nhập không được để trống!");
        userdangnhap.focus();
        return false;
    }
    if(userdangnhap.value != '')
    {
        // gọi hàm ajax để kiểm tra tên đăng nhập có trùng hay không
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if(this.responseText == '1')
                {
                    alert("Tên đăng nhập bị trùng!");
                    return false;
                }
            }
        }
        xmlhttp.open("POST", "./controller/xlTrungTenDangKy.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("TenDangNhap="+userdangnhap.value);
    }
    if(passworddangnhap.value == '' || passworddangnhap.value == null)
    {
        alert("Mật khẩu không được để trống!");
        passworddangnhap.focus();
        return false;
    }
    if(kiemtrapassworddangnhap.value == '' || kiemtrapassworddangnhap.value == null)
    {
        alert("Nhập lại mật khẩu không được để trống!");
        kiemtrapassworddangnhap.focus();
        return false;
    }
    if(kiemtrapassworddangnhap.value !== passworddangnhap.value)
    {
        alert("Xác nhận mật khẩu không trùng với mật khẩu!");
        return false;
    }
    if(makiemtra.value == '' || makiemtra.value == null)
    {
        alert("Mã kiểm tra sai!");
        makiemtra.focus();
        return false;
    }
    if(makiemtra != '')
    {
         // gọi hàm ajax để kiểm tra mã kiễm tra có trùng hay không
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            if(this.responseText == '0')
            {
                alert('Mã xác nhận không đúng!');
                return false;
            }
            }
        }
        xmlhttp.open("POST", "./controller/xlMaKiemTra.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("MaKiemTra="+makiemtra.value+"&MaKiemTraGui="+maKiemTraGui.value);
    }
    return true;
}