<html>
   <body>
    @extends('layouts.page')
    @section('content')
    	@foreach ($locations as $location)
    	  <p>{{$location->value}}</p>
    	  <ol>
    		@foreach($location->stories as $story)
    			<li> {{ $story->title }} </li>
    		@endforeach
    	  </ol>
    	@endforeach
    @endsection
   </body>
</html>
