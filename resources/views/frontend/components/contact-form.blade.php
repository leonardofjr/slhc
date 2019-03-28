
   <form action="/contact" method="POST">
        {{ csrf_field() }}
        <div class="form-group row">
            <div class="col-sm-6">
                <input type="text" class="form-control  {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                     @endif
            </div>

            <div class="col-sm-6">
                <input type="email" class="form-control  {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                     @endif
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-12">
                <textarea class="form-control {{ $errors->has('message') ? ' is-invalid' : '' }}" id="message" name="message" placeholder="Message">{{ old('message') }}</textarea>
                    @if ($errors->has('message'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('message') }}</strong>
                        </span>
                     @endif    
            </div>
        </div>
        
        <div class="form-group">
            <div class="g-recaptcha" data-size="compact" data-sitekey="6LcFrGoUAAAAAE9nwReZ-oKM5nff7vL3AiLw_Uo1"></div>
        </div>
        
        <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
    </form>