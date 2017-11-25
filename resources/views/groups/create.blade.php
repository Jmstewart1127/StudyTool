@extends('layouts.app') @section('content')
<div class="container">
	<div class="col-sm-offset-2 col-sm-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				New Task
			</div>

			<div class="panel-body">
				<!-- Display Validation Errors -->


				<!-- New Task Form -->
				<form action="/groups" method="POST" class="form-horizontal">
					{{ csrf_field() }}

					<!-- Task Name -->
					<div class="form-group">
						<label for="task-name" class="col-sm-3 control-label">Group Name</label>
						<div class="col-sm-6">
							<input type="text" name="group_name" id="task-name" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label for="subject" class="col-sm-3 control-label">Course Subject</label>
						<div class="col-sm-6">
							<input type="text" name="subject" id="task-name" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label for="task-name" class="col-sm-3 control-label">Open Group?</label>
					</div>
					<div class="form-group">
						<label for="task-name" class="col-sm-3 control-label">Anyone can join</label>

						<div class="col-sm-6">
							<input type="radio" name="private" id="task-name" class="form-control" value="1">
						</div>
					</div>
					<div class="form-group">
						<label for="task-name" class="col-sm-3 control-label">Invite only</label>
						<div class="col-sm-6">
							<input type="radio" name="private" id="task-name" class="form-control" value="0" checked>
						</div>
					</div>
					<!-- Add Task Button -->
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-6">
							<button type="submit" class="btn btn-default">
								<i class="fa fa-btn fa-plus"></i>Create Group
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>

		<!-- Current Tasks -->

	</div>
</div>
@endsection