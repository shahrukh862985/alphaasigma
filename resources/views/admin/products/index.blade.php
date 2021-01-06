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
                      <h3 class="card-title">View Products </h3>
                    <a class="btn btn-success btn-sm float-right" href="{{route('products.create')}}"><i class="fa fa-plus"></i></a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-striped" id="example1">
                            <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Active</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $key=> $item)
                                    <tr>
                                    <td>{{++$key}}</td>
                                        <td>{{$item->title}}</td>
                                        <td><img src="{{url('products/'.$item->image_name)}}" alt="" height="80" width="120" srcset=""></td>
                                        <td><?= $item->active == 1?"<span class='badge badge-primary'>active</span>":"<span class='badge badge-danger'>deactive</span>"?></td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{route('products.edit',$item->id)}}"><i class="fa fa-edit"></i></a>
                                            <button class="btn btn-danger btn-sm deleteProduct" data-value="{{$item->id}}"><i class="fa fa-trash"></i></button>
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
  $(document).on('click','.deleteProduct',function(){
      id = $(this).attr('data-value');
    if(confirm("are you sure you want to delete this product"))
    {
        $.ajax({
            url: "/admin/products/"+id,
            type: "DELETE",
            dataType:'JSON',
            success:function(res){
                window.location.reload();
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
  
</script>
@endpush
