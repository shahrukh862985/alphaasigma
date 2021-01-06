@extends('admin.layouts.app')
@push('style')
@endpush
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info mt-3">
              <div class="card-header">
                <h3 class="card-title">
                  Edit Product
                </h3>
              </div>
              <form action="{{route('products.update',$product->id)}}" method="POST" enctype="multipart/form-data">
              <!-- /.card-header -->
              <div class="card-body pad">
                @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                              <label for="">Title</label>
                            <input type="text" name="title" class="form-control" value="{{$product->title}}">
                              @error('title')
                                  <p class="text-danger mt-2 mb-0 text-sm">{{$message}}</p>
                              @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                              <label for="">Choose Product Image</label>
                              <br>
                              <input type="file" name="image" class="form-file-control" >
                              @error('image')
                                  <p class="text-danger mt-2 mb-0 text-sm">{{$message}}</p>
                              @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <label for="">Is Active</label>
                            <div class="form-group clearfix">
                                
                                <div class="icheck-success d-inline">
                                  <input type="checkbox"  {{$product->active == 1 ?'checked':''}} name="active" id="checkboxSuccess1">
                                  <label for="checkboxSuccess1">
                                      Status
                                  </label>
                                </div>
                              </div>
                        </div>
                    </div>
                 
                
                
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right"><i class="far fa-guitar-electric"></i>Submit</button>
              </div>
            </form>
            </div>
          </div>
          <!-- /.col-->
        </div>
        <!-- ./row -->
      </section>
      
</div>
@endsection
@push('scripts')

@endpush