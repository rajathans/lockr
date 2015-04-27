<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand navbar-brand-centered" href="/" style="font-family: archive; color:IndianRed; font-size:22px; ">Lock<span style="color:crimson;">r</span></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav" style="font-weight:bold;">
					<li><a href="/about">About</a></li>
					<li><a href="/help">Help</a>
					<!--<li><a href="/donate">Donate</a></li>-->
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="/auth/login">Login</a></li>
						<li><a href="/auth/register">Register</a></li>
					@else
						<!--<form class="navbar-form navbar-left" role="search">
						  <div class="form-group">
						    <input type="text" class="form-control" style="width:100%;" placeholder="Search files">
						  </div>
						</form>-->
						<li><a href="/home">Home</b></a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-weight:bold; color: #f8f8f8; background-color:teal" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/profile">Profile</b></a></li>
								<li><a href="/privacy">Privacy</b></a></li>
								<li><a  style="color:crimson;" href="/auth/logout">Logout</b></a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
