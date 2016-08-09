<pre>
<div id="body" >
	<fieldset>
	<legend> <font face="BedRock" color="MediumVioletRed" size="6">Detail Order Summary </legend>
	<table border="2" class="table table-striped table-bordered" align="center">
	
<?php
include_once"MainTable.php";
include_once "Helper.php";
include_once "DisplayLogic.php";
$var=$_SESSION['user'];
$obj = new Helper("ecomm");
$field="user_id,mobile,address,city,zip";
$table="user_details";
$condition="user_id='".$var."'";
$record=$obj->read_record($field, $table, $condition);
$arra=[];
$price=0;
$arra=array(explode("&",str_replace('%2F','/',(str_replace('%2C',',',urldecode(html_entity_decode($_SESSION['key'])))))));
	$array1 = $arra[0];
	
	
	include_once"Foreach.php";
echo '<tr>';


$objTable2=new DisplayLogic();
$price=$objTable2->displayForeach($arra[0]);


	

echo "</tr>";
?>
<?php
	include_once"BottomTable.php";	
		echo"</tr>";
		?>
</table>
<h3>Address Details :</h3>
<table border="3" BORDERCOLOR="#B8860B">
<tr>
<td>&nbsp;&nbsp;&nbsp;Email&nbsp;&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;</td>
</tr>
<?php
foreach ($record as $key ) {
    $_SESSION["user_details_id"]= $key['user_id'];
    foreach ($key as $subElement=>$val) {
	?>
		<tr>
		<td>&nbsp;&nbsp;&nbsp;<?php echo "$subElement";?>&nbsp;&nbsp;&nbsp;</td>
        <td>&nbsp;&nbsp;&nbsp;<?php echo "$val";?>&nbsp;&nbsp;&nbsp;</td>
		</tr>
		<?php
    }
}
?>
</table>
<form method="POST" action="Validate.php">
<input type="submit" name="btn_submit" class="btn btn-info" value="Address" />&nbsp;<input type="submit" name="btn_submit"  class="btn btn-info" value="Confirm" />&nbsp;<input type="submit" name="btn_submit" class="btn btn-info"  id="cancel_addtoCart" value="Cancel" />
</form>
	</fieldset>
</div>
</pre>
