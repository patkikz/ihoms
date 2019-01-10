@extends('layouts.app')

@section('content')
    <h1>Hello Tanginamo</h1>

    @if (count($tenants) > 0)
        @foreach ($tenants as $tenant)
            <li>
                <a href="/tenants/{{$tenant->id}}">{{$tenant->last_name}}</a>
            </li>
        @endforeach
    @else
        <p>There is no tenant yet!</p>
    @endif
@endsection