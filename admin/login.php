<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="checkadmin.php" method="post">
  <table width="400" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="3" align="center">ระบบlogin</td>
    </tr>
    <tr>
      <td width="113">Username</td>
      <td colspan="2"><label for="username"></label>
      <input name="username" type="text" id="username" size="20" maxlength="20"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td colspan="2"><label for="password"></label>
      <input name="password" type="password" id="password" size="20" maxlength="20"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="106"><input type="submit" name="login" id="login" value=" เข้าสู่ระบบ  "></td>
      <td width="173"><input type="reset" name="clear" id="clear" value="ลบข้อมูล "></td>
    </tr>
  </table>
</form>
</body>
</html>