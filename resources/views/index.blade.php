<h1> Categorias</h1>
<a href="login">LOGIN</a>
<ul>
		
		@forelse($category ?? '' as $proyectoItem)

			<li> <a href="{{route('welcome.show_category',$proyectoItem)}}"> {{ $proyectoItem->name }} </a></li>
		

		@empty
		 <li> No hay proyectos para mostrar </li>
		@endforelse

		

	</ul>


