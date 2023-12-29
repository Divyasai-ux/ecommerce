@extends('admin.layouts.default')
@section('title','Company Information')
@section('content')
<!-- / .main-navbar -->
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Company Information</span>
      <h3 class="page-title">Add Information</h3>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-9 col-md-12">
      <div class="card card-small mb-3">
        <div class="card-body">
          <form class="add-new-post" method="post" action="{{route('admin.companyinfopost')}}">
            @csrf
            <div class="form-group">
              <input type="text" name="city" autocomplete="off" class="form-control form-control-lg" placeholder="Enter City Name">
            </div>
            <div class="form-group">
              <input class="form-control form-control-lg mb-3" autocomplete="off" type="text" name="state" placeholder="Enter State">
            </div>
            <div class="form-group">
              <input class="form-control form-control-lg mb-3" autocomplete="off" type="text" name="address" placeholder="Enter Complete Address">
            </div>
            <div class="form-group">
              <input class="form-control form-control-lg mb-3" autocomplete="off" type="text" name="email" placeholder="Enter Email">
            </div>
            <div class="form-group">
              <input class="form-control form-control-lg mb-3" autocomplete="off" type="text" name="contact" placeholder="Enter Contact Number">
            </div>
            <button class="btn btn-success"  name="submit" style="float: right; color: white;">Submit</button>
          </form>
        </div>
      </div>
      @if(session()->has('success'))
      <div class="alert alert-success">{{session()->get('success')}}</div>
      @endif

      @if($errors->any())
      @foreach ($errors->all() as $error)
      <div class="alert alert-danger">{{$error}}</div>
      @endforeach
      @endif
    </div>
  </div>
  <div class=" container-fluid px-4 mb-5">
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <h3 class="page-title">Information Details</h3>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card card-small ">
          <div class="card-body p-0 pb-3 text-center">
            <table class="table mb-0">
              <thead class="bg-light">
                <tr>
                  <th scope="col" class="border-0">City</th>
                  <th scope="col" class="border-0">State</th>
                  <th scope="col" class="border-0">Address</th>
                  <th scope="col" class="border-0">email</th>
                  <th scope="col" class="border-0">Contact</th>
                  <th scope="col" class="border-0">Delete</th>
                </tr>
              </thead>
              <tbody>
               @foreach($data as $information)
               <tr>
                <td>{{$information->city}}</td>
                <td>{{$information->state}}</td>
                <td>{{$information->address}}</td>
                <td>{{$information->email}}</td>
                <td>{{$information->contact}}</td>
                <td><button class="btn btn-danger" onclick="event.preventDefault();
                if(confirm('Do you want of Delete this type')){
                  document.getElementById('category-delete-{{$information->id}}').submit();
                }
                "><i class="material-icons menu-icon">delete</i></td>
                <form hidden="" method="post" id="{{'category-delete-'.$information->id}}" action="{{route('admin.companyinfodelete', $information->id)}}">
                  @csrf
                  @method('delete')
                </form>
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