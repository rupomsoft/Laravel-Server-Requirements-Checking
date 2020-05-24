<?php


include 'Laravel_Requirements.php';


?>

<form>
<select>
<?php for($x = 0; $x <$VersionArrLength; $x++){ ?>
	<option><?php echo $LaravelVersions[$x]; ?></option>
<?php	
}
?>
</select>
</form>
