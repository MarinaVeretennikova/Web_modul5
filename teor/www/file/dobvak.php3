<?
echo'
<Html>
<head>  <LINK href="style.css" 
type=text/css rel=stylesheet><title></title></head>
<body bgcolor="#FFEFD5">
<form id="FormName" action=http://localhost/file/zapdobvak.php3 method="get" name="FormName">
<H4 align="center"> ���������� �������� </H4>

 <br>
   <table width="70%" border="0">
<tr>	<td>������ �����������</td>
	<td><input type="password" name="pass" size="16" value=""></td></tr>

<tr>	<td>���������� �����</td>
	<td><input type="text" name="p2" size="16" value="2000"></td></tr>

<tr>	<td>������� �����</td>
	<td width="250"><select name="p3" size="1">
			<option value="0">���������� ��� �����</option>
			<option value="1">������� ���������������� ������</option>
			<option value="2">������� ���������������� ������</option>
		            </select></td></tr>

<tr>	<td>�����</td>
	<td><select name="p5" size="1">
			<option value="0">��������</option>
			<option value="1">�������</option>
			<option value="2">����</option>
			<option value="3">�����</option>
			</select></td></tr>

<tr>	<td>����� ������</td>
	<td width="250"><select name="p6"size="1">
			<option value="0">������������� ������� ����</option>
			<option value="1">��������������� ������� ����</option>
			<option value="2">������ ������</option>
			<option value="3">������� ������</option>
			</select></td></tr>

<tr>	<td>����������� ���������� �����</td>
	<td><select name="p7" size="1">
			<option value="0">���</option>
			<option value="1">��</option>
			</select></td></tr>
<tr>	<td>�������������� �����</td>
	<td><select name="p8" size="1">
			<option value="0">���</option>
			<option value="1">��</option>
			</select></td></tr>

<tr>	<td>���. �����</td>
	<td><select name="p9" size="1">
			<option value="0">���</option>
			<option value="1">��</option>
			</select></td></tr>

<tr>	<td>������� ������</td>
	<td><select name="p10" size="1">
			<option value="0">���</option>
			<option value="1">��</option>
			</select></td></tr>

<tr>	<td>������������</td>
	<td><select name="p11" size="1">
			<option value="0">���</option>
			<option value="1">��</option>
			</select></td></tr>
<tr> <td>
<p>		
<input type=submit value="��������"> </input>
</p> </td> </tr>
<tr><td colspan="3" align="right">
��� �����, �������, e-mail � ����� �������  - 
<a href="coord.php3" target="main">
 
<b>��� ��� �����</b> </a><br>
��� �������� �������� � ���� � ���� ������ ���������� <a href="registr.php3" target="main"><b>�����������</b> </a><br>
���������� ��� �������� ������ � ���� - 
<a href="folder.php3" target="main"><b>������ �����</b> </a></td> </tr>
</table>
</form></body>
</html>';

?>