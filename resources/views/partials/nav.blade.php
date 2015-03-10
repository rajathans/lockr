<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/" style="color:white; background-color: crimson; font-weight:bold;">Lockr</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="/about">About</a></li>
					<li><a href="#">Donate</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="/auth/login">Login</a></li>
						<li><a href="/auth/register">Register</a></li>
					@else
						<li><a href="/upload">Upload</a></li>
						<li><a href="/download">Download</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white; background-color: DarkSlateGray;" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/home">Home</a></li>
								<li><a href="/profile">Profile</a></li>
								<li><a href="/privacy">Privacy</a></li>
								<li><a href="/help">Help</a></li>
								<li><a href="/auth/logout">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
