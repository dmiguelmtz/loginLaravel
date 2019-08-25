@extends('layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center">
        <form method="post" action="{{route('users.update', $user)}}">
            {{ csrf_field() }}
            {{ method_field('patch') }}
            <div class="row">
                <div class="col-md-3">
                    <label>Nombre: </label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="name"  value="{{ $user->name }}" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label>Email:</label>
                </div>
                <div class="col-md-9">
                    <input type="email" name="email"  value="{{ $user->email }}" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label>Password:</label>
                </div>
                <div class="col-md-9">
                    <input type="password" name="password" />
                </div>
            </div>
            <!--
            <input type="password" name="password_confirmation" />
            -->
            <button type="submit">Enviar</button>
        </form>
    </div>
</div>
@endsection