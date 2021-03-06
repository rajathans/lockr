<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand navbar-brand-centered" href="/home" style="color:salmon; text-decoration:none; font-family:archive; font-weight:bold; font-size:20px;">Lock<span style="color:white;">R</span></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav" style="font-weight:bold;">
					<li><a href="/about">About</a></li>
					<li><a href="/future">Future</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="/auth/login">Login</a></li>
						<li><a href="/auth/register">Register</a></li>
					@else
						<li><a href="/home" style="font-weight:bold;">Home</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #f8f8f8; background-color:DarkSlateGray;" role="button" aria-expanded="false">Signed in as <b>{{ Auth::user()->name }}</b> <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/profile">Profile</b></a></li>
								<li><a href="/help">Help</a></li>
								<li><a style="color:salmon;" href="/auth/logout"><b>Logout</b></a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
