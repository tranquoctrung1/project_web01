const myForm = document.getElementById('dangnhap-form');
const username = document.getElementById('username');
const password = document.getElementById('password');

function KiemTra()
{
    if(username.value == '' || username.value == null)
    {
        alert("Tên đăng nhập không được trống!");
        username.focus();
        return false;
    }
    if(password.value == '' || password.value == null)
    {
        alert("Mật khẩu không được để trống");
        password.focus();
        return false;
    }
    return true;
}




// myForm.addEventListener('submit',(e) => {
//    let messages=[];
//    if(username.value=='' || username.value==null)
//    {
//        messages.push('Dien UserName');
//        Console.log(111);
//    }
//    if(messages.length>0)
//    {
//         e.prevenDefault();
//         span.innerText=messages.join(', ')
//    }
   
    
// });




// bat su kien focus them them vao input
$(".txtbox input").on("focus",function()
{
    $(this).addClass("focus");
    
});

$(".txtbox input").on("blur",function()
{
    if($(this).val()=="")
    $(this).removeClass("focus");
    
});



