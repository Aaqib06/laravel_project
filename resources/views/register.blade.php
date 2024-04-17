<h1> index file </h1><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
	<h1>registration page</h1>h1>
    <form action="register" method="POST">
     @csrf
   <div class="container">
<div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input type="text" name="name"id=""class="form-control"placeholder=""aria-describedby="helpId"/>
    {{-- <small id="helpId" class="text-muted">Help text</small> --}}
	<span class="text-danger">
		@error('name')
			{{$message}}
		@enderror
	</span>
</div>
<div class="mb-3">
    <label for="" class="form-label">email</label>
    <input type="email" name="email"id=""class="form-control"placeholder=""aria-describedby="helpId"/>
    {{-- <small id="helpId" class="text-muted">Help text</small> --}}
	<span class="text-danger">
		@error('email')
			{{$message}}
		@enderror
	</span>
</div>
<div class="mb-3">
    <label for="" class="form-label">password</label>
    <input type="password" name="password"id=""class="form-control"placeholder=""aria-describedby="helpId"/>
    {{-- <small id="helpId" class="text-muted">Help text</small> --}}
	<span class="text-danger">
		@error('password')
			{{$message}}
		@enderror
	</span>
</div>
<br>
<button class="btn btn-primary">
    submit
</button>

</div> 
</body>
</html>
