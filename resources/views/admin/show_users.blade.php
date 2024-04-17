<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->

  <!-- sweet alert  -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Pizza Admin </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="template/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="template/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="template/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="template/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          
          <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/royalui/"><i class="ti-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="ti-close text-white me-0"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- partial:partials/_navbar.html -->
   

    @include('admin.navbar')

    <!-- partial -->

    <div class="container-fluid page-body-wrapper">


      <!-- partial:partials/_sidebar.html -->
      

     @include('admin.sidebar')

      <!-- partial -->
     

      <div class="p-4">

        <h1 style="color: orange;font-size:40px;letter-spacing:2px;font-weight:bold">All Users</h1>

        <table class="table mt-4 " border="1">

            <thead class="table-success">

                <tr>
                    <th> Full Name</th>
                    <th> Email Adress</th>
                    <th> User Type </th>
                    <th> Action </th>

                </tr>
            </thead>

            <tbody>
                @forelse ($users as $user)

                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->userType}}</td>
                    @if ($user->userType=='0')
                    <td><a href="{{url('delete_user',$user->id)}}" onclick="confirmation(event)" class="btn btn-danger">Delete</a></td>
                    @else
                    <td><button style="cursor: default" class="btn btn-success">Can't Delete </button></td>

                        
                    @endif

                </tr>
                    
                @empty
                <tr>
                    <td colspan="4">No Users Found </td>
                </tr>
                    
                @endforelse

            </tbody>



        </table>



      </div>











      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->

  <script type="text/javascript">

  function confirmation(ev){
    ev.preventDefault();
    var urlToRedirect=ev.currentTarget.getAttribute('href');

    swal({
        title:'Sure Wanna Delete This User ?',
        text:"You Can't See This User Again !!",
        icon:'warning',
        buttons:true,
        dangerMode:true,
    })

    .then((willCancel)=>{
        if(willCancel){
            window.location.href=urlToRedirect;
        }
    })
  }



  </script>


  <script src="template/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="template/vendors/chart.js/Chart.min.js"></script>
  <script src="template/js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="template/js/off-canvas.js"></script>
  <script src="template/js/hoverable-collapse.js"></script>
  <script src="template/js/template.js"></script>
  <script src="template/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="template/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

