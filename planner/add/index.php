<?php include '../../system/initialize.php'; ?>
<?php include '../template/header.php'; ?>
<section class="main-content">
	<?php
		$url = $_SERVER['REQUEST_URI'];
		$url = ltrim($url, '/');
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		#print_r($url);
		$system = $url[3];
	?>
	<?php if($system == 'wedding'){ ?>
	<div class="">
	<h3>Create a new Wedding</h3>
	<form action="../process/new-wedding.php" method="post">
		<label for="couple">Couple's Name</label>
		<input type="text" name="couple" id="couple" class="span4" />
		<label for="fname">Fiance's First Name</label>
		<input type="text" name="fname" id="fname" class="span4" />
		<label for="lname">Fiance's Last Name</label>
		<input type="text" name="lname" id="lname" class="span4" />
		<label for="date">Wedding Date</label>
		<input type="text" name="date" id="date" class="span4 datepicker" />
		<label for="city">City/Village</label>
		<select name="city" id="city" class="span4" >
			<option value="0">Select City/Village</option>
			<?php $city = City::find_by_sql("SELECT * FROM cities WHERE country='bw'");
				foreach($city as $city):
			?>
			<option value="<?php echo $city->id; ?>"><?php echo $city->name; ?></option>
			<?php endforeach;?>
		</select>
		<label for="province">Province</label>
		<input type="text" name="province" id="privince" class="span4" />
		<label for="location">Location</label>
		<input type="text" name="location" id="location" class="span4" />
		<label for="type">Type</label>
		<input type="text" name="type" id="type" class="span4" />
		<label for="color1">Color One</label>
		<input type="text" name="color1" id="color1" class="span4" />
		<label for="color2">Color Two</label>
		<input type="text" name="color2" id="color2" class="span4" />
		<label for="color3">Color Three</label>
		<input type="text" name="color3" id="color3" class="span4" /></p>
		
		<input type="submit" name="submit" id="submit" class="btn btn-success" value="Create Wedding" />
	</form>
	</div>
	<?php }?>
	
</section>
<footer><?php include '../template/footer.php'; ?></footer>