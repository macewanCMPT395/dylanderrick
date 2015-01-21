@extends ('layout.default')
@section('content')
     <h1>All Users</h1>

     @foreach($users as $user)

          <li> {{ link_to("users/{$user->username}", $user->username) }} </li>

     @endforeach
@stop


@section('footer')

	<h1>FOOOTIN</h1>

@stop