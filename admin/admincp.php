<?php
ob_start();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Control Panel</title>
<link rel="stylesheet" type="text/css" href="admincp.css" />
</head>
<body>
<?php
if($_SESSION["user"] && $_SESSION["pass"]){
?>
<table id="wrapper" width="900px" border="0px" cellpadding="0px" cellspacing="0px">
	<!-- Header -->
	<tr>
    	<td colspan="2" id="header">
        	<table border="0px" cellpadding="0px" cellspacing="0px">
            	<tr>
                	<td rowspan="2"><img src="images/admincp-logo.gif" /></td>
                    <td><img src="images/admincp-banner.gif" /></td>
                </tr>
                <tr>
                    <td height="30px" id="navbar">
                    	<table height="30px" border="0px" cellpadding="0px" cellspacing="0px">
                        	<tr>
                            	<td><a href="#">trang chủ</a></td>
                              	<td><a href="#">giới thiệu</a></td>
                                <td><a href="#">liên hệ</a></td>
                                <td><a href="#">cấu hình</a></td>
                                <td><a href="#">trợ giúp</a></td>
                                <td><a href="#">xem website</a></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr height="31px">
                	<td colspan="2" id="line-header"></td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- End Header -->
    
    <!-- Body -->
    <tr id="body">
    	<td align="left" valign="top" width="250px">
        	<!-- Left Menu -->
            <table width="250px" class="left-menu" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr class="bg-leftbar" height="36px">
                	<td>quản lý thực đơn</td>
                </tr>
                <tr class="menu-item" height="30px">
                    <td><a href="#">trang chủ</a></td>
                </tr>
                <tr class="menu-item" height="30px">
                    <td><a href="#">quản lý danh mục chính</a></td>
                </tr>
                <tr class="menu-item" height="30px">
                    <td><a href="#">quản lý chuyên mục con</a></td>
                </tr>
                <tr class="menu-item" height="30px">
                    <td><a href="#">quản lý sản phẩm</a></td>
                </tr>
                <tr class="menu-item" height="30px">
                    <td><a href="#">quản lý người dùng</a></td>
                </tr>
                <tr height="30px">
                    <td></td>
                </tr>
            </table>
            <!-- End Left Menu -->
            
            <!-- User -->
            <table width="250px" class="left-menu" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr class="bg-leftbar" height="36px">
                	<td>thông tin đăng nhập</td>
                </tr>
                <tr height="30px">
                	<td id="user-info">Xin chào <b><?php echo $_SESSION["user"]?></b> đã đăng nhập thành công vào hệ thống quản trị!</td>
                </tr>
                <tr height="30px">
                	<td id="logout" align="right"><a href="dangxuat.php">đăng xuất</a></td>
                </tr>
            </table>
            <!-- End User -->
        </td>
            
        <td align="right" valign="top" width="650px">
            <!-- Main Content -->
            <table width="640px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">giới thiệu</td>
                </tr>
				<tr>
                	<td align="justify" id="info">Chào mừng bạn đến với hệ thống quản trị website thương mại điện tử Apple Shop. Đây là hệ thống giúp bạn quản lý tốt các thông tin về sản phẩm theo các tiêu chí như danh mục sản phẩm, theo sản phẩm,... Ngoài ra hệ thống còn tích hợp công cụ soan thảo FCKEditor nhằm giúp người dùng thuận tiện trong việc soạn thảo bài mới và thục hiện công việc Upload hình ảnh. Ngoài ra, hệ thống còn dự định nâng cấp và hoàn thiện một số Module như Giỏ hàng, Thanh toán trực tuyến, So sánh sản phẩm, Nhận xét & đánh giá sản phẩm dạng sao,... trong các phiên bản kế tiếp.</td>
                </tr>
            </table>
            <!-- End Main Content -->
        </td>
    </tr>
    <!-- End Body -->
    
    <!-- Footer -->
    <tr height="62px">
    	<td id="footer" colspan="2" align="center" valign="middle">Copyright © 2011 VietPro.Us. All rights reserved.</td>
    </tr>
    <!-- End Footer -->
</table>
<?php
}
else{
	header("location:index.php");
}
?>
</body>
</html>
