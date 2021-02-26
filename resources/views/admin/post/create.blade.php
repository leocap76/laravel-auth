
@extends('layouts.app')

    @section( 'content')
    <div class="container">
        <h1>CREA NUOVO POST</h1>
        @if($errors->any())
            <div class="allert allert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{  route('admin.posts.store') }}" method = "POST">
        @csrf 
        @method('POST')

        <div class="form-group">
            <label for="title">titolo</label>
            <input class="form-control" type="text" id="title" name="title" value=" {{ old('title') }}">
        </div>

        <div class="form-group">
            <label for="title">testo</label>
            <textarea class="form-control" name="body" id="body" rows="10"></textarea> {{ old('body') }}
        </div>

        <input class="btn btn-primary" type="submit" value="crea">


        </form>
        </div>
    @endsection