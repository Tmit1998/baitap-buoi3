<!DOCTYPE html>
<html>
<head>
	<title>Trang list</title>
</head>
<body>

	<div>
<ul>
	@foreach( $list as $lists)
			<li>{{ $lists['name'] }}</li>
	@endforeach
</ul>

	


	@if($lists['status'] == 0)
		<ul>
			<li>{{$lists['name']}}</li>
			<li>đã hoàn thàn</li>
		</ul>
	@elseif($lists['status'] ==1 && $lists['name'])
		<ul>
			<li>{{$lists['name']}}</li>
			<li>Đã hoàn thành</li>
		</ul>
	@elseif($lists['status'] == -1 && $lists['name'])
		<ul>
			<li>{{$lists['name']}}</li>
			<li>không thực hiện</li>
		</ul>
	@endif

	</div>


</body>
</html>