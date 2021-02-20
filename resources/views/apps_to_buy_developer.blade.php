
<h1> Proyectos </h1>
<a href="{{route('endSession')}}">CERRAR SESION</a>



<ul>
		
		@forelse($apps ?? '' as $proyectoItem)

			<li> <a href="{{route('apps.show',$proyectoItem)}}">{{ $proyectoItem->name }}</a></li>
		
		@empty
		 <li> No hay proyectos para mostrar </li>
		@endforelse

		{{$apps->links()}}

	</ul>