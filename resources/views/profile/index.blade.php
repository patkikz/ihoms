@extends('layouts.app')

@section('content')

<div id="wrapper">

    @include('inc.sidebar')

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <h1>Personal Information</h1>
                    @foreach ($user as $u)
                    <b>Last Name:</b>   {{$u->last_name}} <br>
                    <b>First Name:</b>  {{$u->first_name}} <br>
                    <b>Middle Name:</b> {{$u->middle_name}} <br>
                    <b>Birthdate:</b>   {{$u->birth_date->format('F d, Y')}} <br>
                    <b>Birthplace:</b>  {{$u->city->city_municipality_description}} <br>
                    <b>Block:</b>    {{$u->block}} <br>
                    <b>Lot:</b>    {{$u->lot}} <br>
                    <b>Street:</b>    {{$u->street}} <br>
                    <br>
                    @endforeach
                    <h1>Account Information</h1>
                    <b>Email:</b>    {{$u->user->email}} <br>
                    <b>User Type:</b>
                    @if ($u->isAdmin != 1)
                        User
                    @else
                        Admin
                    @endif
                    <br>
                    <b>Date Joined:</b> {{$u->user->email_verified_at->format('F d, Y')}}
                </div>
            </div>
        </div>
    </div>
@endsection

