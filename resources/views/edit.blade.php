<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>formulaire fichier</title>
  <head>
  <body>
    <div>
      <form action="{{ route('employees.update', $employees->id) }}" method="post" >
        @method('PATCH')
        @csrf
          <label for="firstname"> Prénom</label>
          <input type="text" class="form-control" name="firstname" value="{{ $employees->firstname }}" required/>
          <label for="lastname">Nom</label>
          <input type="text" class="form-control" name="lastname" value="{{ $employees->lastname }}" required/>
        <input type="submit" class="btn btn-primary" value="Modifier">
      </form>
      </div>
       
       <div>
      <form action="{{ route('employees.destroy', $employees->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="button" type="submit">Delete</button>
                </form>
      </div>

      <style>
    input[type=text] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        -webkit-transition: 0.5s;
        border-radius: 4px;
        box-sizing: border-box;
        outline: none;
  }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
  }

  input[type=submit]:hover {
      background-color: #45a049;
  } 

  input[type=text]:focus {
     border: 3px solid #555;
  }


div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
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
</style>

  

</body>
</html>