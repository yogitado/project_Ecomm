<pre>
<link rel="stylesheet" type="text/css" href="css/bodyCss.css">
<div id="body">
<h1 style="color:MediumVioletRed;text-align:center"><font face="BedRock">Your Cart</h1>
<table class="table table-striped table-bordered" border="3">
	
<?php
	include_once"MainTable.php";
	$var=$_SERVER['QUERY_STRING'];
	include_once "DisplayLogic.php";
	$_SESSION['key']=$var;
	$price=0;
	$arra=[];	
	$arra=array(explode("&",str_replace('%2F','/',(str_replace('%2C',',',urldecode(html_entity_decode($_SERVER['QUERY_STRING'])))))));
	$array1 = $arra[0];
	include_once"Foreach.php";
	echo '<tr>';
	
		
		
		
		
		
		$objTable=new DisplayLogic();
        $price=$objTable->displayForeach($arra[0]);

	
echo "</tr>";
?>
<?php
include_once"BottomTable.php";
		
		echo"</tr>";
		?>
</table>
<form action="Summary.php" method="POST">
<input type="submit" class="btn btn-info" value="Confirm Order"/>&nbsp;<input type="button" value="Cancel"
class="btn btn-info" id="cancel_addtoCart"/>
</form>
</div>
</pre>
