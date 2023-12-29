@extends('admin.layouts.default')
@section('title','Change password')
@section('content')
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Password</span>
                <h3 class="page-title">Change Password</h3>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-6 offset-md-3 offset-lg-3 ">
                <div class="card card-small mb-3">
                  <div class="card-body">
                    <form class="add-new-post" method="post" action="{{route('admin.changepasswordpost')}}">
                      @csrf
                      <div class="form-group">
                        
                      </div>
                      <div class="form-group">
                        <input class="form-control form-control-lg mb-3" type="text" name="password" placeholder="Enter New Password">
                      </div>
                      	<button class="btn btn-success" name="submit" style="float: right; color: white;">Submit</button>
                    </form>
                  </div>
                </div>
               @if(session()->has('success'))
                  <div class="alert alert-success">{{session()->get('success')}}</div>
               @endif
            </div>
          </div>
@endsection