<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>{{$employees->firstname}} {{$employees->lastname}}</h1>

	<p>
		<a href="/employees/{{$employees->id}}/edit"> Modifier</a>
	</p>

	<p>
		<form action="{{ route('employees.destroy', $employees->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="button " type="submit">Delete</button>
                </form>
    </p>


<style>
	.button {
	background-color: #f44336;
  color: white; 
  border: 2px solid #f44336;
   transition-duration: 0.4s;
  cursor: pointer;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
}

.button:hover {
  background-color: red;
  color: white;
}

a:link, a:visited {
  background-color: #3c903c;
  color: white;
  padding: 16px 29px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
    margin: 4px 2px;

}

a:hover, a:active {
  background-color: green;
}
</style>
</body>
</html>