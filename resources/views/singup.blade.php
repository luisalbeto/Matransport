<x-layouts.app      
title="SingUp" 
meta-description="SingUp meta description">
<h1>SingUp</h1>

@foreach ($posts as $posts)


  <h2> {{ $posts['title'] }} </h2> 


@endforeach
 



</x-layouts.app>
