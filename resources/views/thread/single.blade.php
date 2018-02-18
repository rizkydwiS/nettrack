@extends('layouts.front')
@section('content')

<!--Main Thread Content-->
<div class="main">
	<h3>{{$thread->subject}}</h3>
</div>
<div class="pull-right">
	<span class="label label-default">All Thread</span>
	<span class="label label-success">Category</span>
	<span class="label label-danger">Edited</span>
</div><br><br>
<div class="progress">
		<div class="progress-bar" style="width: 100%;"></div>
</div>
<div class="main">
	<div class="thread-details well">
	{!! \Michelf\Markdown::defaultTransform($thread->thread) !!}
	</div>
</div>
<hr>
<br>
<!---->

<!--Edit and delete Thread Authorization-->
@if(auth()->user()->id == $thread->user_id)	
	<div class="action">
		<a href="{{route('thread.edit',$thread->id)}}" class="btn btn-info btn-xs">Edit</a>
		<form action="{{route('thread.destroy',$thread->id)}}" method="POST" class="inline-it">
			{{csrf_field()}}
			{{method_field('DELETE')}}
			<input class="btn btn-xs btn-danger" type="submit" value="Delete" >
		</form>
	</div>
@endif
<!---->

<br>

<!--Comment list-->
@foreach($thread->comments as $comment)
<div class="comment-list">
	<h4>{!! \Michelf\Markdown::defaultTransform($comment->body) !!}</h4>
	<blockquote>
	<small>{{$comment->user->name}}</small>
	</blockquote>
<!---->
			

<!--Update and Delete Comment-->
@if(auth()->user()->id == $comment->user_id)
<div class="action">
	<a class="btn btn-primary btn-xs"  data-toggle="modal" href="#{{$comment->id}}">Edit</a>
	<div class="modal fade" id="{{$comment->id}}">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
					</button>
					<h4 class="modal-title">Edit</h4>
				</div>
				<div class="modal-body">
					<div class="comment-form">
						<form action="{{route('comment.update',$comment->id)}}" method="post" role="form">
							{{csrf_field()}}
							{{method_field('put')}}
								<div class="form-group">
									<textarea class="form-control" rows="3" name="body" id="textArea" placeholder="">{{$comment->body}}</textarea>
								</div>									
									</div>
								</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-primary">Comment</button>
							</div>
						</form>
				</div>
				</div>
			</div>
			<form action="{{route('comment.destroy',$comment->id)}}" method="POST" class="inline-it">
				{{csrf_field()}}
				{{method_field('DELETE')}}
				<input class="btn btn-xs btn-danger" type="submit" value="Delete" >
			</form>
		</div>
	</div>
	@endif
	@endforeach
	
<br>

<!--Comment Form-->
<div class="comment-form">
	<form action="{{route('threadcomment.store',$thread->id)}}" method="post" role="form">
		{{csrf_field()}}
			<div class="form-group">
				<textarea class="form-control" rows="3" name="body" id="textArea" placeholder="Do you have an answer or opinion?"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Comment</button>
	</form>
</div>
	<!---->	

@endsection