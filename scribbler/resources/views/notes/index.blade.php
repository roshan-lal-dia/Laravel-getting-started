@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <table>
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
                    <td>$item->title</td>
                    <td>$item->created_at</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection
