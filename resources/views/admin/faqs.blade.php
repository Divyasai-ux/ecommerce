@extends('admin.layouts.default')
@section('title','Faqs')
@section('content')
<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">FAQ Posts</span>
                <h3 class="page-title">Add New Post</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
              <div class="col-lg-9 col-md-12">
                <!-- Add New Post Form -->
                <div class="card card-small mb-3">
                  <div class="card-body">
                    <form class="add-new-post" method="post" action="{{route('admin.postfaq')}}">
                      @csrf
                      <input class="form-control form-control-lg mb-3" name="question" type="text" placeholder="Your Post Title">
                      <textarea class="form-control" rows="8" name="answer" placeholder="Enter Answer"></textarea>
                      <button class="btn btn-success my-4" type="submit" style="float: right; color: white;">Submit</button>
                    </form>
                  </div>
                </div>
                @if(session()->has('success'))
                  <div class="alert alert-success">{{session()->get('success')}}</div>
                @endif
                <!-- / Add New Post Form -->
              </div>
             
            </div>
          </div>
          <div class=" container-fluid px-4 mb-5">
                <div class="page-header row no-gutters py-4">
                  <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                    <h3 class="page-title">Faqs</h3>
                  </div>
                </div>
                @if(session()->has('message'))
                  <div class="alert alert-success">{{session()->get('message')}}</div>
                @endif
                <div class="row">
                  <div class="col">
                    <div class="card card-small ">
                      <div class="card-body p-0 pb-3 text-center">
                        <table class="table mb-0">
                          <thead class="bg-light">
                            <tr>
                              <th scope="col" class="border-0">Question</th>
                              <th scope="col" class="border-0">Answer</th>
                              <th scope="col" class="border-0">Delete</th>
                            </tr>
                          </thead>
                          <tbody>
                            @if(empty($faqs))
                            <tr>
                              <td style="text-align: center; font-size: 2em;">
                                No Faqs Added!!
                              </td>
                            </tr>
                            @endif
                          @foreach($faqs as $faq)
                            <tr>
                              <td>{{$faq->question}}</td>
                              <td>{{$faq->answer}}</td>
                              <td>
                                <a href="{{route('admin.deletefaq',$faq->id)}}">
                                  <button class="btn btn-danger"><i class="material-icons menu-icon">delete</i></button>
                                </a>
                              </td>
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