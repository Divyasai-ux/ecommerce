@extends('admin.layouts.default')
	@section('title','Contact Us')
	@section('content')
	<div class=" container-fluid px-4 mb-5">
                <div class="page-header row no-gutters py-4">
                  <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                    <h3 class="page-title">Contact Forms</h3>
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
                              <th scope="col" class="border-0">Name</th>
                              <th scope="col" class="border-0">Email</th>
                              <th scope="col" class="border-0">Contact</th>
                              <th scope="col" class="border-0">Message</th>
                            </tr>
                          </thead>
                          <tbody>
                            @if(empty($queries))
                            <tr>
                              <td style="text-align: center; font-size: 2em;">
                                No Queries!!
                              </td>
                            </tr>
                            @endif
                          @foreach($queries as $query)
                            <tr>
                              <td>{{$query->name}}</td>
                              <td>{{$query->email}}</td>
                              <td>{{$query->contact}}</td>
                              <td>{{$query->message}}</td>
                              <!-- <td>
                                <a href="{{route('admin.deletefaq',$query->id)}}">
                                  <button class="btn btn-danger"><i class="material-icons menu-icon">delete</i></button>
                                </a>
                              </td> -->
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