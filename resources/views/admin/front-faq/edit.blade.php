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
                  Create Frequently Ask Question
                </h3>
              </div>
              <form action="{{route('front-faqs.update',$faq->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
              <!-- /.card-header -->
              <div class="card-body pad">
                
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                              <label for="">Question</label>
                            <textarea name="question" rows="4" class="form-control">{{$faq->question}}</textarea>
                              @error('question')
                                  <p class="text-danger mt-2 mb-0 text-sm">{{$message}}</p>
                              @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                              <label for="">Answer</label>
                              <textarea name="answer" rows="5" class="form-control">{{$faq->answer}}</textarea>
                              @error('answer')
                                  <p class="text-danger mt-2 mb-0 text-sm">{{$message}}</p>
                              @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <label for="">Is Active</label>
                            <div class="form-group clearfix">
                                
                                <div class="icheck-success d-inline">
                                  <input type="checkbox" {{$faq->active == 1?'checked':''}}  name="active" id="checkboxSuccess1">
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