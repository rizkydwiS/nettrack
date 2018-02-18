	<div class="list-group">
		
		@forelse($threads as $thread)

	<div href="{{route('thread.show',$thread->id)}}" class="panel panel-default">
  		<div class="panel-heading">
  			<h4><a href="{{route('thread.show',$thread->id)}}">
  					<p class="text-info"><i class="fa fa-question">&nbsp;&nbsp;
  					</i>{{str_limit($thread->subject,90)}}</p>
  				</a>
  			</h4>
  		</div>
  		<div class="panel-body">
    		{!! \Michelf\Markdown::defaultTransform(str_limit($thread->thread,80)) !!}
  		</div>
	</div>

		@empty
			<h5>No threads</h5>
		@endforelse

	</div>

