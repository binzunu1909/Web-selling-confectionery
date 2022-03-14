 function kiemTraTrong(input, erro)
  {
    var check = document.getElementById(input).value;
    if(check == "")
    {
      document.getElementById(erro).style.display = "block";
      return false;
    }
    else
    {
      document.getElementById(erro).style.display = "none";
      return true;
    }
  }
  function kiemTraDN()
  {
    if(kiemTraTrong("taikhoan","tbtk") == true && kiemTraTrong("matkhau","tbmk") == true)
    {
      return true;
    }
    return false;
  }
  function ThongBao()
  {
    var tb = false;
    tb= confirm("Bạn có muốn xóa sản phẩm này không");
    if(tb == true)
    {
      return true;
    }
    return false;
  }
  
  var diachi;
  var dem = 0;
  function ChonDiaChiGiao()
  {
    if(dem == 0)
    {
      diachi = document.getElementById("diachi").value;
      dem++;
    }
    if(document.getElementById("diachikhac").checked)
    {
      document.getElementById("diachi").disabled = false;
      document.getElementById("diachi").select();
      document.getElementById("diachi").focus();
    }
    else
    {
      document.getElementById("diachi").value = diachi
      document.getElementById("diachi").disabled = true;
    }
  }
  function ChonDiaChi()
  {
    document.getElementById("diachi").disabled = false;
    return false;
  }

function kiemTraDK()
{
  if(KTTaiKhoan("taikhoan","loitk") == true && KTMatKhau("matkhau","loimk") == true &&  KTGiong("matkhau","nhaplaimk","loinlmk") == true 
    &&  KTHoTen("hoten","loihoten") &&kiemTraTrong("diachi", "loidiachi") && KTSoDienThoai("dienthoai","loidienthoai") == true)
  {
    return true;
  }
  else
  {
    return false;
  }
}

function KTMatKhau(input, erro)
{
  var signupconfirmpassword = document.getElementById(input).value;
  var signuppatten= /^[A-Za-z0-9]{8,20}/;
  if(signuppatten.test(signupconfirmpassword))
  {
    document.getElementById(erro).style.display = "none";
    return true;
  }
  else 
  {
    document.getElementById(erro).style.display = "block";
    return false;
  }
}
function KTHoTen(input, erro)
{
  var hoten = document.getElementById(input).value;
  var patten= /^[A-Z a-z]/;
  if(patten.test(hoten))
  {
    document.getElementById(erro).style.display = "none";
    return true;
  }
  else 
  {
    document.getElementById(erro).style.display = "block";
    return false;
  }
}
function KTTaiKhoan(input, erro)
{
  var signupname = document.getElementById(input).value;
  var signupnamepattern=/^[A-Za-z0-9]{8,20}/;
  if(signupnamepattern.test(signupname))
  {
    document.getElementById(erro).style.display = "none";
    return true;
  }
  else 
  {
    document.getElementById(erro).style.display = "block";
    return false;
  }   
}

function KTSoDienThoai(input, erro)
{
  var phonenumber = document.getElementById(input).value;
  var phonepattern = /((09|03|07|08|05)+([0-9]{8})\b)/g;
  if(phonepattern.test(phonenumber))
  {
    document.getElementById(erro).style.display = "none";
    return true;
  }
  else 
  {
    document.getElementById(erro).style.display = "block";
    return false;
  }
}
function KTGiong(input1, input2, erro)
{
  var matkhau = document.getElementById(input1).value;
  var matkhau2 = document.getElementById(input2).value;
  if(matkhau == matkhau2)
  {
    document.getElementById(erro).style.display = "none";
    return true;
  }
  else
  {
    document.getElementById(erro).style.display = "block";
    return false;
  }
}
