@extends('app')
@section('content') <div class="container">
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">Edit Article</div>
			<div class="panel-body">

				<form action="{{ URL('admin/articles/'.$articles->id) }}" method="POST" enctype="multipart/form-data">
					<input name="_method" type="hidden" value="PUT">
					<input type="hidden" name="_token" value="{{ csrf_token() }}"> <input type="text" name="title" class="form-control"
					required="required" value="{{ $articles->title }}"> <br>
					<textarea name="body" rows="10" class="form-control" required="required" id="richHtml"><?php echo $articles->body ?></textarea>
					<br>
					<input type="file" name="image" size="50">
                    <br>
					<button class="btn btn-lg btn-info">Edit Article</button> </form>
				</div>
			</div>
		</div>
	</div>
	</div> @endsection