<html>
<head>
<title>Aplikasi Input Data Karyawan</title> 
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {
	font-size: 12px;
	font-style: italic;
	font-family: "Times New Roman", Times, serif;
}
-->
</style>
</head>
<body>
<br>
<table width="1306" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
	<td width="10" bgcolor="#CCCCCC">&nbsp;</td>
	<td width="140" height="120" bgcolor="#FF9999"><div align="center"></div></td>
	<td width="10" bgcolor="#CCCCCC">&nbsp;</td>
	<td width="1136" bgcolor="#FF9999"><div align="center"><span class="header">INPUT DATA KARYAWAN<br><br>
	</span><strong>Kantor Pencatatan Sipil </strong><span class="header"><br>
	</span></div></td>
	<td width="10" bgcolor="#CCCCCC"></td>
</tr>
<tr bgcolor="#F8F8FF">
	<td>&nbsp;</td>
	<td height="27"><div align="left"><? echo "Tanggal : ".date("d-M-y");?></div></td>
	<td>&nbsp;</td>
	<td align="right">&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr bgcolor="#F8F8FF">
	<td>&nbsp;</td>
	<td rowspan="4" valign="top"><table width="144" height="400" bgcolor="#80FF00" border="0" cellspacing="0" cellpadding="0" align="top">
		<tr>
		<td valign="top"><ul class="navbar">
			<li><b>MAIN MENU</b></li><br>
			<li><a href="index.php" title="Balik">&nbsp;Home</a></li>
			<li><a href="index.php?page=forminputkaryawan" title="input data">&nbsp;Input</a></li>
			<li><a href="index.php?page=lihat" title="lihat data">&nbsp;Lihat</a></li>
			<li><a href="index.php?page=formedit" title="edit data">&nbsp;Edit</a></li>
			<li><a href="index.php?page=formcari" title="cari data">&nbsp;Cari</a></li>
			<li><a href="index.php?page=about" title="tentang programmer">&nbsp;About</a></li>
		</ul></td>
		</tr></table></td>
	<td rowspan="4">&nbsp;</td>
	<td rowspan="4" valign="top"><table width="1136" height="400" bgcolor="white" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="936" valign="top">
			<?php
			$page = (isset($_GET['page']))? $_GET['page'] : "main";
			switch ($page) {
				case 'about': include "about.php"; break;
				case 'delete': include "delete.php"; break;
				case 'detail'	: include "detail.php"; break;
				case 'formedit'	: include "formedit.php"; break;
				case 'edit' : include "edit.php"; break;
				case 'formcari' : include "formcari.php"; break;
				case 'forminputkaryawan' : include "forminputkaryawan.php"; break;
				case 'lihat' : include "lihat.php"; break;
				case 'main' :
				default : include 'about.php';	
			}
			?></td>	
		</tr></table></td>
	<td rowspan="4">&nbsp;</td>
</tr>
<tr bgcolor="#F8F8FF">
    	<td>&nbsp;</td>
</tr>
<tr bgcolor="#F8F8FF">
    	<td>&nbsp;</td>
</tr>
<tr bgcolor="#F8F8FF">
    	<td>&nbsp;</td>
</tr>
<tr bgcolor="#F8F8FF">
    	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>	
</tr>
<tr bgcolor="#80FF00">
	<td height="36" colspan="5" bgcolor="#CCCCCC"><div align="center" class="style1">2020 by @Nadila &amp; Yulan</div></td>
</tr>
</table>
<div align="center"></div>
</body>
</html>