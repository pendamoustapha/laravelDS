@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">{{ trans('etudiant.titremodification')}}</div>

				<div class="panel-boby">
				
				<h4>{{$etudiant->nom}}</h4>
				<h4>{{$etudiant->prenom}}</h4>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection