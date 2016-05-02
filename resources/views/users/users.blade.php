
@extends('layout.main')
@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
                                    <div class="widget-content widget-content-full">

<table class="table table-borderless table-striped table-vcenter">
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td class="text-center" style="width: 100px;">
                @if(Auth::check())
                <a href="/editbacklog/{{$user->id}}" class="text-muted">{{$user->username}}</a>
                <br> @else {{$backlog->priority}}
                <br> @endif
                <td>
                    <a href="javascript:void(0)">{{$user->name}}</a>
                    <br>
                    <small>{{$user->description}}</small></a>
                </td>
                <td class="text-center" style="width: 80px;">
                </td>
        </tr>
        @endforeach

    </tbody>
</table>
</div>

</div>
</div>
@endsection
