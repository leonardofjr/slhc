@extends('layouts.app')

@section('content')
    <div class="card-header">
        <h2>{{\Request::route()->getName()}}</h2>
    </div>

   
    <form id="service_form_create" class="p-4" action="/services" method="POST">
        <div id="uploadImageModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="upload-demo"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary crop-upload-image">Crop & Upload Image</button>
                </div>
                </div>
            </div>
        </div>
        {{ csrf_field() }}

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="service_name">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control {{ $errors->has('service_name') ? ' is-invalid' : '' }}" id="service_name" name="service_name" value="{{ old('service_name') }}"  placeholder="Enter name">
                 @if ($errors->has('service_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('service_name') }}</strong>
                    </span>
                 @endif
            </div>
        </div>

      
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="service_chinese_name">Chinese name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control {{ $errors->has('service_chinese_name') ? ' is-invalid' : '' }}" id="service_chinese_name" name="service_chinese_name" value="{{ old('service_chinese_name') }}"  placeholder="Enter the chinese name for the service">
                 @if ($errors->has('service_chinese_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('service_chinese_name') }}</strong>
                    </span>
                 @endif
            </div>
        </div>

      


        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="service_image_file">Image</label>
            <div class="col-sm-10">
                <input type="file" class="form-control {{ $errors->has('service_image_file') ? ' is-invalid' : '' }}" id="service_image_file" name="service_image_file" >
                @if ($errors->has('service_image_file'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('service_image_file') }}</strong>
                </span>
             @endif
                <img class="service_image_preview my-3" src="" alt="Preview of image">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="service_duration">Duration</label>
            <div class="col-sm-4">
                <select type="dropdown" class="form-control {{ $errors->has('service_duration') ? ' is-invalid' : '' }}" id="service_duration" name="service_duration"  placeholder="Hour">
                    <option value="" selected> Choose...</option>
                    @foreach ($durationDropdown as $durationDropdownItem )
                            <option value="{{$durationDropdownItem["duration"]}}" {{ old('service_duration') == $durationDropdownItem["duration"]  ? "selected" : "" }}>{{gmdate("H:i:s",$durationDropdownItem["duration"])}}</option>
                    @endforeach
                </select>
                @if ($errors->has('service_duration'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('service_duration') }}</strong>
                    </span>
                    @endif
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="service_price">Price</label>
            <div class="col-sm-10">
                <input type="number" class="form-control {{ $errors->has('service_price') ? ' is-invalid' : '' }}" id="service_price" name="service_price" value="{{ old('service_price') }}"  placeholder="20.00">
                 @if ($errors->has('service_price'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('service_price') }}</strong>
                    </span>
                 @endif
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="short_description">Short Description</label>
            <div class="col-sm-10">
                <textarea class="form-control {{ $errors->has('short_description') ? ' is-invalid' : '' }}" id="short_description" name="short_description" value="{{ old('short_description') }}"  placeholder="Enter a short description">{{ old('short_description') }}</textarea>
                 @if ($errors->has('short_description'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('short_description') }}</strong>
                    </span>
                 @endif
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="detailed_description">Detailed Description</label>
            <div class="col-sm-10">
                <textarea class="form-control {{ $errors->has('detailed_description') ? ' is-invalid' : '' }}" id="detailed_description" name="detailed_description"   placeholder="Enter a description">{{ old('detailed_description') }}</textarea>
                 @if ($errors->has('detailed_description'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('detailed_description') }}</strong>
                    </span>
                 @endif
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'short_description' );
                CKEDITOR.replace( 'detailed_description' );
            </script>         
    </form>

@endsection
