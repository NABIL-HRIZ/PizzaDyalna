<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<a href="#home" class="navbar-brand smoothScroll"><strong>PIZZA DYALNA</strong></a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#home" class="">HOME</a></li>
					<li><a href="#about" class="">ABOUT</a></li>
					<li><a href="#gallery" class="">GALLERY</a></li>
					<li><a href="#ourChefs" class="">OUR_CHEFS</a></li>
					<li><a href="#reservation" class="">RESERVATION</a></li>


					@if (Route::has('login'))
					@auth

					
					<li><a href="{{url('show_cart',Auth::user()->id)}}" class="smoothScroll">cart[{{$count}}]</a></li>
					
			


						<x-app-layout>
						</x-app-layout>
					
					
												
					@else
					<li><a href="{{url('login')}}" class="smoothScroll">Login</a></li>
					<li><a href="{{url('register')}}" class="smoothScroll">Register</a></li>
                    @endauth
					@endif
					
				</ul>
			</div>
		</div>
	</div>