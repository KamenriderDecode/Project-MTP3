<?php require '../../../admin/user/singup.php';  
?> <!--KO HIEU LOI NAY NEU require o tren nay thi ko bi loi nhung ma de cuoi file bi loi-->
<!DOCTYPE html>
<html>
<head>
	<title>Tài khoản mp3</title>
	<link rel="stylesheet" type="text/css" href="../../../templates/admin/css/singup.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  <script type="text/javascript" src="..\..\templates\admin\js\valid_singup.js"></script>
</head>
<body>
<div class="page_header">
	
</div>
<div class="page_body">
<style type="text/css">
.reg_main form span{
display: block;
color: red;
font-size: 0.7em;
padding-left: 150px;
}
</style>
	<div class="reg_header" >
		<!--<div >
			<a href="https://www.google.com.vn/search?q=hoa&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjx_YH-gqTSAhWFebwKHSCMDkMQ_AUICCgB&biw=646&bih=490&dpr=1.25#imgrc=_" class="i_zing">
			<img src="..\..\templates\front\images\homepage\logo.png" ></a>
		</div>-->
	
			
	</div>
	<div class="reg_body">
	<h2 class="formheader">Đăng ký</h2>
		<div class="reg_form">
		
			<div class="notice">
			<p class="zid_regform_notice">Những thông tin có đánh dấu <span class="requiredfield_icn">*</span>  là bắt buộc nhập.</p> 
			</div>
			<div class="reg_main ">
				<form name="singup" method="POST" action="<?php $_PHP_SELF ?>" >
				<div >
					<input id="username" type="text" name="username" placeholder="Tên đăng nhập" ><br><br>
				</div>

				<div > 
					<input id="password" type="password" name="password" placeholder="Mật khẩu"><br><br>
				</div>
				<div >
					<input id="repassword" type="password" name="repassword" placeholder="Xác nhận mật khẩu" ><br><br>
				</div>				
				<div > 
					<input id="mail" type="text" name="mail" placeholder="Địa chỉ mail"><br><br>
				</div>
				<div class="reg_birthday">
     		    <div>

                <select id="dob" name="dob" tabindex="6" > <option value="-1">[Ngày]</option> <option value="1" selected >1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> <option value="6">6</option> <option value="7">7</option> <option value="8">8</option> <option value="9">9</option> <option value="10">10</option> <option value="11">11</option> <option value="12">12</option> <option value="13">13</option> <option value="14">14</option> <option value="15">15</option> <option value="16">16</option> <option value="17">17</option> <option value="18">18</option> <option value="19">19</option> <option value="20">20</option> <option value="21">21</option> <option value="22">22</option> <option value="23">23</option> <option value="24">24</option> <option value="25">25</option> <option value="26">26</option> <option value="27">27</option> <option value="28">28</option> <option value="29">29</option> <option value="30">30</option> <option value="31">31</option></select>

                <select id="mob" name="mob" tabindex="7"> <option value="-1">[Tháng]</option> <option value="1" selected >Tháng 1</option> <option value="2">Tháng 2</option> <option value="3">Tháng 3</option> <option value="4">Tháng 4</option> <option value="5">Tháng 5</option> <option value="6">Tháng 6</option> <option value="7">Tháng 7</option> <option value="8">Tháng 8</option> <option value="9">Tháng 9</option> <option value="10">Tháng 10</option> <option value="11">Tháng 11</option> <option value="12">Tháng 12</option></select>

                <select id="yob" name="yob" tabindex="8"> <option value="-1">[Năm sinh]</option> <option value="2017">2017</option> <option value="2016">2016</option> <option value="2015">2015</option> <option value="2014">2014</option> <option value="2013">2013</option> <option value="2012">2012</option> <option value="2011">2011</option> <option value="2010">2010</option> <option value="2009">2009</option> <option value="2008">2008</option> <option value="2007">2007</option> <option value="2006">2006</option> <option value="2005">2005</option> <option value="2004">2004</option> <option value="2003">2003</option> <option value="2002">2002</option> <option value="2001">2001</option> <option value="2000">2000</option> <option value="1999">1999</option> <option value="1998">1998</option> <option value="1997">1997</option> <option value="1996">1996</option> <option value="1995" selected >1995</option> <option value="1994">1994</option> <option value="1993">1993</option> <option value="1992">1992</option> <option value="1991">1991</option> <option value="1990">1990</option> <option value="1989">1989</option> <option value="1988">1988</option> <option value="1987">1987</option> <option value="1986">1986</option> <option value="1985">1985</option> <option value="1984">1984</option> <option value="1983">1983</option> <option value="1982">1982</option> <option value="1981">1981</option> <option value="1980">1980</option> <option value="1979">1979</option> <option value="1978">1978</option> <option value="1977">1977</option> <option value="1976">1976</option> <option value="1975">1975</option> <option value="1974">1974</option> <option value="1973">1973</option> <option value="1972">1972</option> <option value="1971">1971</option> <option value="1970">1970</option> <option value="1969">1969</option> <option value="1968">1968</option> <option value="1967">1967</option> <option value="1966">1966</option> <option value="1965">1965</option> <option value="1964">1964</option> <option value="1963">1963</option> <option value="1962">1962</option> <option value="1961">1961</option> <option value="1960">1960</option> <option value="1959">1959</option> <option value="1958">1958</option> <option value="1957">1957</option> <option value="1956">1956</option> <option value="1955">1955</option> <option value="1954">1954</option> <option value="1953">1953</option> <option value="1952">1952</option> <option value="1951">1951</option> <option value="1950">1950</option> <option value="1949">1949</option> <option value="1948">1948</option> <option value="1947">1947</option> <option value="1946">1946</option> <option value="1945">1945</option> <option value="1944">1944</option> <option value="1943">1943</option> <option value="1942">1942</option> <option value="1941">1941</option> <option value="1940">1940</option> <option value="1939">1939</option> <option value="1938">1938</option> <option value="1937">1937</option> <option value="1936">1936</option> <option value="1935">1935</option> <option value="1934">1934</option> <option value="1933">1933</option> <option value="1932">1932</option> <option value="1931">1931</option> <option value="1930">1930</option> <option value="1929">1929</option> <option value="1928">1928</option> <option value="1927">1927</option> <option value="1926">1926</option> <option value="1925">1925</option> <option value="1924">1924</option> <option value="1923">1923</option> <option value="1922">1922</option> <option value="1921">1921</option> <option value="1920">1920</option></select> <br>
        		</div>
    			</div>

    			<div class="reg_sex"> Giới tính:
       				 <label><input name="gender"  type="radio" value="1" tabindex="9"> <strong>Nam</strong> </label>
      				  <label><input name="gender"  type="radio" value="0" tabindex="10"><strong>Nữ</strong></label>
       				 <div class="clr"></div>
    			</div> 
    			<div>
    				<table>
    					<tr>
    					<th>
    						<p>Bằng việc click vào các nút <strong>Đăng ký</strong> <br>  bạn đã đồng ý <a target="_blank" href="https://id.zing.vn/v2/policy"><strong>Điều khoản sử dụng</strong></a></p>
    					</th>
    					<th>
    						<input type="submit" name="submit" id ="submit" value="ĐĂNG KÝ" class="zid_regbtn" align="centers">
    					</th>
    				</tr>	
    				</table>
    				
    			</div>
				
				</form>
   			 </div>  
			</div>
		</div>
		<div class="otherAcountLogin">
			<p style="" align="center">hoặc Đăng ký tài khoản với</p>
  					<div class=" otherLogin" align="center">
    				<a href=""><img src="..\..\templates\front\images\mp3_03.gif"></a>
    				<a href=""><img src="..\..\templates\front\images\mp3_05.png"></a>
    				<a href=""><img src="..\..\templates\front\images\mp3_07.gif"></a>  						
  					</div>
  					</div>
		<div class="comebackLogin">
			
		</div>
	</div>
</div>
<!--neu de o duoi thi ko chay dc-->
			
