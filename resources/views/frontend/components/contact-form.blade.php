
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
                <textarea class="form-control {{ $errors->has('inquiry') ? ' is-invalid' : '' }}" id="inquiry" name="inquiry" aria-describedby="emailHelp" placeholder="Message">{{ old('inquiry') }}</textarea>
                    @if ($errors->has('inquiry'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('inquiry') }}</strong>
                        </span>
                     @endif    
            </div>
        </div>
        
        <div class="form-group">
            <div class="g-recaptcha " data-size="compact" data-sitekey="6LcFrGoUAAAAAE9nwReZ-oKM5nff7vL3AiLw_Uo1"></div>
        </div>
        <div class="flash-message-recaptcha-token alert alert-info d-none">
            <span></span>
        </div> 
        
        <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
    </form>