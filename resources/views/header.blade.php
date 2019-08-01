<!-- Header -->

<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">free shipping on all u.s orders over $50</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<!-- Currency / Language / My Account -->

								<li class="currency">
									<a href="#">
										usd
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="currency_selection">
										<li><a href="#">Riels</a></li>
									</ul>
								</li>
								<li class="language">
									<a href="#">
										English
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="language_selection">
										<li><a href="#">Khmer</a></li>
									</ul>
								</li>
								<li class="account">
									<a href="#">
										My Account
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										<li><a href="{{URL("/login")}}"><i class="fa fa-sign-in" aria-hidden="true"></i>Log in</a></li>
										<li><a href="{{URL("/register")}}"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#">Chuol</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="{{ url('/') }}">home</a></li>
								<li><a href="{{ url('/catergories') }}">Categories</a></a></li>
								<li><a href="{{ url('/contact') }}">contact</a></li>
							</ul>
							<ul class="navbar_user">
								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
							</ul>
						
									<div class="row">
											<div class="col-lg-12 col-sm-12 col-12 main-section">
												<div class="dropdown">
													<button type="button" class="btn btn-info" data-toggle="dropdown">
														<i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{count(session('cart'))}}</span>
													</button>
													
													<div class="dropdown-menu" style="width:20px, height:20px">
														<div class="row total-header-section">
															<div class="col-lg-6 col-sm-6 col-6">
																<i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{count(session('cart'))}}</span>
															</div>
									
															
														
														<div class="row">
															<div class="col-lg-12 col-sm-12 col-12 text-center checkout">
																<a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>				
								</div>
				




							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	

	</header>