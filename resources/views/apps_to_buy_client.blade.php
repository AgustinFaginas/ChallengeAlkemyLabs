

@extends('layout') 


@section('content')
APLICACIONES USUARIO

<a href="{{route('endSession')}}">CERRAR SESION</a>
<ul>
		
		@forelse($apps_user ?? '' as $apps_to_buy)

			<li> <a href="{{route('apps.show',$apps_to_buy)}}">{{ $apps_to_buy->name }}</a></li>
		
		@empty
		 <li> No hay proyectos para mostrar </li>
		@endforelse

	</ul>
	@endsection