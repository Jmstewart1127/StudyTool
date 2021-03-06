@extends('layouts.app') @section('content')

<div class="container">
	<div class="col-sm-offset-2 col-sm-8">
		<div class="panel panel-default">
			@if (count($groups) > 0)
			<div class="panel panel-default">
				<div class="panel-heading">
					@foreach($groups as $group)
					<h3>{{ $group->group_name }}</h3>
				</div>

				<div class="panel-body">
					<table class="table table-striped task-table">
						<thead>
							<th>Rating</th>
							<th>Position</th>
							<th>Screening?</th>
						</thead>
						<tbody>
							@foreach ($quizzes as $quiz) @if (Auth::guest())
							<tr>
								<td>
									<form action="{{ url('rating/vote/' .$position->id) }}" method="POST">
										{{ csrf_field() }}
										<button id="vote" type="submit" class="btn btn-default rating" title="Login to vote" disabled>
											<i class="fa fa-btn fa-thumbs-o-up">
												<div class="rating-number">
													{{ $quiz->quiz_name }}
												</div>
											</i>
										</button>
									</form>
									<td class="table-text">
										<div>{{ $quiz->quiz_name }}</div>
									</td>
							</tr>
							@else
							<tr>
								<td>
									<form action="{{ url('rating/vote/' .$position->id) }}" method="POST">
										{{ csrf_field() }}
										<button type="submit" class="btn btn-default rating">
											<i class="fa fa-btn fa-thumbs-o-up">
												<div class="rating-number">
													{{ $quiz->quiz_name }}
												</div>
											</i>
										</button>
									</form>
								</td>
								<td class="table-text">
									<div>
										{{ $quiz->quiz_name }}
									</div>
								</td>
							</tr>
							@endif @endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<form action="{{ url('positions/create/'.$businesses->id) }}" method="post">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="task-name" class="col-sm-6 control-label">Position Name</label>

				<div class="col-sm-6">
					<input type="text" name="positionName" id="task-name" class="form-control">
				</div>
			</div>

			<div class="form-group">
				<label for="task-name" class="col-sm-6 control-label">Screening Required?</label>
			</div>

			<div class="radio form-group">
				<label for="task-name" class="col-sm-8 control-label">Yes
					<input type="radio" name="screening" id="radio" class="form-control" value="true">
				</label>
			</div>

			<div class="radio form-group">
				<label for="task-name" class="col-sm-8 control-label">No
					<input type="radio" name="screening" id="radio" class="form-control" value="false" checked>
				</label>
			</div>


			<div class="form-group">
				<div class="col-sm-offset-6 col-sm-6">
					<button type="submit" class="btn btn-default">
						<i class="fa fa-btn fa-plus"></i>Add
					</button>
				</div>
			</div>

		</form>
		@endforeach @endif
	</div>
</div>
@endsection