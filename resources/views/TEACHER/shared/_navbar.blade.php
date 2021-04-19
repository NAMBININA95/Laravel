<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">WebSiteName</a>
		</div>
		<ul class="nav navbar-nav">
			<li class="active"><a href="#">Home</a></li>
			<li><a href="#">Page 1</a></li>
			<li><a href="#">Page 2</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li>
				<p class="navbar-btn">
					<a href="{{ route('event-brote.create') }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Nouveau Evenement</a>
				</p>

			</li>
			{{--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sig n Up</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>--}}
		</ul>
	</div>
</nav>
