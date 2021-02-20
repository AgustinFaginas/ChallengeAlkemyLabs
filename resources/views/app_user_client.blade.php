
@extends('layout')
@section('content')

<a href="{{route('endSession')}}">CERRAR SESION</a>
<a href="{{route('apps.to_buy')}}">Apps para comprar</a>
<ul>
		
		@forelse($apps_user ?? '' as $appUsuario)

			<li> <a href="{{route('apps.show',$appUsuario)}}">{{ $$appUsuario->name }}</a></li>
		
		@empty
		 <li> No hay proyectos para mostrar </li>
		@endforelse

	</ul>

	@endsection