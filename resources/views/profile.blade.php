@extends('layouts.main')

    @section('title')
        Профіль
    @endsection

    @section('main')
        <div class="wrapper">
            <div class="container">
                <div class="signup-box">
                    <h1>Профіль</h1>
                    @foreach($users as $user)
                        <form action="/lab6/public/profile" method="post">
                            @csrf
                            <input  type="text" name="firstname" value="{{$user->firstname}}">
                            <input  type="text" name="surname" value="{{$user->surname}}">
                            <input  type="text" name="phone" value="{{$user->phoneNum}}">
                            <input  type="text" name="address" value="{{$user->address}}">
                            <button type="submit">
                                <a>Зберегти</a>
                            </button>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    @endsection
