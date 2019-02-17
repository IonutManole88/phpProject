<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	table, th, td {
  border: 1px solid black;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 7px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 4px 2px;
  cursor: pointer;
}
.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
</style>
<body>
	<h1>Projects</h1>

	<table style="width: 70%">	
		<tr>
			<th>Title</th>
			<th>Description</th>
			<th>Actions</th>
		</tr>
		@foreach($projects as $project)
	<tr>
		<td>{{ $project->title }}</td>
		<td>{{ $project->description }}</td>
		<td><BUTTON class="button button2" type="button">Edit</BUTTON><BUTTON class="button button3" type="button">Delete</BUTTON></td>
	</tr>

	@endforeach
		
	</table>

	<br>
		<div>
			<button class="button button4" type="button" onclick="location.href='/projects/create'"><b>New Project</b></button>
		</div>
</body>
</html>