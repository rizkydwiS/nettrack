	<div class="list-group">
		
		@forelse($threads as $thread)

	<div href="{{route('thread.show',$thread->id)}}" class="panel panel-default">
  		<div class="panel-heading">
  			<h4><a href="{{route('thread.show',$thread->id)}}"><i class="fa fa-question"></i> {{($thread->subject)}}</a></h4>
  		</div>
  		<div class="panel-body">
    		{!! \Michelf\Markdown::defaultTransform($thread->thread,35) !!}
  		</div>
	</div>

		@empty
			<h5>No threads</h5>
		@endforelse

	</div>

