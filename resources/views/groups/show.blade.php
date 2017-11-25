@extends('layouts.app')

@section('content')
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
                                    @if ($group->private == 0)
                                    <tr>
                                        <td class="table-text"><div>{{ $group->group_name }}</div></td>
                                    </tr>
                                    @endif
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