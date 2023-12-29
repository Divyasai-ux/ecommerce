@extends('layouts.default')
	@section('title','Faqs')
	@section('content')
<div class="container">
	<div class="row">
			@foreach($faqs as $faq)
				<div class="col-md-6 mt-10">
				<p class="faq_question"><b>Q: {{$faq->question}}</b></p>
				<p class="faq_answer"><span style="color: black;"><b>Ans:</b></span> {{$faq->answer}}</p>
			</div>
			@endforeach
	</div>
</div>
@endsection