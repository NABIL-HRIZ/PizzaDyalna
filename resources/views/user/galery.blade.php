<section id="gallery" class="templatemo-section templatemo-light-gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center text-uppercase">Gallery</h2>
                <hr>
            </div>
            
            
           
          @foreach ($galeries as $galery)
          <form action="{{url('addCart',$galery->id)}}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="col-md-6 col-sm-6">
                <div class="gallery-wrapper">
                    <img src="{{'galeryImage/'.$galery->image}}" class="img-responsive gallery-img" alt="Pizza 5">
                    <div class="gallery-des">
                        <h3>{{$galery->name}}</h3>
                        <h5>{{$galery->description}}</h5>
                        <span style="color: green;font-size:20px">{{$galery->price}} MAD </span>
                        <div>
                            <input type="number" placeholder="Quantity?" style="width:79px;height:30px" name="quantity" min="1" value="1">
                            <button type="submit" class="btn btn-primary" style="color: #000;hover:color:#fff">Add To Cart</a>

                        </div>
                    </div>
                </div>
            </div>	


          </form>
              
           
            
            @endforeach
        </div>
    </div>
</section>