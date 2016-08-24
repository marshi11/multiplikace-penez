<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Multiplikace peněz - kalkulačka</title>
<meta name="description" content="Odkazy a kalkulačka multiplikace peněz"> 

</head>

<style>

body{
font-family:Arial,"Times New Roman", Times, serif;
}

table{
border-collapse: collapse;
border-spacing:inherit;
}


.border
{
border: 1px solid #333333;
padding: 0px;
margin: 0px;
border-collapse: collapse;
border-spacing:inherit;
}
.submit {
font-family:Arial, Helvetica, sans-serif;

 font-size:18px;
 font-size-adjust:none;
 float:none; 
font-weight:lighter; }
.legend {
font-family:Arial, Helvetica, sans-serif;

color:#009900;
 font-size:24px; 
font-size-adjust:none;
 float:none; 
font-weight:lighter; }
a:hover{
text-decoration:none;}
.style4 {

	font-weight: bold;
	background-color:#FFFF99;
}
</style>
<script>
function zandej (kolik)
{
document.formular.rezerva.value=kolik;
document.formular.submit();
}
</script>
<body>
<a href="http://www.uctovani.net">&laquo; Zpět na www.uctovani.net</a>
<h1>Multiplikace peněz</h1>
<ul>
	<li>Český článek o <a href="http://www.euroekonom.cz/ekonomie-clanky.php?type=lekce14" target="_blank" title="Otevře se do nového okna">tvorbě nových peněz (multiplikaci)</a></li>
    <li>Dokument <a href="http://911.yweb.sk/filmy.html#money-as-debt"  target="_blank" title="Otevře se do nového okna">peníze jako dluh</a> s českými titulky</li>
    
</ul><br>
<br>
<hr>
<fieldset>
<legend class="legend">Kalkulačka</legend>
<table width="932" >
<tr>
<td width="670" rowspan="8">
<form name="formular" method="post">
  Zadejte <strong>nové peníze</strong> uložené na bankovní účet:
  <br>
  <input type="text" name="penize"   value="<?php if(isset($_POST["penize"])) echo $_POST["penize"]; else echo "1000000";?>">
    <br>
    <br>
	
  Zadejte <strong>minimální peněžní rezervy</strong><br>
  <input type="text" name="rezerva" value="<?php if(isset($_POST["rezerva"])) echo $_POST["rezerva"]; else echo "10";?>">
    <span style="cursor:help; " title="Pokud chcete použít čísla za desetinou čárkou, napište 8.5 pro 8,5% minimální zásobu">%</span><br>
    <br>
    <br>
    <input type="submit" value="Spočítat" class="submit">
    <br>
      
</form>
</td>
<td colspan="3" class="border"  ><strong>Minimální rezervy ve světě:</strong>
</td>
</tr>
<tr>
	<td width="87" class="border">Česko</td>
	<td width="102" class="border">2% </td>
	<td width="53" class="border"><span title="Klikněte pro výpočet v této zemi" style="cursor:crosshair;  color:#FF9900; text-align:right; " onClick="zandej(2)">&laquo;&laquo; </span></td>
</tr>
<tr>
	<td class="border">Eurozóna</td>
	<td class="border">2% </td>
	<td class="border"><span title="Klikněte pro výpočet v této zemi" style="cursor:crosshair;  color:#FF9900; text-align:right; " onClick="zandej(2)">&laquo;&laquo; </span></td>

</tr>
<tr>
	<td class="border">Švýcarsko</td>
	<td class="border">2.5% </td>
	<td class="border" ><span title="Klikněte pro výpočet v této zemi" style="cursor:crosshair;  color:#FF9900; text-align:right; " onClick="zandej(2.5)">&laquo;&laquo; </span></td>

</tr>
<tr>
	<td class="border">Indie</td>
	<td class="border">5% </td>
	<td class="border"><span title="Klikněte pro výpočet v této zemi" style="cursor:crosshair;  color:#FF9900; text-align:right; " onClick="zandej(5)">&laquo;&laquo; </span></td>
</tr>
<tr>
	<td class="border">USA</td>
	<td class="border">10%</td>
	<td class="border"><span title="Klikněte pro výpočet v této zemi" style="cursor:crosshair;  color:#FF9900; text-align:right; " onClick="zandej(10)">&laquo;&laquo; </span></td>
</tr>
<tr>
	<td class="border">Čína</td>
	<td class="border">15.50%</td>
	<td class="border"><span title="Klikněte pro výpočet v této zemi" style="cursor:crosshair;  color:#FF9900; text-align:right; " onClick="zandej(15.50)">&laquo;&laquo; </span></td>
</tr>
<tr>
	<td colspan="3" class="border"><a href="http://cs.wikipedia.org/wiki/Povinn%C3%A9_minim%C3%A1ln%C3%AD_rezervy" title="Minimální bankovní rezervy stanovené centrální bankou - otevře se do nového okna" target="_blank">Více zemí zde</a> nebo <a href="http://en.wikipedia.org/wiki/Reserve_requirement" title="Minimální bankovní rezervy stanovené centrální bankou - otevře se do nového okna"  target="_blank">zde anglicky </a></td>
</tr>

</table>
</fieldset>
<?php
 if (!empty($_POST)) // už se odeslalo
  {
   if($_POST["rezerva"]==0)
  {
  echo "Nene, vždy je nějaká bankovní rezerva ;))";
  return 1;
  }
  

  $nove_penize=$_POST["penize"];
  $rezerva=1-($_POST["rezerva"]/100);
  $celkem_to_bude=$nove_penize*100/$_POST["rezerva"];
 
  $penizekmultiplikaci=$nove_penize;
 	$i=1;
   $mezipenize[0]=$nove_penize;
 
  while($penizekmultiplikaci>=1)
 	 {
   $mezipenize[$i]=$penizekmultiplikaci*$rezerva;
   $penizekmultiplikaci=$mezipenize[$i];
   $i++;
   	}
  ?>
  <ul>
  <li>Nově vložených <strong><?php  echo "".number_format($nove_penize, 0, '', ' ').",- Kč "; ?></strong> se při minimální bankovní  rezervě <strong><?php echo $_POST["rezerva"]; ?> %</strong> <span class="style4">mohou</span> rozmnožit až na 
<strong><?php  echo "".number_format($celkem_to_bude, 0, '', ' ').",- Kč "; ?></strong> <br>
  </li></ul> 
<h3>Multiplikace peněz by probíhala takto:</h3>
	<table  cellpadding="0" cellspacing="0">
	<tr>
		<th width="74" class="border"><strong>Č. vkladu</strong></th>
		<th width="211" align="right" class="border"><strong >Nové peníze k půjčkám</strong></th>
		<th width="237" align="right" class="border"><strong>Celkem nových peněz</strong></th>
	</tr>
	<?php
	$j=1;
	$celkem=0;
	
	 foreach ($mezipenize as $vypis) 
	{
		$celkem=$vypis+$celkem;
		?>
		<tr>
		<td class="border" ><?php echo $j; ?></td>
		<td align="right" class="border"><?php echo "".number_format($vypis, 0, '', ' ').",- Kč "; ?>
		 </td >
		<td align="right" class="border"><?php echo "".number_format($celkem, 0, '', ' ').",- Kč "; ?></td>
	</tr>
	
	<?php
	 $j++;
	} 
	?>
	<tr>
		<td class="border"><?php echo $j; ?></td>
		<td align="right" class="border">... a tak dále až do:
	  </td>
		<td align="right" class="border"><?php echo "".number_format($celkem_to_bude, 0, '', ' ').",- Kč "; ?></td>
	</tr>
	</table>  
	<?php
	
   } 
  ?>
  
</body>
</html>
