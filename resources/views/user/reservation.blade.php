<section id="reservation" class="templatemo-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-uppercase text-center">Table Reservation </h2>
                <hr>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-8">

                @if (session()->has('success'))
                <div class="alert alert-success">
                    {{session()->get('success')}}

                    <button class="close">X</button>

                </div>
                    
                @endif
                <form action="{{url('reservation_table')}}" method="POST" role="form">
                    @csrf
                    <div class="col-md-6 col-sm-6">
                        <input name="name" type="text" class="form-control" id="name" maxlength="60" placeholder="Name">
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                        <input name="phone" type="number" class="form-control" id="phone" placeholder="phone">
                        <input name="numberGuest" type="number" class="form-control" id="numberGuest" placeholder="number Of Guest">
                        <input name="date" type="date" class="form-control" id="date" placeholder="">
                        <input name="time" type="time" class="form-control" id="time" placeholder="Time">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <textarea class="form-control" rows="15" placeholder="Message" name="message"></textarea>
                    </div>
                    <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
                        <input name="submit" type="submit" class="form-control" id="submit" value="Make Reservation">
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-4 col-sm-4">
                <h3 class="padding-bottom-10 text-uppercase">Visit our shop</h3>
                <p><i class="fa fa-map-marker contact-fa"></i> SIDI OTHMANE RUE NILL BLOC 14 , CASABLNCA </p>
                <p>
                    <i class="fa fa-phone contact-fa"></i> 
                    <a href="tel:010-020-0340" class="contact-link">0522134241</a>, 
                    <a href="tel:080-090-0660" class="contact-link">0609153426</a>
                </p>			
                <p><i class="fa fa-envelope-o contact-fa"></i> 
                    <a href="mailto:hello@company.com" class="contact-link">pizza@gmail.com</a></p>
            </div>
            <div class="col-md-4 col-sm-4">
                <h3 class="text-uppercase">Opening hours</h3>
                <p><i class="fa fa-clock-o contact-fa"></i> 7:00 AM - 11:00 PM</p>
                <p><i class="fa fa-bell-o contact-fa"></i> Monday to Friday and Sunday</p>
                   
              </div>
            <div class="col-md-4 col-sm-4">
                <div class="google_map">
                    

                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d106426.94269936334!2d-7.566131199999999!3d33.5314944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sma!4v1711388808795!5m2!1sfr!2sma" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                </div>
            </div>
        </div>
    </div>
</section>