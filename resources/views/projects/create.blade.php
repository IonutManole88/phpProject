<!DOCTYPE html>
<html>
<head>
	<title>Projects</title>
</head>
<body>
	<h1>Create a new Project</h1>

	<form method="POST" action="/projects">
		{{ csrf_field() }}
		
		<div>
			<input type="text" name="Title" placeholder="Project Name">
		</div>

		<div>
			<textarea name="Description" placeholder="Project Description"></textarea>
		</div>

		<div>
			<button type="Submit">Create Project</button>
		</div>


	</form>


</body>
</html>