<?php require('connectDB.php');



	$idInput = $_GET['id'];
	$typeInput = $_GET['type'];


		$selectData2 = "SELECT id FROM $typeInput ORDER BY id DESC";
		$selectDataQuery2 = mysqli_query($connectDB, $selectData2);
		$selectDataArray2 = mysqli_fetch_array($selectDataQuery2);
		$idDB = $selectDataArray2['id'];
		$idInput = $idDB;

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>User Data Store</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/all.min.css">
		<link rel="stylesheet" type="text/css" href="css/dataView.css">
	</head>
	<body>

		<div class="header">

			<?php 

				if ($typeInput == "driverclass1") { ?>
					<a class="logo">Inland Driver Class1</a>
				<?php } if ($typeInput == "driverclass2") { ?>
					<a class="logo">Inland Driver Class2</a>
				<?php } if ($typeInput == "driverclass3") { ?>
					<a class="logo">Inland Driver Class3</a>
				<?php } if ($typeInput == "masterclass1") { ?>
					<a class="logo">Inland Master Class1</a>
				<?php } if ($typeInput == "masterclass2") { ?>
					<a class="logo">Inland Master Class2</a>
				<?php } if ($typeInput == "masterclass3") { ?>
					<a class="logo">Inland Master Class3</a>
				<?php }

			?>

		  <div class="header-right">
		    <a class="active" href="index.php">Search</a>
		    <a href="add.php">Add Data</a>
		  </div>
		</div>


		<?php 

		if (isset($idInput) && isset($typeInput)) {
			if (!empty($idInput) && !empty($typeInput)) {
				$selectData = "SELECT `yourName`, `fatherName`, `motherName`, `dateOfBarth`, `nidNumber`, `phoneNumber`, `address`, `yourIMage` FROM $typeInput WHERE id = $idInput";
				$selectDataQuery = mysqli_query($connectDB, $selectData);
				$selectDataArray = mysqli_fetch_array($selectDataQuery);
				$yourNameDB = $selectDataArray['yourName'];
				$fatherNameDB = $selectDataArray['fatherName'];
				$motherNameDB = $selectDataArray['motherName'];
				$dateOfBarthDB = $selectDataArray['dateOfBarth'];
				$nidNumberDB = $selectDataArray['nidNumber'];
				$phoneNumberDB = $selectDataArray['phoneNumber'];
				$addressDB = $selectDataArray['address'];
				$yourIMageDB = $selectDataArray['yourIMage'];
				
		?>

	<table id="customers">
	  <tr>
	    <th>Attribute</th>
	    <th>
	    	<span>Value</span>
	    	<a href="update.php?type=<?php echo $typeInput; ?>&id=<?php echo $idInput; ?>"><i style="color: #fff;" class="fa-solid fa-pen-nib" title="Edit"> Edit</i></a>
	    </th>
	  </tr>

	  <tr>


	  <tr>
	    <td>Images</td>
	    <td>
	    	 <img src="StoreData/YourImage/<?php echo $yourIMageDB; ?>">
	    	<a href="StoreData/YourImage/<?php echo $yourIMageDB;?>" download>
	    		<i class="fa-solid fa-download" title="Download"></i>
	    	</a>
	    </td>
	  </tr>


	    <td>Your Name</td>
	    <td>
	    	<span value="<?php echo $yourNameDB; ?>"><?php echo $yourNameDB; ?></span>
	    	<input id="yourNameInput" class="copyValue" type="text" name="" value="<?php echo $yourNameDB; ?>">
	    	<i id="yourNameCopy" class="fa-solid fa-copy" title="Copy"></i>
	    </td>
	  </tr>

	  <tr>
	    <td>Father Name</td>
	    <td>
	    	<span va><?php echo $fatherNameDB; ?></span>
	    	<input id="fatherNameInput" class="copyValue" type="text" name="" value="<?php echo $fatherNameDB; ?>">
	    	<i id="fatherNameCopy" class="fa-solid fa-copy" title="Copy"></i>
	    </td>
	  </tr>

	  <tr>
	    <td>Mother Name</td>
	    <td>
	    	<span><?php echo $motherNameDB; ?></span>
	    	<input id="motherNameInput" class="copyValue" type="text" name="" value="<?php echo $motherNameDB; ?>">
	    	<i id="motherNameCopy" class="fa-solid fa-copy" title="Copy"></i>
	    </td>
	  </tr>

	  <tr>
	    <td>Date of Barth</td>
	    <td>
	    	<span><?php echo $dateOfBarthDB; ?></span>
	    	<input id="dateOfBarthInput" class="copyValue" type="text" name="" value="<?php echo $dateOfBarthDB; ?>">
	    	<i id="dateOfBarthCopy" class="fa-solid fa-copy" title="Copy"></i>
	    </td>
	  </tr>

	  <tr>
	    <td>NID Number</td>
	    <td>
	    	<span><?php echo $nidNumberDB; ?></span>
	    	<input id="nidNumberInput" class="copyValue" type="text" name="" value="<?php echo $nidNumberDB; ?>">
	    	<i id="nidNumberCopy" class="fa-solid fa-copy" title="Copy"></i>
	    </td>
	  </tr>

	  <tr>
	    <td>Phone Number</td>
	    <td>
	    	<span><?php echo $phoneNumberDB; ?></span>
	    	<input id="phoneNumberInput" class="copyValue" type="text" name="" value="<?php echo $phoneNumberDB; ?>">
	    	<i id="phoneNumberCopy" class="fa-solid fa-copy" title="Copy"></i>
	    </td>
	  </tr>

	  <tr>
	    <td>Address</td>
	    <td>
	    	<span><?php echo $addressDB; ?></span>
	    	<input id="addressInput" class="copyValue" type="text" name="" value="<?php echo $addressDB; ?>">
	    	<i id="addressCopy" class="fa-solid fa-copy" title="Copy"></i>
	    </td>
	  </tr>


	<?php }} ?>


	</table>


	<script src="js/dataView.js"></script>
	</body>
</html>