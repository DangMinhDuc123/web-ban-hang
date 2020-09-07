
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/dashboard/">
    <title>Dashboard Template for Bootstrap</title>
    <link href="{{asset('theme_admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('theme_admin/css/dashboard.css')}}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
                <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" placeholder="Search...">
                </form>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li class="{{ \Request::route()->getName() == 'admin.dashboard' ? 'active' : '' }}">
                        <a href="{{ route('admin.dashboard') }}">Trang Tổng Quan</a>
                    </li>
                    <li class="{{ \Request::route()->getName() == 'admin.get.list.category' ? 'active' : '' }}"><a href="{{route('admin.get.list.category')}}">Danh Mục</a></li>
                    <li class="{{ \Request::route()->getName() == 'admin.get.list.product' ? 'active' : '' }}"><a href="{{route('admin.get.list.product')}}">Sản Phẩm</a></li>
                    <li><a href="#">Tin Tức</a></li>
                    <li class="{{ \Request::route()->getName() == 'admin.get.list.transaction' ? 'active' : '' }}"><a href="{{ route('admin.get.list.transaction') }}">Đơn Hàng</a></li>
                    <li class="{{ \Request::route()->getName() == 'admin.get.list.user' ? 'active' : '' }}"><a href="{{ route('admin.get.list.user') }}">Thành Viên</a></li>
                </ul>

            </div>
            
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
              @if(\Session::has('success'))
                <div class="alert alert-success">
                  <strong>Thành Công !</strong> {{ Session::get('success') }}
              </div>
              @endif
               @if(\Session::has('danger'))
              <div class="alert alert-danger">
                  <strong>Thất Bại !</strong> {{ Session::get('danger') }}
              </div>
              @endif
              @yield('content')

          </div>
      </div>
  </div>
        <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="{{asset('theme_admin/js/jquery.min.js')}}"><\/script>')</script>
            <script src="{{asset('theme_admin/js/bootstrap.min.js')}}"></script>
            <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
            <script src="{{asset('theme_admin/js/holder.min.js')}}"></script>
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <script src="{{asset('theme_admin/js/ie10-viewport-bug-workaround.js')}}"></script>
            <script>
                function readURL(input) {
                  if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                      $('#out_img').attr('src', e.target.result);
                  }
                        reader.readAsDataURL(input.files[0]); // convert to base64 string
                    }
                }

                $("#input_img").change(function() {
                 readURL(this);
             });
         </script>
         
         @yield('script')
     </body>
     </html>