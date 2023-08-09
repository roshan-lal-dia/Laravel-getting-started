@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <table class="table">
            <thead>
            <tr>
            <th>Title</th>
            <th>Created At</th>
            <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach (\App\Models\Note::all() as $item)
                <tr>
                    <td>{{$item->title}}</td>
                    <td>{{$item->created_at}}</td>
                    <td><a href="{{route('notes.show', $item->id)}}">Show</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection
