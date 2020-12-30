@extends('admin.layouts.app')
@push('style')
<link rel="stylesheet" href="{{asset('admin-asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('admin-asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">    
@endpush
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-header">
                      <h3 class="card-title">View All Faqs </h3>
                    <a class="btn btn-success btn-sm float-right" href="{{route('front-faqs.create')}}"><i class="fa fa-plus"></i></a>
                    <button class="btn btn-primary btn-sm float-right mr-2" id="sortMenu"><i class="fa fa-sort"></i></button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-striped" id="example1">
                            <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Active</th>
                                    <th>Order</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($frontfaq as $key=> $item)
                                    <tr>
                                    <td>{{++$key}}</td>
                                        <td>{{$item->question}}</td>
                                        <td>{{$item->answer}}</td>
                                        <td>{{$item->active == 1?'active':'deactive'}}</td>
                                        <td>{{$item->faq_order}}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{route('front-faqs.edit',$item->id)}}"><i class="fa fa-edit"></i></a>
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
    </section>
</div>
@include('admin.front-faq._modal')
@endsection
@push('scripts')
<script src="{{asset('admin-asset/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin-asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin-asset/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin-asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true
    });
  });
  $(document).on('click','#sortMenu',function(){
      $('#frontPagesModal').modal('show').find('.modal-content').html(`<div class="modal-body">
            <div class="overlay text-center"><i class="fas fa-2x fa-sync-alt fa-spin text-light"></i></div>
        </div>`);
        $.ajax({
            method:'get',
            url:'{{route("faqs.sort")}}',
            dataType: 'html',
            success:function(res){
                console.log(res);
                $('#frontPagesModal').find('.modal-content').html(res);
                $('.todo-list').disableSelection();
                $('.todo-list').sortable({
                    placeholder         : 'sort-highlight',
                    handle              : '.handle',
                    forcePlaceholderSize: true,
                    zIndex              : 999999,
                    update: function(event, ui) {
                        // console.log(ui.item);
                        $.ajax({
                            url: "/admin/front-faqs/sort",
                            type: "POST",
                            data:  new FormData(document.forms.namedItem("faqSortForm")),
                            contentType: false,
                            cache: false,
                            processData:false,
                            dataType:'JSON',
                            success:function(res){
                            },
                            error:function(jhxr,status,err)
                            {
                                console.log(jhxr);
                            },
                            complete:function()
                            {

                            }
                        });
                    }
                });
                
            }
        })
  })
</script>
@endpush
