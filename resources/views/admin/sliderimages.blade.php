@extends('admin.layouts.default')
@section('title','Slider Images')
@section('content')
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Images</span>
                <h3 class="page-title">Add New Slider</h3>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-9 col-md-12">
                <div class="card card-small mb-3">
                  <div class="card-body">
                    <form class="add-new-post" method="post" action="{{route('admin.sliderimagespost')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <input type="file" name="photo" class="form-control">
                      </div>
                      	<button class="btn btn-success" type="submit"  name="submit" style="float: right; color: white;">Submit</button>
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
                    <h3 class="page-title">Sliders</h3>
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
                              <th scope="col" class="border-0">Images</th>
                              <th scope="col" class="border-0">Delete</th>
                            </tr>
                          </thead>
                          <tbody>
                           @foreach($images as $image)
                           <tr>
                            <td>
                              <a href="{{url('images/slider/'.$image->photo)}}" data-lightbox="mygallery"><img src="{{url('images/slider/'.$image->photo)}}" height="60" width="60" class="img-responsive"></a>
                            </td>

                            <td><button class="btn btn-danger" onclick="event.preventDefault();
                            if(confirm('Do you want of Delete this type')){
                              document.getElementById('category-delete-{{$image->id}}').submit();
                            }
                            "><i class="material-icons menu-icon">delete</i></td>
                            <form hidden="" method="post" id="{{'category-delete-'.$image->id}}" action="{{route('admin.deleteslider',$image->id)}}">
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