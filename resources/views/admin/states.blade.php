@extends('admin.layouts.default')
@section('title','Product Types')
@section('content')
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">States</span>
                <h3 class="page-title">Add New State</h3>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-9 col-md-12">
                <div class="card card-small mb-3">
                  <div class="card-body">
                    <form class="add-new-post" method="post" action="{{route('admin.statepost')}}">
                      @csrf
                      <div class="form-group">
                        <input type="text" name="state" autocomplete="off" class="form-control" placeholder="Enter State Name">
                      </div>
                      <div class="form-group">
                        <input class="form-control form-control-lg mb-3" autocomplete="off" type="text" name="price" placeholder="Delivery Charges">
                      </div>
                      	<button class="btn btn-success"  name="submit" style="float: right; color: white;">Submit</button>
                     
                    </form>
                  </div>
                </div>
               @if(session()->has('success'))
                  <div class="alert alert-success">{{session()->get('success')}}</div>
               @endif
            </div>
          </div>
          <div class=" container-fluid px-4 mb-5">
                <div class="page-header row no-gutters py-4">
                  <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                    <h3 class="page-title">State</h3>
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
                              <th scope="col" class="border-0">State</th>
                              <th scope="col" class="border-0">Price</th>
                              <th scope="col" class="border-0">Edit</th>
                              <th scope="col" class="border-0">Delete</th>
                            </tr>
                          </thead>
                          <tbody>
                           @foreach($states as $state)
                           <tr>
                            <td>{{$state->state}}</td>
                           <td>{{$state->price}}</td>
                            <td><button class="btn btn-primary"><i class="material-icons menu-icon">edit</i></button></td>

                            <td><button class="btn btn-danger" onclick="event.preventDefault();
                            if(confirm('Do you want of Delete this type')){
                              document.getElementById('category-delete-{{$state->id}}').submit();
                            }
                            "><i class="material-icons menu-icon">delete</i></td>
                            <form hidden="" method="post" id="{{'category-delete-'.$state->id}}" action="{{route('product_type.delete', $state->id)}}">
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