@extends('layout') 


@section('content')
<h1> Proyectos </h1>
<a href="{{route('endSession')}}">CERRAR SESION</a>



<ul>
		
		@forelse($apps ?? '' as $apps_to_buy_developer)

			<li> <a href="{{route('apps.show',$apps_to_buy_developer)}}">{{ $apps_to_buy_developer->name }}</a></li>
		
		@empty
		 <li> No hay proyectos para mostrar </li>
		@endforelse

		{{$apps->links()}}

	</ul>

	@endsection