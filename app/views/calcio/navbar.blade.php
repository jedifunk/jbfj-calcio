
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="/"><i class="fa fa-futbol-o fa-fw"></i> <strong>Calcio Search</strong></a>
		    </div>
					
			{{ Form::open(['action' => 'CalcioController@leagueChoice', 'class' => 'navbar-form navbar-right']) }}
			
				<div class="form-group">
					{{ Form::select('league_choice', array_pluck($league_list, 'caption', 'id'), 354, ['class' => 'form-control']) }}
				</div>
				
				<div class="form-group">
					{{ Form::submit('Choose League', ['class' => 'btn btn-primary']) }}
				</div>		
				
			{{ Form::close() }}
		
		</div>
	</nav>
	
