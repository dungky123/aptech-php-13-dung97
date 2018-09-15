<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<form action="{{ URL::action("Usercontroller@store")}}"
 method="post"></form>
<div class="col-6">
<label for="#">username</label>
<input type="text" class="form-control" placeholder="User Name" name"username">

</div>
<div class="col-4">
<label for="#">password</label>
<div>
<select name="password" class="password">

<option value="0">male</option>
<option value="0">female</option>

</div>
</select>
<div>
<br>
<button type="submit" class="btn btn-deflaut">submit</button>
</div>
</body>
</html>