<?php
include("config.php");

$name=$_REQUEST['t1'];
$phone=$_REQUEST['t2'];
$email=$_REQUEST['t3'];
$add=$_REQUEST['t4'];
$pass=$_REQUEST['p1'];


if($_REQUEST['sub'])
{
#$sel=mysqli_query($user,"select email from register where email='$email' ");
#$arr=mysqli_fetch_array($user,$sel);

#if($arr['id']!=$id)
  #{
   if(mysqli_query($user,"insert into register values('$name','$phone','$email','$add','$pass')"))
	   {
	      
	     echo "<script>location.href='index.php?con=13 & wel=$name'</script>";
	   }
	# }
/*else 
{
echo "user already exists";
}*/

}
?>
<html>
<head>
<script>
function name()
{
  var name=/^[a-zA-Z]{4,15}$/;
   if(document.f1.t1.value.search(name)==-1)
    {
	 alert("enter correct  first name");
	 document.f1.t1.focus();
	 return false;
	 }
	} 
	 
	  
	 
function email()
{
 var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
   if(document.f1.t3.value.search(email)==-1)
    {
	 alert("enter correct email");
	 document.f1.t3.focus();
	 return false;
	 }
	} 
	
	function pass()
	{
	var pass=/^[a-zA-Z0-9-_]{6,16}$/;
   if(document.f1.p1.value.search(pass)==-1)
    {
	 alert("enter correct pass");
	 document.f1.p1.focus();
	 return false;
	 }
	 }
	function phone()
	{
	var phn=/^[0-9]{9,14}$/;
  if(document.f1.t2.value.search(phn)==-1)
    {
	 alert("enter correct phone no");
	 document.f1.t2.focus();
	 return false;
	 }
	 }
	
	function add()
	{
	var add=/^[a-zA-Z0-9- ]{10,150}$/;
 /* if(document.f1.t4.value.search(add)==-1)
    {
	 alert("enter correct address");
	 document.f1.t4.focus();
	 return false;
	 }*/
	 return true;
	 }
	 
	 
	 
	 
	
function vali()
{
  var nam=/^[a-zA-Z]{4,15}$/;
   var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
    var pass=/^[a-zA-Z0-9-_]{6,16}$/;
	 	var phn=/^[0-9]{9,14}$/;
	  var add=/^[a-zA-Z0-9 ]{10,150}$/;
	  var city=/^[a-zA-Z]{5,30}$/;
	  
   if(document.f1.t1.value.search(nam)==-1)
    {
	 alert("enter correct  name");
	 document.f1.t1.focus();
	 return false;
	 }
	 	 
 
  else if(document.f1.t3.value.search(email)==-1)
    {
	 alert("enter correct login name");
	 document.f1.t3.focus();
	 return false;
	 }
	 
	
	
   else if(document.f1.p1.value.search(pass)==-1)
    {
	 alert("enter correct pass");
	 document.f1.p1.focus();
	 return false;
	 }
	 
	
	  else if(document.f1.t2.value.search(phn)==-1)
    {
	 alert("enter correct phone no");
	 document.f1.t2.focus();
	 return false;
	 }
	 
}
	
	 
</script> 
</head>
<body>


<div><br/><center><h2><font face="Lucida Handwriting" size="+1" color="#00CCFF">Register Yourself</font></h2></center></div>
<div>
<div style="width:25%;float:right">
<br><br><br><br><br>
</div>
<br><br>
<form method="post" name="f1" onSubmit="return vali()">
<center>
  <table width="288" border="0" align="center">
      <tr>
        <td width="111"><font color="#996699" size="+1" face="Comic Sans MS">Name:</font></td>
        <td width="161"><label>
          <input name="t1" type="text" id="t1" onChange="return name()">
        </label></td>
      </tr>
      <tr>
        <td><font color="#996699" size="+1" face="Comic Sans MS">Phone No: </font></td>
        <td><label>
        <input name="t2" type="text" id="t2" onChange="return phone()">
        </label></td>
      </tr>
      <tr>
        <td><font color="#996699" size="+1" face="Comic Sans MS">Email:</font></td>
        <td><label>
        <input name="t3" type="text" id="t3" onChange="return email()">
        </label></td>
      </tr>
      <tr>
        <td><font color="#996699" size="+1" face="Comic Sans MS">Address:</font></td>
        <td><input name="t4" type="text" id="t4" onChange="return add()"></td>
      </tr>
      <tr>
        <td><font color="#996699" size="+1" face="Comic Sans MS">Password:</font></td>
		<td><input name="p1" type="password" id="p1" onChange="return pass()"></td>
        <td><label>
         
        </label></td>
      </tr>
	  <tr>
	  <td colspan="2"><center><input name="sub" type="submit" value="Submit"></center>	  </td>
	  </tr> 
    </table>
</center>
</form>

</div>

</body>
</html>