@extends('admin.layouts.default')
@section('title','Categories')
@section('content')
<!-- / .main-navbar -->
<!-- / .main-navbar -->
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Category Posts</span>
      <h3 class="page-title">Add New Category</h3>
    </div>
  </div>
  <!-- End Page Header -->
  <div class="row">
    <div class="col-lg-9 col-md-12">
      <!-- Add New Post Form -->
      <div class="card card-small mb-3">
        <div class="card-body">
          <form class="add-new-post pt-4 pb-5" method="post" action="{{route('category.store')}}">
            @csrf
            <input class="form-control form-control-lg mb-3" name="category" type="text" placeholder="Enter Category">
            <button class="btn btn-success form-control mt-2" name="submit">Submit</button>
          </form>
        </div>
      </div>
      <!-- / Add New Post Form -->
    </div>
    <div class=" container-fluid px-4 mb-5">
      <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
          <h3 class="page-title">Categories</h3>
        </div>
      </div>
      <x-alert/>
      <div class="row">
        <div class="col">
          <div class="card card-small ">
            <div class="card-body p-0 pb-3 text-center">
              <table class="table mb-0">
                <thead class="bg-light">
                  <tr>
                    <th scope="col" class="border-0">Category</th>
                    <th scope="col" class="border-0">Edit</th>
                    <th scope="col" class="border-0">Delete</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($categories as $cat)
                 <tr>
                  <td>{{$cat->category}}</td>
                  <td><button class="btn btn-primary"><i class="material-icons menu-icon">edit</i></button></td>

                  <td><button class="btn btn-danger" onclick="event.preventDefault();
                  if(confirm('Do you want of Delete this Category')){
                    document.getElementById('category-delete-{{$cat->id}}').submit();
                  }
                  "><i class="material-icons menu-icon">delete</i></button></td>
                  <form hidden="" method="post" id="{{'category-delete-'.$cat->id}}" action="{{route('category.delete', $cat->id)}}">
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