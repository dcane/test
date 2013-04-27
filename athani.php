<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Shree Renuka Sugars Limited</title>


</head>


<?php



$conn = oci_pconnect('cms','cms', '172.16.20.251/oracledb');

if (!$conn) {
trigger_error("Could not connect to database", E_USER_ERROR);
}



$stid = oci_parse($conn, "SELECT * from ATHANI");

oci_set_prefetch($stid, 1);

oci_execute($stid);


while (($row = oci_fetch_array($stid, OCI_NUM+OCI_RETURN_NULLS)) != false)
{
	
  
  $oytruck        =  $row[0];
  $oytruckwt      =  $row[1];
  $oytrolley1     =  $row[2];
  $oytrolley1wt   =  $row[3];
  $oytrolley2     =  $row[4];
  $oytrolley2wt   =  $row[5];
  $oycart         =  $row[6];
  $oycartwt       =  $row[7];
  $oytotal        =  $row[8];
  $iytruck        =  $row[9];
  $iytruckwt      =  $row[10];
  $iytrolley1     =  $row[11];
  $iytrolley1wt   =  $row[12];
  $iytrolley2     =  $row[13];
  $iytrolley2wt   =  $row[14];
  $iycart         =  $row[15];
  $iycartwt       =  $row[16];
  $iytotal        =  $row[17];
  $todayt         =  $row[18];
  $todaytwt       =  $row[19];
  $todayt1        =  $row[20];
  $todayt1wt      =  $row[21]; 
  $todayt2        =  $row[22];
  $todayt2wt      =  $row[23]; 
  $todaycart      =  $row[24];
  $todaycartwt    =  $row[25]; 
  $todaytotal     =  $row[26];
  $chourt         =  $row[27]; 
  $chourtwt       =  $row[28];
  $chourt1        =  $row[29];
  $chourt1wt      =  $row[30]; 
  $chourt2        =  $row[31];
  $chourt2wt      =  $row[32];
  $chourcart      =  $row[33]; 
  $chourcartwt    =  $row[34]; 
  $chourtotal     =  $row[35];
  $phourt         =  $row[36];
  $phourtwt       =  $row[37];   
  $phourt1        =  $row[38];
  $phourt1wt      =  $row[39]; 
  $phourt2        =  $row[40];
  $phourt2wt      =  $row[41];
  $phourcart      =  $row[42];
  $phourcartwt    =  $row[43];  
  $phourtotal     =  $row[44];
  $fourhour       =  $row[45];  	
  $eighthour      =  $row[46];	
  $twelvehour     =  $row[47];	
  $sixteenhour    =  $row[48];	
  $twentyhour     =  $row[49]; 
  $twentyfourhour =  $row[50];
  $crushperhour   =  $row[51]; 
  $forcasted      =  $row[52];
  $trend          =  $row[53];
  $yestcrush      =  $row[54]; 
  $todatecrush    =  $row[55];
  $lup            =  $row[56];
}

oci_free_statement($stid);

if ($trend	< 0)
  	$imac = "images/downr_new.gif"; 
  else
  	$imac = "images/upr_new.gif";

   

?>


<body background="images/sugarcane_new.jpg" style="background-attachment: fixed" topmargin="4">

<div align="center">
	<table border="0" width="986" id="table1" cellpadding="0" style="border-collapse: collapse" bgcolor="#FFFFFF">
		<tr>
			<td width="986" colspan="8">
			<table border="0" width="100%" id="table2" cellpadding="0" style="border-collapse: collapse">
				<tr>
					<td width="35" valign="top" bgcolor="#CCD56E">
					<img border="0" src="images/logo002.jpg" width="35" height="31"></td>
					<td background="images/blank.jpg" width="64">&nbsp;</td>
					<td background="images/blank.jpg" valign="middle">
					<p align="center">
					<img border="0" src="images/logo02.jpg" width="365" height="22" align="right"></td>
					<td background="images/blank.jpg" width="239">&nbsp;</td>
					<td width="24" valign="top" bgcolor="#CCD56E">
					<p align="right">
					<img border="0" src="images/rightcorner_new02.jpg" width="36" height="31"></td>
				</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td width="975" colspan="8">
			<img border="0" src="images/space.jpg" width="9" height="9"></td>
		</tr>
		<tr>
			<td width="77">
			<p align="center">
			<img border="0" src="images/live_gif.gif" width="29" height="14"></td>
			<td width="64" valign="top">&nbsp;</td>
			<td width="168" valign="top">
			<img border="0" src="images/outyard.jpg" width="168" height="29"></td>
			<td width="168">
			<img border="0" src="images/Inyard.jpg" width="168" height="29"></td>
			<td width="168">
			<img border="0" src="images/CrushedToday.jpg" width="168" height="29"></td>
			<td width="168">
			<img border="0" src="images/Currenrhour-Crussing.jpg" width="168" height="29"></td>
			<td width="164" style="padding-right: 4px" colspan="2">
			<img border="0" src="images/PHCrushing.jpg" width="168" height="29"></td>
		</tr>
		<tr>
			<td width="71" rowspan="3" style="padding-left: 6px" valign="bottom" bordercolor="#C0C0C0">
			<p align="center">
			<img border="0" src="images/image1_new.jpg" width="43" height="29"></td>
			<td width="904" valign="middle" align="center" style="border-bottom-style: solid; border-bottom-width: 1px" bordercolor="#C0C0C0" colspan="7">
			<img border="0" src="images/space.jpg" width="9" height="9"></td>
		</tr>
		<tr>
			<td width="64" valign="middle" align="center" style="border-style:solid; border-width:1px; padding-top: 0px; padding-bottom: 0px" bgcolor="#E1C4C4" bordercolor="#C0C0C0">
			<b><font face="Verdana" size="1">No :</font></b></td>
			<td width="168" valign="middle" style="border-style:solid; border-width:1px; padding-top: 0px; padding-bottom: 0px; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#E1C4C4" align="center" bordercolor="#C0C0C0">
			<?php echo $oytruck;?> </td>
			<td width="168" style="border-style:solid; border-width:1px; padding-top: 0px; padding-bottom: 0px; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#E1C4C4" align="center" bordercolor="#C0C0C0"><?php echo $iytruck;?></td>
			<td width="168" style="border-style:solid; border-width:1px; padding-top: 0px; padding-bottom: 0px; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#E1C4C4" align="center" bordercolor="#C0C0C0"><?php echo $todayt;?></td>
			<td width="168" style="border-style:solid; border-width:1px; padding-top: 0px; padding-bottom: 0px; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#E1C4C4" align="center" bordercolor="#C0C0C0"><?php echo $chourt;?></td>
			<td width="160" style="border-style:solid; border-width:1px; padding-top: 0px; padding-bottom: 0px; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#E1C4C4" align="center" bordercolor="#C0C0C0"><?php echo $phourt;?></td>
			<td width="7" style="padding-top: 0px; padding-bottom: 0px; border-left-style:solid; border-left-width:1px" bordercolor="#C0C0C0">&nbsp;</td>
		</tr>
		<tr>
			<td width="64" valign="middle" align="center" style="border-style:solid; border-width:1px; padding-top: 0px; padding-bottom: 0px" bgcolor="#BB7777" bordercolor="#C0C0C0">
			<b><font face="Verdana" size="1">Est Wt :</font></b></td>
			<td width="168" valign="middle" style="border-style:solid; border-width:1px; padding-top: 0px; padding-bottom: 0px; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#BB7777" align="center" bordercolor="#C0C0C0">
			<?php echo $oytruckwt;?></td>
			<td width="168" style="border-style:solid; border-width:1px; padding-top: 0px; padding-bottom: 0px; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#BB7777" align="center" bordercolor="#C0C0C0"><?php echo $iytruckwt;?></td></td>
			<td width="168" style="border-style:solid; border-width:1px; padding-top: 0px; padding-bottom: 0px; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#BB7777" align="center" bordercolor="#C0C0C0"><?php echo $todaytwt;?></td></td>
			<td width="168" style="border-style:solid; border-width:1px; padding-top: 0px; padding-bottom: 0px; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#BB7777" align="center" bordercolor="#C0C0C0"><?php echo $chourtwt;?></td></td>
			<td width="160" style="border-style:solid; border-width:1px; padding-top: 0px; padding-bottom: 0px; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#BB7777" align="center" bordercolor="#C0C0C0"><?php echo $phourtwt;?></td></td>
			<td width="7" style="padding-top: 0px; padding-bottom: 0px; border-left-style:solid; border-left-width:1px" bordercolor="#C0C0C0">&nbsp;</td>
		</tr>

		<tr>
			<td width="71" rowspan="3" style="padding-left: 6px; border-top-style:solid; border-top-width:1px" valign="bottom" bordercolor="#C0C0C0">
			<p align="center">
			<img border="0" src="images/singletrolley_new.jpg" width="43" height="29"></td>
			<td width="904" valign="middle" align="center" style="border-top-style: solid; border-top-width: 1px; border-bottom-style: solid; border-bottom-width: 1px" bordercolor="#C0C0C0" colspan="7">
			<img border="0" src="images/space.jpg" width="9" height="9"></td>
		</tr>
		<tr>
			<td width="64" valign="middle" align="center" style="border-style:solid; border-width:1px; padding-top: 0px; padding-bottom: 0px" bgcolor="#E1C4C4" bordercolor="#C0C0C0">
			<b><font face="Verdana" size="1">No :</font></b></td>
			<td width="168" valign="middle" style="border-style:solid; border-width:1px; padding-top: 0px; padding-bottom: 0px; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#E1C4C4" align="center" bordercolor="#C0C0C0"><?php echo $oytrolley1;?></td>
			<td width="168" style="border-style:solid; border-width:1px; padding-top: 0px; padding-bottom: 0px; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#E1C4C4" align="center" bordercolor="#C0C0C0"><?php echo $iytrolley1;?></td>
			<td width="168" style="border-style:solid; border-width:1px; padding-top: 0px; padding-bottom: 0px; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#E1C4C4" align="center" bordercolor="#C0C0C0"><?php echo $todayt1;?></td>
			<td width="168" style="border-style:solid; border-width:1px; padding-top: 0px; padding-bottom: 0px; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#E1C4C4" align="center" bordercolor="#C0C0C0"><?php echo $chourt1;?></td>
			<td width="160" style="border-style:solid; border-width:1px; padding-top: 0px; padding-bottom: 0px; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#E1C4C4" align="center" bordercolor="#C0C0C0"><?php echo $phourt1;?></td>
			<td width="7" style="padding-top: 0px; padding-bottom: 0px; border-left-style:solid; border-left-width:1px" bordercolor="#C0C0C0">&nbsp;</td>
		</tr>
		<tr>
			<td width="64" valign="middle" align="center" style="border-style:solid; border-width:1px; padding-top: 0px; padding-bottom: 0px" bgcolor="#BB7777" bordercolor="#C0C0C0">
			<b><font face="Verdana" size="1">Est Wt :</font></b></td>
			<td width="168" valign="middle" style="border-style:solid; border-width:1px; padding-top: 0px; padding-bottom: 0px; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#BB7777" align="center" bordercolor="#C0C0C0"><?php echo $oytrolley1wt;?></td>
			<td width="168" style="border-style:solid; border-width:1px; padding-top: 0px; padding-bottom: 0px; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#BB7777" align="center" bordercolor="#C0C0C0"><?php echo $iytrolley1wt;?></td>
			<td width="168" style="border-style:solid; border-width:1px; padding-top: 0px; padding-bottom: 0px; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#BB7777" align="center" bordercolor="#C0C0C0"><?php echo $todayt1wt;?></td>
			<td width="168" style="border-style:solid; border-width:1px; padding-top: 0px; padding-bottom: 0px; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#BB7777" align="center" bordercolor="#C0C0C0"><?php echo $chourt1wt;?></td>
			<td width="160" style="border-style:solid; border-width:1px; padding-top: 0px; padding-bottom: 0px; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#BB7777" align="center" bordercolor="#C0C0C0"><?php echo $phourt1wt;?></td>
			<td width="7" style="padding-top: 0px; padding-bottom: 0px; border-left-style:solid; border-left-width:1px" bordercolor="#C0C0C0">&nbsp;</td>
		</tr>

		<tr>
			<td width="71" rowspan="3" style="padding-left: 6px; border-top-style:solid; border-top-width:1px" valign="bottom" bordercolor="#C0C0C0">
			<p align="center">
			<img border="0" src="images/doubletrolley_new.jpg" width="43" height="29"></td>
			<td width="904" valign="middle" align="center" style="border-top-style: solid; border-top-width: 1px; border-bottom-style: solid; border-bottom-width: 1px" bordercolor="#C0C0C0" colspan="7">
			<img border="0" src="images/space.jpg" width="9" height="9"></td>
		</tr>
		<tr>
			<td width="64" valign="middle" align="center" style="border-style:solid; border-width:1px; padding-top: 0; padding-bottom: 0" bgcolor="#E1C4C4" bordercolor="#C0C0C0">
			<b><font face="Verdana" size="1">No :</font></b></td>
			<td width="168" valign="middle" style="border-style:solid; border-width:1px; padding-top: 0; padding-bottom: 0; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#E1C4C4" align="center" bordercolor="#C0C0C0"><?php echo $oytrolley2;?></td>
			<td width="168" style="border-style:solid; border-width:1px; padding-top: 0; padding-bottom: 0; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#E1C4C4" align="center" bordercolor="#C0C0C0"><?php echo $iytrolley2;?></td>
			<td width="168" style="border-style:solid; border-width:1px; padding-top: 0; padding-bottom: 0; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#E1C4C4" align="center" bordercolor="#C0C0C0"><?php echo $todayt2;?></td>
			<td width="168" style="border-style:solid; border-width:1px; padding-top: 0; padding-bottom: 0; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#E1C4C4" align="center" bordercolor="#C0C0C0"><?php echo $chourt2;?></td>
			<td width="160" style="border-style:solid; border-width:1px; padding-top: 0; padding-bottom: 0; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#E1C4C4" align="center" bordercolor="#C0C0C0"><?php echo $phourt2;?></td>
			<td width="7" style="padding-top: 0; padding-bottom: 0; border-left-style:solid; border-left-width:1px" bordercolor="#C0C0C0">&nbsp;</td>
		</tr>
		<tr>
			<td width="64" valign="middle" align="center" style="border-style:solid; border-width:1px; padding-top: 0; padding-bottom: 0" bgcolor="#BB7777" bordercolor="#C0C0C0">
			<b><font face="Verdana" size="1">Est Wt :</font></b></td>
			<td width="168" valign="middle" style="border-style:solid; border-width:1px; padding-top: 0; padding-bottom: 0; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#BB7777" align="center" bordercolor="#C0C0C0"><?php echo $oytrolley2wt;?></td>
			<td width="168" style="border-style:solid; border-width:1px; padding-top: 0; padding-bottom: 0; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#BB7777" align="center" bordercolor="#C0C0C0"><?php echo $iytrolley2wt;?></td>
			<td width="168" style="border-style:solid; border-width:1px; padding-top: 0; padding-bottom: 0; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#BB7777" align="center" bordercolor="#C0C0C0"><?php echo $todayt2wt;?></td>
			<td width="168" style="border-style:solid; border-width:1px; padding-top: 0; padding-bottom: 0; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#BB7777" align="center" bordercolor="#C0C0C0"><?php echo $chourt2wt;?></td>
			<td width="160" style="border-style:solid; border-width:1px; padding-top: 0; padding-bottom: 0; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#BB7777" align="center" bordercolor="#C0C0C0"><?php echo $phourt2wt;?></td>
			<td width="7" style="padding-top: 0; padding-bottom: 0; border-left-style:solid; border-left-width:1px" bordercolor="#C0C0C0">&nbsp;</td>
		</tr>

		<tr>
			<td width="71" rowspan="3" style="padding-left: 6px; border-top-style:solid; border-top-width:1px; border-bottom-style:solid; border-bottom-width:1px" valign="bottom" bordercolor="#C0C0C0">
			<p align="center">
			<img border="0" src="images/image2bull_new.jpg" width="43" height="29"></td>
			<td width="904" align="center" bordercolor="#C0C0C0" colspan="7">
			<img border="0" src="images/space.jpg" width="9" height="9"></td>
		</tr>
		<tr>
			<td width="64" valign="middle" align="center" style="border-style:solid; border-width:1px; padding-top: 0; padding-bottom: 0" bgcolor="#E1C4C4" bordercolor="#C0C0C0">
			<b><font face="Verdana" size="1">No :</font></b></td>
			<td width="168" valign="middle" style="border-style:solid; border-width:1px; padding-top: 0; padding-bottom: 0; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#E1C4C4" align="center" bordercolor="#C0C0C0">
			<?php echo $oycart;?></td>
			<td width="168" style="border-style:solid; border-width:1px; padding-top: 0; padding-bottom: 0; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#E1C4C4" align="center" bordercolor="#C0C0C0">
		      <?php echo $iycart;?></td>
			<td width="168" style="border-style:solid; border-width:1px; padding-top: 0; padding-bottom: 0; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#E1C4C4" align="center" bordercolor="#C0C0C0"><?php echo $todaycart;?></td>
			<td width="168" style="border-style:solid; border-width:1px; padding-top: 0; padding-bottom: 0; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#E1C4C4" align="center" bordercolor="#C0C0C0"><?php echo $chourcart;?></td>
			<td width="160" style="border-style:solid; border-width:1px; padding-top: 0; padding-bottom: 0; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#E1C4C4" align="center" bordercolor="#C0C0C0"><?php echo $phourcart;?></td>
			<td width="7" style="padding-top: 0; padding-bottom: 0; border-left-style:solid; border-left-width:1px" bordercolor="#C0C0C0">&nbsp;</td>
		</tr>
		<tr>
			<td width="64" valign="middle" align="center" style="border-style:solid; border-width:1px; padding-top: 0; padding-bottom: 0" bgcolor="#BB7777" bordercolor="#C0C0C0">
			<b><font face="Verdana" size="1">Est Wt :</font></b></td>
			<td width="168" valign="middle" style="border-style:solid; border-width:1px; padding-top: 0; padding-bottom: 0; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#BB7777" align="center" bordercolor="#C0C0C0"><?php echo $oycartwt;?></td>
			<td width="168" style="border-style:solid; border-width:1px; padding-top: 0; padding-bottom: 0; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#BB7777" align="center" bordercolor="#C0C0C0"><?php echo $iycartwt;?></td>
			<td width="168" style="border-style:solid; border-width:1px; padding-top: 0; padding-bottom: 0; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#BB7777" align="center" bordercolor="#C0C0C0"><?php echo $todaycartwt;?></td>
			<td width="168" style="border-style:solid; border-width:1px; padding-top: 0; padding-bottom: 0; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#BB7777" align="center" bordercolor="#C0C0C0"><?php echo $chourcartwt;?></td>
			<td width="160" style="border-style:solid; border-width:1px; padding-top: 0; padding-bottom: 0; color:#000000; font-family:Verdana; font-size:10pt; font-weight:bold" bgcolor="#BB7777" align="center" bordercolor="#C0C0C0"><?php echo $phourcartwt;?></td>
			<td width="7" style="padding-top: 0; padding-bottom: 0; border-left-style:solid; border-left-width:1px" bordercolor="#C0C0C0">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="8" bordercolor="#C0C0C0">
			<img border="0" src="images/space.jpg" width="9" height="9"></td>
		</tr>
		<tr>
			<td width="71" rowspan="2" valign="bottom" bordercolor="#C0C0C0">
			&nbsp;</td>
			</tr>
		<tr>
			<td width="64" valign="middle" align="center" bgcolor="#E1C4C4" bordercolor="#C0C0C0">
			<b><font face="Verdana" size="2">Total :</font></b></td>
			<td width="168" valign="middle" style="font-family:Verdana; font-size:8pt; font-weight:bold" bgcolor="#E1C4C4" align="center" bordercolor="#C0C0C0"><?php echo $oytotal;?></td>
			<td width="168" style="font-family:Verdana; font-size:8pt; font-weight:bold" bgcolor="#E1C4C4" align="center" bordercolor="#C0C0C0">
			<?php echo $iytotal;?></td>
			<td width="168" style="font-family:Verdana; font-size:8pt; font-weight:bold" bgcolor="#E1C4C4" align="center" bordercolor="#C0C0C0"><?php echo $todaytotal;?></td>
			<td width="168" style="font-family:Verdana; font-size:8pt; font-weight:bold" bgcolor="#E1C4C4" align="center" bordercolor="#C0C0C0"><?php echo $chourtotal;?></td>
			<td width="160" style="font-family:Verdana; font-size:8pt; font-weight:bold" bgcolor="#E1C4C4" align="center" bordercolor="#C0C0C0"><?php echo $phourtotal;?></td>
			<td width="7" bordercolor="#C0C0C0">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="8" style="border-bottom-style: none; border-bottom-width: medium" bordercolor="#C0C0C0">
			<img border="0" src="images/space.jpg" width="9" height="9"></td>
		</tr>
		<tr>
			<td colspan="8" bordercolor="#C0C0C0" style="border-top-style: none; border-top-width: medium">
			<table border="0" width="100%" id="table3" cellpadding="0" style="border-collapse: collapse" bgcolor="#EAEAEA">
				<tr>
					<td width="900" style="border-top-style: solid; border-top-width: 1px; " colspan="14" bordercolor="#C0C0C0">
					<img border="0" src="images/space_g.jpg" width="9" height="9"></td>
				</tr>
				<tr>
					<td width="7" style="padding-top:0; padding-bottom:0">&nbsp;</td>
					<td width="133" style="padding-top:0; padding-bottom:0"><b>
					<font size="2" face="Verdana">To Date Crushing:</font></b></td>
					<td width="134" bgcolor="#008000" style="color: #FFFFFF; font-family: Verdana; font-size: 10pt; font-weight: bold; padding-top:0; padding-bottom:0">
					<p align="center"><?php echo $todatecrush;?></td>
					<td width="8" style="padding-top:0; padding-bottom:0">&nbsp;</td>
					<td width="159" style="padding-top:0; padding-bottom:0"><b>
					<font size="2" face="Verdana">Yesterdays Crushing:</font></b></td>
					<td width="114" style="color: #FFFFFF; font-family: Verdana; font-size: 10pt; font-weight: bold; padding-top:0; padding-bottom:0" bgcolor="#008000">
					<p align="center"><?php echo $yestcrush;?></td>
				      <td style="padding-top:0; padding-bottom:0" width="9">&nbsp;</td>
				      <td style="padding-top:0; padding-bottom:0" width="131">
						<b><font face="Verdana" size="2">Today's Crushing:</font></b></td>
				      <td style="color:#FFFFFF; font-size:10pt; font-family:Verdana; font-weight:bold; padding-top:0; padding-bottom:0" width="97" bgcolor="#008000">
						<p align="center"><?php echo $todaytotal;?></td>
				      <td style="padding-top:0; padding-bottom:0" width="4">&nbsp;</td>
					<td width="68" style="padding-top:0; padding-bottom:0"><b>
					<font size="2" face="Verdana">&nbsp;T</font></b><font color="#008000" face="Verdana" size="1"><b>*</b></font><b><font size="2" face="Verdana"> vs Y</font></b><font color="#008000" face="Verdana" size="1"><b>*</b></font></td>	
					<td style="padding-top:0; padding-bottom:0" width="22">
					<img border="0" src="<?php echo $imac;?>" width="19" height="18"></td>
					<td width="91" style="color: #FFFFFF; font-family: Verdana; font-size: 10pt; font-weight: bold; padding-top:0; padding-bottom:0" bgcolor="#008000">
					<p align="center"><?php echo $trend;?></td>
					<td style="padding-top:0; padding-bottom:0" width="9">&nbsp;</td>

				
				</tr>
				<tr>
					<td width="900" style="border-bottom-style: solid; border-bottom-width: 1px; " colspan="14" bordercolor="#C0C0C0">
					<img border="0" src="images/space_g.jpg" width="9" height="9"></td>
				</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td colspan="8" style="border-bottom-style: none; border-bottom-width: medium" bordercolor="#808000">
			<img border="0" src="images/space.jpg" width="9" height="9"></td>
		</tr>
		<tr>
			<td colspan="8" style="border-top-style: none; border-top-width: medium" bordercolor="#C0C0C0">
			<table border="0" width="100%" id="table4" cellpadding="0" style="border-collapse: collapse" bgcolor="#C0C0C0">
				<tr>
					<td width="1%" style="border-top-style: solid; border-top-width: 1px" bordercolor="#808000">&nbsp;</td>
                              
					<td width="14%" style="color: #000000; font-family: Verdana; font-size: 10pt; font-weight: bold; border-top-style:solid; border-top-width:1px" align="center" bordercolor="#808000">
					04-08</td>
					<td width="1%" style="color: #000000; font-family: Verdana; font-size: 10pt; font-weight: bold; border-top-style:solid; border-top-width:1px" align="center" bordercolor="#808000">&nbsp;</td>
					<td width="12%" style="color: #000000; font-family: Verdana; font-size: 10pt; font-weight: bold; border-top-style:solid; border-top-width:1px" align="center" bordercolor="#808000">
					08-12</td>
					<td width="1%" style="color: #000000; font-family: Verdana; font-size: 10pt; font-weight: bold; border-top-style:solid; border-top-width:1px" align="center" bordercolor="#808000">&nbsp;</td>
					<td style="color: #000000; font-family: Verdana; font-size: 10pt; font-weight: bold; border-top-style:solid; border-top-width:1px" align="center" bordercolor="#808000">
					12-16</td>
					<td width="1%" style="color: #000000; font-family: Verdana; font-size: 10pt; font-weight: bold; border-top-style:solid; border-top-width:1px" align="center" bordercolor="#808000">&nbsp;</td>
					<td style="color: #000000; font-family: Verdana; font-size: 10pt; font-weight: bold; border-top-style:solid; border-top-width:1px" align="center" bordercolor="#808000">
					16-20</td>
					<td width="1%" style="color: #000000; font-family: Verdana; font-size: 10pt; font-weight: bold; border-top-style:solid; border-top-width:1px" align="center" bordercolor="#808000">&nbsp;</td>
					<td style="color: #000000; font-family: Verdana; font-size: 10pt; font-weight: bold; border-top-style:solid; border-top-width:1px" align="center" bordercolor="#808000">
					20-24</td>
					<td width="1%" style="color: #000000; font-family: Verdana; font-size: 10pt; font-weight: bold; border-top-style:solid; border-top-width:1px" align="center" bordercolor="#808000">&nbsp;</td>
					<td width="13%" style="color: #000000; font-family: Verdana; font-size: 10pt; font-weight: bold; border-top-style:solid; border-top-width:1px" align="center" bordercolor="#808000">
					24-04</td>
					<td width="5%" style="color: #000000; font-family: Verdana; font-size: 10pt; font-weight: bold; border-top-style:solid; border-top-width:1px" align="center" bordercolor="#808000">&nbsp;</td>
					<td style="color: #000000; font-family: Verdana; font-size: 10pt; font-weight: bold; border-top-style:solid; border-top-width:1px" align="center" bordercolor="#808000" width="8%">
					Crop Day</td>
					<td style="color: #000000; font-family: Verdana; font-size: 10pt; font-weight: bold; border-top-style:solid; border-top-width:1px; border-bottom-style:none; border-bottom-width:medium" align="center" bordercolor="#808000" width="1%">
					</td>
				</tr>
				<tr>
					<td width="1%">&nbsp;</td>
					<td width="14%" style="color: #FFFFFF; font-family: Verdana; font-size: 10pt; font-weight: bold; padding: 4px" bgcolor="#008000">
					<p align="center"><?php echo $fourhour;?></td>
					<td width="1%">&nbsp;</td>
					<td width="12%" style="color: #FFFFFF; font-family: Verdana; font-size: 10pt; font-weight: bold; padding: 4px" bgcolor="#008000">
					<p align="center"><?php echo $eighthour;?></td>
					<td width="1%">&nbsp;</td>
					<td width="14%" style="color: #FFFFFF; font-family: Verdana; font-size: 10pt; font-weight: bold; padding: 4px" bgcolor="#008000">
					<p align="center"><?php echo $twelvehour;?></td>
					<td width="1%">&nbsp;</td>
					<td width="13%" style="color: #FFFFFF; font-family: Verdana; font-size: 10pt; font-weight: bold; padding: 4px" bgcolor="#008000">
					<p align="center"><?php echo $sixteenhour;?></td>
					<td width="1%">&nbsp;</td>
					<td width="13%" style="color: #FFFFFF; font-family: Verdana; font-size: 10pt; font-weight: bold; padding: 4px" bgcolor="#008000">
					<p align="center"><?php echo $twentyhour;?></td>
					<td width="1%">&nbsp;</td>
					<td width="13%" style="color: #FFFFFF; font-family: Verdana; font-size: 10pt; font-weight: bold; padding: 4px" bgcolor="#008000">
					<p align="center"><?php echo $twentyfourhour;?></td>
					<td width="5%">&nbsp;</td>
					<td width="8%" bgcolor="#008000" style="font-size: 10pt; font-family: Verdana; font-weight: bold; color: #FFFFFF">
					<p align="center"></td>
					<td style="color: #000000; font-family: Verdana; font-size: 10pt; font-weight: bold; border-top-style:none; border-top-width:medium" align="center" bordercolor="#808000" width="1%">
					&nbsp;</td>
				</tr>
				<tr>
					<td width="1%">&nbsp;</td>
					<td width="14%">&nbsp;</td>
					<td width="1%">&nbsp;</td>
					<td width="12%">&nbsp;</td>
					<td width="1%">&nbsp;</td>
					<td>&nbsp;</td>
					<td width="1%">&nbsp;</td>
					<td>&nbsp;</td>
					<td width="1%">&nbsp;</td>
					<td>&nbsp;</td>
					<td width="1%">&nbsp;</td>
					<td width="13%">&nbsp;</td>
					<td width="5%">&nbsp;</td>
					<td width="9%" colspan="2">&nbsp;</td>
				</tr>
				<tr>
					<td width="1%" style="border-bottom-style: none; border-bottom-width: medium">&nbsp;</td>
					<td width="235" colspan="3" style="color: #FFFFFF; font-size: 10pt; font-family: Verdana; font-weight: bold; border-bottom-style: none; border-bottom-width: medium" bgcolor="#008000">
					<p align="center"><?php echo $fourhour + $eighthour;?></td>
					<td width="1%" style="border-bottom-style: none; border-bottom-width: medium">&nbsp;</td>
					<td width="30%" colspan="3" style="color: #FFFFFF; font-size: 10pt; font-family: Verdana; font-weight: bold; border-bottom-style: none; border-bottom-width: medium" bgcolor="#008000">
					<p align="center"><?php echo $twelvehour + $sixteenhour;?></td>
					<td width="1%" style="border-bottom-style: none; border-bottom-width: medium">&nbsp;</td>
					<td width="29%" colspan="3" style="color: #FFFFFF; font-size: 10pt; font-family: Verdana; font-weight: bold; border-bottom-style: none; border-bottom-width: medium" bgcolor="#008000">
					<p align="center"><?php echo $twentyhour + $twentyfourhour;?></td>
					<td width="5%" style="border-bottom-style: none; border-bottom-width: medium">&nbsp;</td>
					<td style="border-bottom-style: none; border-bottom-width: medium" width="9%" colspan="2">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="15" style="border-top-style: none; border-top-width: medium; border-bottom-style: solid; border-bottom-width: 1px" bordercolor="#808000">&nbsp;</td>
				</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td colspan="8" style="border-bottom-style: none; border-bottom-width: medium" bordercolor="#C0C0C0">
			<img border="0" src="images/space.jpg" width="9" height="9"></td>
		</tr>
		<tr>
			<td colspan="8" style="border-top-style: solid; border-top-width: 1px; border-bottom-style: solid; border-bottom-width: 1px" bordercolor="#C0C0C0">
			<table border="0" width="100%" id="table5" cellpadding="0" style="border-collapse: collapse" bgcolor="#EAEAEA">
				<tr>
					<td colspan="10">
					<img border="0" src="images/space_g.jpg" width="9" height="9"></td>
				</tr>
				<tr>
					<td width="5%">&nbsp;</td>
					<td width="10%"><b><font size="2" face="Verdana"> 
					Crushing/h :</font></b></td>
					<td width="12%" style="color: #FFFFFF; font-size: 10pt; font-family: Verdana; font-weight: bold" bgcolor="#008000">
					<p align="center"><?php echo $crushperhour;?></td>
					<td width="6%">&nbsp;</td>
					<td width="16%"><b><font face="Verdana" size="2">Forcasted 
					Crushing :</font></b></td>
					<td width="11%" style="color: #FFFFFF; font-size: 10pt; font-family: Verdana; font-weight: bold" bgcolor="#008000">
					<p align="center"><?php echo $forcasted;?></td>
					<td width="19%" style="color: #FFFFFF; font-size: 10pt; font-family: Verdana; font-weight: bold">&nbsp;</td>
					<td width="11%" style="font-size: 10pt; font-family: Verdana; font-weight: bold">
					Last Updated :</td>
					<td width="9%" style="color: #FFFFFF; font-size: 10pt; font-family: Verdana; font-weight: bold" bgcolor="#008000">
					<p align="center"><?php echo $lup;?></td>
					<td width="2%" style="color: #FFFFFF; font-size: 10pt; font-family: Verdana; font-weight: bold"></td>
				</tr>
				<tr>
					<td colspan="10">
					<img border="0" src="images/space_g.jpg" width="9" height="9"></td>
				</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td colspan="8">
			<p align="right">&nbsp;<b><font color="#008000" face="Verdana" size="2">*</font><font color="#FF0000" face="Verdana" size="2">
			</font>
			</b><font color="#800000" face="Verdana" size="2">Legends<b> : T = </b>Today's<b> </b>,<b> Y = </b>Yesterdays</font><font color="#FF0000" face="Verdana" size="2">&nbsp;
			</font></td>
		</tr>
		<tr>
			<td colspan="8" style="padding-top: 6px; padding-bottom: 6px" bgcolor="#808000">
			<p align="center"><font face="Arial" size="2" color="#FFFFFF">© 2011 
			Shree Renuka Sugars Limited, All Rights Reserved.</font></td>
		</tr>
	</table>
</div>

</body>

</html>