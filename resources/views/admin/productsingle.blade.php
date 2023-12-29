@extends('admin.layouts.default')
@section('title','Product Details')
@section('content')
<style type="text/css">
 td {
  border: 1px solid #d4d4d4;
}
</style>
<div class=" container-fluid px-4 mb-5">
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 col-md-11 text-center text-sm-left mb-0">
      <h3 class="page-title">Product Details</h3>
      <a href="{{route('delete.product',$productdetails->id)}}"><button style="float: right" class="btn btn-danger">Delete</button></a>
      <!-- <a href="{{route('edit.product',$productdetails->id)}}"><button style="float: right; margin-right: 20px;" class="btn btn-primary">Edit</button></a> -->

    </div>
  </div>
  @if(session()->has('message'))
  <div class="alert alert-success">{{session()->get('message')}}</div>
  @endif
  <div class="row">
    <div class="col">
      <div class="card card-small ">
        <div class="card-body p-0 pb-3 text-center">
          @if(empty($productdetails))
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 20px;">
              <h2>No Products!!</h2>
            </div>
          </div> 
          @else

          <table class="table mb-0 table-stripped">
            <thead class="bg-light">
              <tr>
                <th class="border-0">Field</th>
                <th class="border-0">Product Detail</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="width:100px">Product Name</td>
                <td>{{$productdetails->product_name}}</td>
              </tr>
              <tr>
                <td>Product Category</td>
                <td>{{$productdetails->category}}</td>
              </tr>
              <tr>
                <td>Product Sub-Category</td>
                <td>{{$productdetails->sub_category}}</td>
              </tr>
              <tr>
                <td>Product Price</td>
                <td>{{$productdetails->product_price}}</td>
              </tr>
              <tr>
                <td style="width:300px">Product In-Short</td>
                <td>{{$productdetails->product_inshort}}</td>
              </tr>
              <tr>
                <td>Product Description</td>
                <td>{{$productdetails->product_description}}</td>
              </tr>
              <tr>
                <td>Product Photo1</td>
                <td>
                  @if(empty($productdetails->photo1))
                  <span>No Photo</span>
                  @else
                  <a href="{{url('images/products/'.$productdetails->photo1)}}" data-lightbox="mygallery"><img src="{{url('images/products/'.$productdetails->photo1)}}" height="60" width="60" class="img-responsive"></a>
                  @endif
                </tr>
                <tr>
                  <td>Product Photo2</td>
                  <td>
                    @if(empty($productdetails->photo2))
                    <span>No Photo</span>
                    @else
                    <a href="{{url('images/products/'.$productdetails->photo2)}}" data-lightbox="mygallery"><img src="{{url('images/products/'.$productdetails->photo2)}}" height="60" width="60" class="img-responsive"></a>
                    @endif
                  </tr>
                  <tr>
                    <td>Product Photo3</td>
                    <td>
                      @if(empty($productdetails->photo3))
                      <span>No Photo</span>
                      @else
                      <a href="{{url('images/products/'.$productdetails->photo3)}}" data-lightbox="mygallery"><img src="{{url('images/products/'.$productdetails->photo3)}}" height="60" width="60" class="img-responsive"></a>
                      @endif
                    </td>
                  </tr>
                  <tr>
                    <td>Product Photo4</td>
                    <td>
                      @if(empty($productdetails->photo4))
                      <span>No Photo</span>
                      @else
                      <a href="{{url('images/products/'.$productdetails->photo4)}}" data-lightbox="mygallery"><img src="{{url('images/products/'.$productdetails->photo4)}}" height="60" width="60" class="img-responsive"></a>
                      @endif
                    </td>
                  </tr>
                  <tr>
                    <td>Product Video</td>
                    <td>
                      @if(empty($productdetails->video))
                      <span>No Link Given</span>
                      @else
                      <a href="{{$productdetails->video}}">YouTube Link</a></td>
                      @endif
                    </tr>

                  </tbody>
                </table>
                @endif
              </div>
            </div>
          </div>
        </div>

      </div>
      @endsection