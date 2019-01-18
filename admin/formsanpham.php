<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm Một Sản Phẩm Mới</title>
<link rel="stylesheet" type="text/css" href="formsanpham.css" />
</head>
<body>

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
                	<td id="user-info">Xin chào <b>Admin</b> đã đăng nhập thành công vào hệ thống quản trị!</td>
                </tr>
                <tr height="30px">
                	<td id="logout" align="right"><a href="#">đăng xuất</a></td>
                </tr>
            </table>
            <!-- End User -->
        </td>
            
        <td align="right" valign="top" width="650px">
            <!-- Main Content -->
            <form method="post">
            <table width="640px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">thêm một sản phẩm mới</td>
                </tr>
                <tr height="50">
                	<td class="form"><label>tên của sản phẩm</label><br><input type="text" name="cat_name" /></td>
                </tr>
                <tr height="50">
                	<td class="form"><label>giá của sản phẩm</label><br><input type="text" name="cat_name" /></td>
                </tr>
                <tr height="50">
                	<td class="form"><label>sản phẩm thuộc danh mục</label><br>
                    	<select>
                        	<option selected="selected">--- lựa chọn danh mục ---</option>
                        	<option>iPad</option>
                            <option>iPhone</option>
                            <option>iPod</option>
                            <option>iTunes</option>
                        </select>                    	
                    </td>
                </tr>
                <tr height="50">
                	<td class="form"><label>ảnh mô tả cho sản phẩm</label><br><input type="file" name="image_upload" /></td>
                </tr>
                <tr>
                	<td class="form"><label>nội dung chi tiết của sản phẩm</label><br><textarea></textarea></td>
                </tr>
                <tr height="50">
                	<td class="form"><label>sản phẩm đặc biệt</label><br>
                    <input type="radio" name="rd" value=1 /> có 
                    <input type="radio" name="rd" value=0 checked="checked" /> không
                    </td>
                </tr>
                <tr height="50">
                	<td class="form"><input type="submit" name="submit_name" value="Thêm sản phẩm" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
            </table>
            </form>
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

</body>
</html>
