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

    @include('sweetalert::alert')

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
     

      <div class="table-responsive p-4">
        <h1 style="font-size: 40px;font-weight:bold;letter-spacing:2px;color:orange">All Reservations</h1>

       
            <table class="table mt-4" border="1">
                    
                <thead class="table-primary">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>NumberGuest</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Action</th>
    
                    </tr>
                  
    
                </thead>
    
                <tbody>
                    @forelse ($reservations as $reservation)
                    <tr>
                        <td>{{$reservation->name}}</td>
                        <td>{{$reservation->email}}</td>
                        <td>{{$reservation->phone}}</td>
                        <td>{{$reservation->numberGuest}}</td>
                        <td>{{$reservation->date}}</td>
                        <td>{{$reservation->time}}</td>
                        <td>{{$reservation->message}}</td>
                        <td>{{$reservation->status}}</td>
                        <td>
                            <a href="{{url('accept_reservation',$reservation->id)}}" class="btn btn-success">Accept</a>
                            <a href="{{url('delete_reservation',$reservation->id)}}" onclick="confirmation(event)" class="btn btn-danger">Reject</a>
                            <a href="{{url('sendEmail',$reservation->id)}}" class="btn btn-primary">Contact</a>
    
                        </td>
    
    
                    </tr>
                        
                    @empty
                        <tr>
                            <td colspan="8">No Reservation now ! </td>
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
            title:'Sure Wanna Delete This Table Reservation',
            text:"Please Text Him Or Her About This Reject ",
            icon:'warning',
            buttons:true,
            dangerMode:true,
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

