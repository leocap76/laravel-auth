
@extends('layouts.app')

    @section( 'content')

        <div class="container">
            <h1>TUTTI I POST</h1>
            <table class="table table-striped table-borderd">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TITOLO</th>
                        <th>DATA CREAZIONE</th>
                        <th colspan="3"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->created_at-> format('d-m-Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    @endsection