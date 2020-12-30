<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @include('admin.partial.styles')
  @stack('style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  @include('admin.partial.changepassword')
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#" role="button" id="btnShowCP" title="change password">
          <i class="fas fa-key"></i>
        </a>
      </li>
      <li class="nav-item" title="logout">
        <a class="nav-link" href="" title="logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();" role="button">
          <i class="fas fa-sign-out-alt"></i>
        </a>
        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  @include('admin.partial.aside')

  @yield('content')

  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="{{route('home')}}" target="_blank">Alphaasigma</a>.</strong>
    All rights reserved.
    {{-- <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div> --}}
  </footer>

</div>
<!-- ./wrapper -->
@include('admin.partial.scripts')
@stack('scripts')
<script>
  function changePasswordErrorMsg(msg,container) {
      $(container).html('<ul style="list-style:none" class="pl-0"></ul>');
      $(container).css('display','block');
      $.each( msg, function( key, value ) {
         $(container).find("ul").append('<li>'+value+'</li>');
      });
   }
  //CHANGE pASSWORD modal Open
  $('#btnShowCP').click(function(){
      $('#newpassword_confirmation').val('');
      $('#newpassword').val('');
      $('#oldpassword').val('');
      $('#changePassError').css('display','none');
      $('#changePasswordModal').modal('show');
    })
    $('#changePassword').submit(function(e){
      e.preventDefault();
      $.ajax({
        url: "{{route('admin.change.password')}}",
        type: "POST",
        data:  new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        dataType:'JSON',
        beforeSend : function()
        {

        },
        success: function(data)
        {
            if($.isEmptyObject(data.error)){
                if(data.status)
                {
                  $('#changePasswordModal').modal('hide');
                }
            }else{
                changePasswordErrorMsg(data.error,"#changePassError");
            }
        }, error:function(jhxr,status,err){
            console.log(jhxr);
        },
        complete:function(){
        }   
        });
    })
</script>
</body>
</html>
