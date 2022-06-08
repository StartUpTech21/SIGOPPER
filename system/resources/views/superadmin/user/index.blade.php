index user <br>
<a href="{{url('superadmin/user/create')}}">create user</a>

<table border="1">
	<tr>
		<td>no</td>
		<td>aksi</td>
		<td>username</td>
		<td>email</td>
		<td>level</td>
		<td>verifikasi</td>
	</tr>
		@foreach($list_user as $d)
	<tr>
		<td>{{$loop->iteration}}</td>
		<td>
			<a href="{{url('superadmin/user/edit',$d->id)}}">edit</a>
			@include('template.utils.delete', ['url' => url('superadmin/user/delete', $d->id)])
		</td>
		<td>{{$d->username}}</td>
		<td>{{$d->email}}</td>
		<td>{{$d->level}}</td>
		<td>
			@if($d->verifikasi == 1)
				ya
			@else
				tidak
			@endif
		</td>
	</tr>
		@endforeach
</table>