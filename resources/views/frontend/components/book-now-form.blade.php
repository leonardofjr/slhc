
    <form action="/book-now" method="POST">
            {{ csrf_field() }}
            <div class="form-group row">
                <div class="col-sm-12">
                    <input type="text" class="form-control  {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                </div>

            </div>

            <div class="form-group row">
                <div class="col-sm-12">
                    <input type="tel" class="form-control  {{ $errors->has('phone') ? ' is-invalid' : '' }}" id="phone" name="phone" placeholder="Phone"  value="{{ old('phone') }}">
                        @if ($errors->has('phone'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                </div>

            </div>
            <div class="form-group row">

                <div class="col-sm-12">
                    <input type="email" class="form-control  {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

        <div class="form-group ">
            @foreach ( $services as $service )

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="{{$service["service_name"]}}" value="{{$service["service_name"]}}" name="interests[]">
                <label class="form-check-label" for="{{$service["service_name"]}}">{{$service["service_name"]}}</label>
            </div>
            @endforeach
        </div>
        
            <div class="form-group row">

                <div class="col-sm-12">
                    <input type="date" class="form-control  {{ $errors->has('date') ? ' is-invalid' : '' }}" id="date" name="date" placeholder="Email" value="{{ old('date') }}">
                        @if ($errors->has('date'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('date') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-12">
                    <textarea class="form-control {{ $errors->has('message') ? ' is-invalid' : '' }}" id="message" name="message" aria-describedby="emailHelp" placeholder="Message">{{ old('message') }}</textarea>
                        @if ($errors->has('message'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('message') }}</strong>
                            </span>
                        @endif    
                </div>
            </div>

        <div class="form-group">
            <div class="g-recaptcha" data-sitekey="6LcFrGoUAAAAAE9nwReZ-oKM5nff7vL3AiLw_Uo1"></div>
        </div>
        <div class="flash-message-recaptcha-token alert alert-info d-none">
            <span></span>
        </div> 
            <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
        </form>
