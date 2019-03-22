@extends('layouts.app')

@section('content')
    <h2>{{\Request::route()->getName()}}</h2>
    <form action="/services/{{$data->id}}" method="POST">
        {{ csrf_field() }}

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="title">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" name="title" value="{{ old('title', $data->title) }}">
                 @if ($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                 @endif
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="content">Content</label>
            <div class="col-sm-10">
                <textarea class="form-control {{ $errors->has('content') ? ' is-invalid' : '' }}" id="content" name="content">{{ old('content', $data->content) }}</textarea>
                 @if ($errors->has('content'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('content') }}</strong>
                    </span>
                 @endif
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'content' );
            </script>         
    </form>

@endsection

