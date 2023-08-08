@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Note') }}</div>

                <div class="card-body">
                <form action="" method="">
                        <div class="row mb-3">
                            <label for="Title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value={{$note->title}} required readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" type="text" class="form-control" name="description" required readonly>{{$note->description}}</textarea>
                            </div>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
