<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>superadmin create user</title>
</head>
<body>
	superadmin edit user
      <form action="{{url('superadmin/user/update', $user->id)}}" method="post">
					@csrf
					@method("PUT")
        <input type="text" class="form-control" placeholder="Email" name="username" value="{{$user->username}}" required><br>
        <input type="email" class="form-control" placeholder="Email" name="email"  value="{{$user->email}}" required><br>
        <input type="password" class="form-control" placeholder="Password" name="password" required><br>
        <select name="level" class="form-control" style="width: 100%;" required="true">
			<option value="">--Pilih level--</option>
				<option value="admin" @if($user->level =='admin') selected @endif >admin</option>
				<option value="superadmin" @if($user->level =='superadmin') selected @endif  >superadmin</option>
		</select><br>
		 <select name="verifikasi" class="form-control" style="width: 100%;" required="true">
			<option value="">--Pilih verifikasi--</option>
				<option value="1" @if($user->verifikasi == 1) selected @endif >ya</option>
				<option value="0" @if($user->verifikasi == 0) selected @endif >tidak</option>
		</select><br>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
      </form>
</body>
</html>