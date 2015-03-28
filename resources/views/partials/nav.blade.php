<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/" style="font-family: archive; color:teal; font-size:20px;">Lock<span style="color:tomato;">r</span></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="/about">About</a></li>
					<li><a href="/donate">Donate</a></li>
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
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white; font-weight:bold;background-color: DarkSlateGray;" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/home">Home</a></li>
								<li><a href="/profile">Profile</a></li>
								<li><a href="/privacy">Privacy</a></li>
								<li><a href="/help">Need help?</a></li>
								<li><a href="/auth/logout">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
