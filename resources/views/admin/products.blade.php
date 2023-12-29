@extends('admin.layouts.default')
@section('title','Product Types')
@section('content')
<style type="text/css">
  sup{
    color: red;   
  }
</style>
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Add Types</span>
                <h3 class="page-title">Add New Type</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
              <div class="col-lg-9 col-md-12">
                <!-- Add New Post Form -->
                <x-alert />
                <div class="card card-small mb-3">
                  <div class="card-body">
                    <form class="add-new-post" method="post" action="{{route('store.products')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <span>Product Name <sup>*</sup></span>
                            <input type="text" name="product_name" value="{{ old('product_name') }}" class="form-control" autocomplete="off" placeholder="Enter Product Name">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <span>Product Category <sup>*</sup></span>
                           <select class="form-control" name="product_category_id">
                             <option disabled="" selected="" value="-1">--Select Category--</option>
                             @foreach($categories as $category)
                             <option value="{{$category->id}}">{{$category->category}}</option>
                             @endforeach
                           </select>
                          </div>
                        </div>
                      </div>
                       <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <span>Product Type <sup>*</sup></span>
                            <select class="form-control" name="product_sub_category_id">
                              <option disabled="" selected="" value="-1">--Select Sub-Category--</option>
                              @foreach($sub_categories as $sub_category)
                              <option value="{{$sub_category->id}}">{{$sub_category->sub_category}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <span>Product Price <sup>*</sup></span>
                            <input type="text" name="product_price" class="form-control" autocomplete="off" placeholder="Enter Product Price">
                          </div>
                        </div>
                      </div>
                       <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <span>Product Description <sup>*</sup> <sub style="float: right;">Limit:1000</sub></span>
                            <textarea class="form-control" rows="6" name="product_description" placeholder="Enter Product Description"></textarea>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <span>Product In-Short <sup>*</sup><sub style="float: right;">Limit:255</sub></span>
                            <textarea class="form-control" name="product_inshort" placeholder="Enter Product In-Short" rows="6"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <span>Picture <sup>*</sup></span>
                            <input type="file" name="photo1" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <span>Picture</span>
                            <input type="file" name="photo2" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <span>Picture</span>
                            <input type="file" name="photo3" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <span>Picture</span>
                            <input type="file" name="photo4" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <span>Video Url</span>
                            <input type="text" name="video" class="form-control" placeholder="Enter YouTube Video URL">
                          </div>
                        </div>
                      </div>
                      <button class="btn btn-success" name="submit" style="float: right; color: white;">Submit</button>
                    </form>
                  </div>
                  
                </div>
                <!-- / Add New Post Form -->
              </div>
              
            </div>
          </div>
@endsection