<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>homepage</title>
	<link href="/css/admin.css" rel="stylesheet">
</head>
<body>
	<div class="sidebar">
		<h2>Admin</h2>
		<ul class="nav">
			<li><a href="">Dashboard</a></li>
			<li><a href="">Appointments</a></li>
			<li><a style="color: #081C15;">Events</a></li>
			<li><a href="">Activities</a></li>
			<li><a href="">Members</a></li>
			<li><a href="">Staff</a></li>
			<li><a href="">Account</a></li>
			<li><a href="">Logout</a></li>
		</ul>
	</div>

    <div class="main">
	<h1>Create Event</h1>
    <h3 class="Formh3"><a class="Form" href="/signup">Report</a></h3>
    <h3 class="Formh3"><a class="Form" href="/signup">View Event</a></h3>
    <h3 class="Formh3"><a class="Form" href="/signup">Mass</a></h3>
	
    <div class="EventForm">
		<div class="EventForm1">
        <form  action="">
		<label class="EventFormLabel">Event Name</label>
		<input class="EventFormInput" type="text" name="">
		<br>
		<label class="EventFormLabel">Event Date From</label>
		<input class="EventFormInput" type="date" name="">
		<label class="EventFormLabel">Event Date To</label>
		<input class="EventFormInput" type="date" name="">
		<br>
		<label class="EventFormLabel">Details</label>
		<input class="EventFormInput" type="text" name="">
		<br>
		<label class="EventFormLabel">Attach Picture</label>
		<input class="EventFormInput" type="file" accept="image/*" name="">
		<br>
		<label class="EventFormLabel">Post On Site</label>
		<input class="EventFormInput" type="radio" name="" value="yes">
		<br>
		<button class="FormButton">Create</button>
		</form>
		</div>
    </div>
    </div>


	
</body>
</html>