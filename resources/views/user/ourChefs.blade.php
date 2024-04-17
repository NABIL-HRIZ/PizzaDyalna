<section id="ourChefs" class="templatemo-section templatemo-light-gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center text-uppercase">Our Chefs </h2>
                <hr>
            </div>
            @foreach ($chefs as $chef)
                
            <div class="col-md-4 col-sm-4">
                <div class="gallery-wrapper">
                    <img src="{{'chefImage/'.$chef->image}}" class="img-responsive gallery-img" alt="Pizza 1">
                    <div class="gallery-des">
                        <h3>{{$chef->name}} </h3>
                        <h5>{{$chef->description}}</h5>
                    </div>
                </div>
            </div>	
           
            @endforeach

           
           
            		
        </div>
    </div>
</section>