<?php
session_start();
include("config.php");
extract($_REQUEST);
$i=$_REQUEST['itemno'];

if(isset($sub))
{
$id=$_REQUEST['t1'];
$pass=$_REQUEST['p1'];
  $sel=mysqli_query($conn,"select id,pass from register where id='$id'");
  $arr=mysqli_fetch_array($sel);
if(($arr['id']==$id) and( $arr['pass']==$pass))
  {
   $_SESSION['eid']=$id;
echo "<script>location.href='order.php?itemno=$i'</script>";
   }
else
{
$er="id and password do not match";
}
}
?>
<html>
<div><br/><center><h2><font face="signboard" size="+2" color="#00CCFF">Login your Account</font></h2></center></div>
<div>
<div style="width:25%;float:right">
<img src="usepics/7.jpg">
</div>

<br><br>
<div style="width:70%;float:right" align="center" >
<center><fieldset style="background:#CC99CC;width:50%">
<br><br>
<table width="244" border="0" align="center">
<form method="post">
<tr><td colspan="2"><?php echo "<font color='green'>$er</font>";?></td></tr>
  <tr>
    <td width="90"><div align="center"><font size="+1" face="lucida sans unicode">Email ID:</font></div></td>
    <td width="144"><label>
      <input name="t1" type="text" id="t1" placeholder="Email">
    </label></td>
  </tr>
  <tr>
    <td><div align="center"><font size="+1" face="lucida sans unicode">Password:</font></div></td>
    <td><input name="p1" type="password" id="p1"></td>
  </tr>
  <tr>
    <td><label>
      <div align="center">
<input name="sub" type="submit" value="Login">
        </div>
    </label></td>
    <td><strong><a href="index.php?con=11"><font color="#993333" size="+1" face="lucida sans unicode">Sign Up</font></a></strong> </td>
  </tr>
  <tr>
    <td height="37" colspan="2"><div align="center"><a href="#"><font size="+" face="lucida sans unicode"><strong>Forgot your Password? </strong></font></a></div></td>
    </tr>
  </form>
</table>
</fieldset></center>
</div>

</div>



</body>
</html>