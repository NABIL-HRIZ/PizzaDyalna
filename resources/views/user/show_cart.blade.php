<!DOCTYPE html>
<html lang="en">
<head>
<base href="/public">

	
@include('user.head')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body id="show_cart" data-spy="scroll" data-target=".navbar-collapse">

    @if (session()->has('success'))*
    
    <div class="alert alert-success" style="margin-top: 50px">
        {{session()->get('success')}};
        <button class="close">X</button>

    </div>
        
    @endif

	<!-- start navigation -->

	@include('user.navigation')
	
	<!-- end navigation -->


	<!-- start cart-->
    <div style="margin-top: 150px">
        <h2 style="font-size:20px" class="text-center text-uppercase">My Cart</h2>

        <table class="table mt-5" border="1">

            <thead class="table-primary" style="background-color: rgb(165, 214, 165);font-size:15px">
                <tr>
                    <th>Food Name </th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>


                <form action="{{url('upload_product_infos')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                @forelse ($items as $item)
                <tr style=font-size:18px>
                    <td>
                        <input type="text" name="foodName[]" value='{{$item->name}}' hidden=''>
                        {{$item->name}}
                    
                    </td>
                    <td>
                        <input type="text" name="quantity[]" value='{{$item->quantity}}' hidden=''>
                        {{$item->quantity}}
                    
                    </td>
                    <td>
                        <input type="number" name="price[]" value='{{$item->price * $item->quantity}}' hidden=''>
                        {{$item->price * $item->quantity}}
                    
                    </td>

                </tr>                    
                @empty
                    <tr>
                        <td colspan="3">No Pizza Food Selected </td>
                    </tr>
                @endforelse
                @foreach ($select_item as $item)
                <tr style="position: relative;top:-210px;right:-950px">
                    <td>
                        <a href="{{url('delete_product',$item->id)}}" class="btn btn-danger">Remove</a>
                    </td>
                </tr>
                    
                @endforeach

            </tbody>

        </table>
    </div>
    <div class="text-center" style="margin-top:-200px">
        <button class="btn btn-primary" id="order" type="button" style="background-color: blue">Order Now ? </button>
    </div>

    
    <div id="appear" class="text-center mt-4" style="display: none">
       
            <div class="row mb-3">
              <label for="inputName" class="col-sm-2 col-form-label">Full Name </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" name="name">
              </div>
            </div>
            <div class="row mb-3">
              <label for="" class="col-sm-2 col-form-label">Phone</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="inputPhone" name="phone">
              </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputAdress" name="address">
                </div>
              </div>
            
              <button type="" class="btn btn-success mt-4" style="background-color:green">Order Confirm</button>
               <button class="btn btn-danger mt-3" id="close"> Close</button>
            </form>
          
          
            
             

    </div>


	
	<!-- end cart -->

	<!-- start footer --> 
	

	<!-- end footer -->

	<!--Scripts -->

	<!--After add cdn jequery from W3scholl google cdn -->    
 
    <script type="text/javascript">

    $('#order').click(
        function(){
            $('#appear').show();
        }
    )
    $('#close').click(
        function(){
            $('#appear').hide();
        }
    )

    </script>

	@include('user.script')

</body>
</html>