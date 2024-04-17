<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
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
        <h1 style="color:orange;font-size:40px;font-weight:bold;letter-spacing:2px">All Galeries</h1>

        <div class="row row-cols-1 row-cols-md-2 g-4 mt-4">
            @foreach ($galeries as $galery)
                
            <div class="col">
              <div class="card">
                <img src="{{'GaleryImage/'.$galery->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 20px;color:orange">Name : {{$galery->name}}</h5>
                  <p class="card-text">Description : {{$galery->description}}</p>
                  <span style="color: green">Price : {{$galery->price}} MAD</span>
                  <div class="mt-3">
                    <a href="{{url('update_galery',$galery->id)}}" class="btn btn-primary">Update</a>
                    <a  href="{{url('delete_galery',$galery->id)}}" onclick="confirmation(event)" class="btn btn-danger">Delete</a>

                  </div>
                </div>
              </div>
            </div>

            @endforeach

           
            
            
          </div>
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
            title:"Are You Sure Wanna Delete This Galery ?",
            text:"You Won't See It Again ! ",
            icon:'warning',
            buttons:true,
            dangerMode:true
        }).then((willCancel)=>{
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

