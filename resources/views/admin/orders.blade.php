@extends('admin.layouts.default')
	@section('title','Orders')
	@section('content')
	<div class=" container-fluid px-4 mb-5">
                <div class="page-header row no-gutters py-4">
                  <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                    <h3 class="page-title">Orders List</h3>
                  </div>
                </div>
                @if(session()->has('message'))
                  <div class="alert alert-success">{{session()->get('message')}}</div>
                @endif
                <div class="row">
                  <div class="col">
                    <div class="card card-small ">
                      <div class="card-body p-0 pb-3 text-center">
                        @if(empty($queries))
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 20px;">
                              <h2>No Orders!!</h2>
                            </div>
                          </div> 
                        @else
                            
                        <table class="table mb-0">
                          <thead class="bg-light">
                            <tr>
                              <th scope="col" class="border-0">Product Name</th>
                              <th scope="col" class="border-0">Product Category</th>
                              <th scope="col" class="border-0">Contact Number</th>
                              <th scope="col" class="border-0">View</th>
                            </tr>
                          </thead>
                          <tbody>
                            
                          @foreach($orders as $order)
                            <tr>
                              <td>{{$order->product_name}}</td>
                              <td>{{$order->product_category_id}}</td>
                              <td>{{$order->contact}}</td>
                              <td>
                                <a href="{{route('order.byid',$order->id)}}">
                                  <button class="btn btn-success"><i class="material-icons menu-icon">visibility</i></button>
                                </a>
                              </td>
                              <!-- <td>
                                <a href="{{route('admin.deletefaq',$query->id)}}">
                                  <button class="btn btn-danger"><i class="material-icons menu-icon">delete</i></button>
                                </a>
                              </td> -->
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