<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>superadmin create user</title>
</head>
<body>
	superadmin create user
      <form action="{{url('superadmin/user')}}" method="post">
        @csrf
        <input type="text" class="form-control" placeholder="Email" name="username" required><br>
        <input type="email" class="form-control" placeholder="Email" name="email" required><br>
        <input type="password" class="form-control" placeholder="Password" name="password" required><br>
        <select name="level" class="form-control" style="width: 100%;" required="true">
			<option value="">--Pilih level--</option>
				<option value="admin">admin</option>
				<option value="superadmin">superadmin</option>
		</select><br>
		 <select name="verifikasi" class="form-control" style="width: 100%;" required="true">
			<option value="">--Pilih verifikasi--</option>
				<option value="1">ya</option>
				<option value="0">tidak</option>
		</select><br>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
      </form>
</body>
</html>