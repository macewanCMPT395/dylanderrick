@extends ('layout.default')
@section('content')
	<script>
	$(document).ready(function(){

		$(".ListUser").click(function(e){
			e.preventDefault();

			var href = $(this).find('a');
			(function(item){
				$.get($(item).attr('href'), function(data){
					$(".userData").html(data);
				});
			})(href);

		});




	});
	</script>



     <h1>All Users</h1>

     @foreach($users as $user)

          <li class="ListUser" id={{$user->username}}>
          	{{ link_to("users/{$user->username}", $user->username) }}
          </li>

     @endforeach

     <div class="userData"></div>



@stop


@section('footer')

	<h1>FOOOTIN</h1>

@stop
