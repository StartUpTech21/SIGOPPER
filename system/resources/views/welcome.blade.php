<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
</head>
<body>
      <form action="{{url('login')}}" method="post">
        @csrf
        <input type="email" class="form-control" placeholder="Email" name="email" required>
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
      </form>
</body>
</html>