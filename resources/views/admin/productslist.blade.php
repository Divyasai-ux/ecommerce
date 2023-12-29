@extends('admin.layouts.default')
	@section('title','Products List')
	@section('content')
	<div class=" container-fluid px-4 mb-5">
                <div class="page-header row no-gutters py-4">
                  <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                    <h3 class="page-title">Products List</h3>
                  </div>
                </div>
                @if(session()->has('message'))
                  <div class="alert alert-success">{{session()->get('message')}}</div>
                @endif
                <div class="row">
                  <div class="col">
                    <div class="card card-small ">
                      <div class="card-body p-0 pb-3 text-center">
                        @if(count($products)==0)
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 20px;">
                              <h2>No Products!!</h2>
                            </div>
                          </div> 
                        @else
                            
                        <table class="table mb-0">
                          <thead class="bg-light">
                            <tr>
                              <th scope="col" class="border-0">Product Name</th>
                              <th scope="col" class="border-0">Product Category</th>
                              <th scope="col" class="border-0">Product Price</th>
                              <th scope="col" class="border-0">View</th>
                            </tr>
                          </thead>
                          <tbody>
                            
                          @foreach($products as $product)
                            <tr>
                              <td>{{$product->product_name}}</td>
                              <td>{{$product->category}}</td>
                              <td>{{$product->product_price}}</td>
                              <td>
                                <a href="{{route('single.product',$product->id)}}">
                                  <button class="btn btn-success"><i class="material-icons menu-icon">visibility</i></button>
                                </a>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            </div>
	@endsection