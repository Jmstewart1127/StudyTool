@extends('layouts.app') @section('content')
<div class="container">
	<div class="col-sm-offset-2 col-sm-8">
		<div class="panel panel-default">
			@if (count($groups) > 0)
			<div class="panel panel-default">
				<div class="panel-heading">
					Study Groups
				</div>
				<div class="panel-body">
					<table class="table table-striped task-table">
						<thead>
							<th>Study Groups</th>
						</thead>
						<tbody>
							@foreach ($groups as $group)
							<tr>
								<td class="table-text">
									<div>
										<a href="{{ url('groups/show/'.$groups->id) }}">{{ $group->group_name }}</a>
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			@endif
		</div>
		<a href="/groups/create">Create New Study Group</a>
	</div>
</div>
@endsection