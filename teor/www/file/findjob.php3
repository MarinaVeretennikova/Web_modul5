<?
echo'
<Html>
<head>  <LINK href="style.css" 
type=text/css rel=stylesheet><title></title></head>
<body bgcolor="#FFEFD5">
<form id="FormName" action=http://localhost/file/find.php3 method="get" name="FormName">
<H4 align="center"> ������ �������� </H4>
<p>
��� ����������� ������� �������� ������� ���� ���������� �� ������� �� ��������� ������ � �� ����������. <br>
���������� �������� - ��������� �������� �� 1 �� 9. �� ������ ����� ����� ����� ������  ��������.   ���� �� �� ������ ������������ �������� ��� ������ ��� ���������� ����� 0.<br>
</p>
 <br>
   <table width="70%" border="0">
     <tr>
	<td width="370"> <b>������������ ��������</b></td>
	<td width="152"> <b> ����������</b></td>
	<td width="250"><b>��������� ��������</b></td>
    </tr>
<tr>	<td>���������� �����</td>
	<td><input type="text" name="zn1" value="1" size="8"></td>
	<td><input type="text" name="tr1" size="16" value="2000"></td></tr>

<tr>	<td>������� �����</td>
	<td><input type="text" name="zn2" value="2" size="8" ></td>
	<td width="250"><select name="tr2" size="1">
			<option value="0">���������� ��� �����</option>
			<option value="1">������� ���������������� ������</option>
			<option value="2">������� ���������������� ������</option>
		            </select></td></tr>


<tr>	<td>���� ����� �������������</td>
	<td></td>
	<td><input type="text" name="spec" value="1111" size="8"></td></tr>



<tr>	<td>������� ������������ �������������*</td>
	<td><input type="text" name="zn3" value="3" size="8"></td>
	<td><input type="text" name="tr3" size="16" value="48" ></td></tr>

<tr>	<td>�����</td>
	<td><input type="text" name="zn4" value="4" size="8"></td>
	<td><select name="tr4" size="1">
			<option value="0">��������</option>
			<option value="1">�������</option>
			<option value="2">����</option>
			<option value="3">�����</option>
			</select></td></tr>

<tr>	<td>����� ������</td>
	<td><input type="text" name="zn5" value="5" size="8"></td>
	<td width="250"><select name="tr5"size="1">
			<option value="0">������������� ������� ����</option>
			<option value="1">��������������� ������� ����</option>
			<option value="2">������ ������</option>
			<option value="3">������� ������</option>
			</select></td></tr>

<tr>	<td>����������� ���������� �����</td>
	<td><input type="text" name="zn6" value="6" size="8"></td>
	<td><select name="tr6" size="1">
			<option value="0">���</option>
			<option value="1">��</option>
			</select></td></tr>
<tr>	<td>�������������� �����</td>
	<td><input type="text" name="zn7" value="7" size="8" ></td>
	<td><select name="tr7" size="1">
			<option value="0">���</option>
			<option value="1">��</option>
			</select></td></tr>

<tr>	<td>���. �����</td>
	<td><input type="text" name="zn8" value="8" size="8"></td>
	<td><select name="tr8" size="1">
			<option value="0">���</option>
			<option value="1">��</option>
			</select></td></tr>

<tr>	<td>������� ������</td>
	<td><input type="text" name="zn9" value="9" size="8"></td>
	<td><select name="tr9" size="1">
			<option value="0">���</option>
			<option value="1">��</option>
			</select></td></tr>

<tr>	<td>������������</td>
	<td><input type="text" name="zn10" value="10" size="8"></td>
	<td><select name="tr10" size="1">
			<option value="0">���</option>
			<option value="1">��</option>
			</select></td></tr>
</table>
<p>		
<input type=submit value="�����"> </input>
</p>
<p> <font size="1">
* ������� ������������ ������������� �������� �����  - ��������� �������� �� 1 �� 100 (%). ��� ���� ������� ������������, ��� ������ ������������� �������� ��� ��������. </font> </p>
</form></body>
</html>';

?>