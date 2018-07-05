	<div class="banner">
		<div class="header">
			<div class="container">
				<div class="header-left">
					<div class="w3layouts-logo">
						<h1>
							<a href="index.html"><span>Share</span> Travel</a>
						</h1>
					</div>
				</div>
				<div class="header-right">
					<div class="w3-header-top">
					</div>
					<div class="w3-header-bottom">
						<div class="top-nav">
							<nav class="navbar navbar-default">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<ul class="nav navbar-nav">
										<li><a href="{{route('awal')}}"><i class="glyphicon glyphicon-home"></i>&nbsp&nbspHome</a></li>
										<li><a href="{{route('destinasi')}}"><i class="glyphicon glyphicon-map-marker"></i>&nbsp&nbspDestinasi</a></li>	
										<li>@if (Route::has('login'))
                    							@auth
                        						<a href="{{ route('home') }}"><i class="fa fa-pencil"></i>&nbsp&nbspMode Penulis</a>
		                    					@else
		                        				<a href="{{ route('login') }}"><i class="fa fa-unlock-alt"></i>&nbsp&nbspLogin</a>
		                    					@endauth
		            						@endif
		            					</li>
		            					<li>
		            						<form action="{{route('search')}}" method="get">
		            							@csrf
		            							<input name="search" value="" type="text" placeholder="Search">
		            						</form>
		            					</li>
										<!-- <li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Codes<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a class="hvr-bounce-to-bottom" href="icons.html">Icons</a></li>
												<li><a class="hvr-bounce-to-bottom" href="typography.html">Typography</a></li>          
											</ul>
										</li>			 -->					
									</ul>	
									<div class="clearfix"> </div>
								</div>	
							</nav>		
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>