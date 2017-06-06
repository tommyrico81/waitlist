<html lang="us">
<head>

<?php include 'header.php'; ?>

</head>
<body>

<div id="l1">
<div id="l2">
<h2 style="text-align: center;">Early Horizon Waitlist</h2>
<form method="POST" action="addchild.php">

<div class="container">
<h3>Child's info:</h3>
	<label>First Name:</label>
	<input id="cfname" type="text" size="20" name="cfname"/><br>
	<label>Last Name:</label>
	<input id="clname" type="text" size="20" name="clname"/><br>
	<label>Date of Birth:</label><br>
	<input id="dob" type="text" size="10" name="dob"/><br>

<h3>Parent info:</h3> 
	<label>First Name:</label>
	<input id="pfname" type="text" size="20" name="pfname"/><br>
	<label>Last Name:</label>
	<input id="plname" type="text" size="20" name="plname"/><br>
	<label>Email:</label>
	<input id="email" type="text" size="20" name="email"/><br>
	<label>Phone:</label>
	<input id="phone" type="text" size="20" name="phone"/><br>

<br>
<select name="classroom">
	<option value="Infant">Infant Room (0-6mo)</option>
	<option value="PreTot">Pre-Tot Room (6-12mo)</option>
	<option value="Toddler">Toddler Room (12-24mo)</option>
	<option value="PreK">Pre-K (24-48mo)</option>
	<option value="SchoolAge">School Age (48mo+)</option>
</select>
</div>

<h3 class="demoHeaders">Child Start Date</h3>
<input id="startdate" type="text" size="10" name="startdate" /><br>

<br>
<input id="button" class="button" name="add" type="submit" value="Submit"/>

</div>
</div>
</form>


</body>

<?php include 'footer.php'; ?>



</html>
