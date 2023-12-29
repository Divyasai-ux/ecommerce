<div>
	@if(session()->has('message'))
	<div class="bg-success" style="padding: 10px; color: white;">{{session()->get('message')}}</div>

	@elseif(session()->has('error'))
	<div>{{session()->get('error')}}</div>

	@endif
</div>


@if($errors->any())
<div>
	<ul>
		@foreach($errors->all() as $errors)
		<li>{{$errors}}</li>
		@endforeach
	</ul>
</div>
@endif