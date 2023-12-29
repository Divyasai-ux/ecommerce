@extends('admin.layouts.default')
	@section('title','Subscribers')
	@section('content')
	<div class=" container-fluid px-4 mb-5">
      <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
          <h3 class="page-title">Subscribers</h3>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card card-small ">
            <div class="card-body p-0 pb-3 text-center">
              <table class="table mb-0">
                <thead class="bg-light">
                  <tr>
                    <th scope="col" class="border-0">Subscribers</th>
                    
                  </tr>
                </thead>
                <tbody>
                 @foreach($subscribers as $subs)
                 <tr>
                  <td>{{$subs->email}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
	@endsection