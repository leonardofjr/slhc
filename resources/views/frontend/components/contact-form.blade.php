
<form method="POST" action="/contact" class="mr-auto ml-auto py-4 contact-form">
    {{ csrf_field() }} 
    <div class="form-group">
        <input class="form-control" type="text" name="name" placeholder="Name"/>
    </div>
    <div class="flash-message-name alert alert-info d-none">
         <span></span>
    </div>  
    <div class="form-group">
        <input class="form-control" type="text" name="email" placeholder="Email Address"/>
    </div>
    <div class="flash-message-email alert alert-info d-none">
        <span></span>
    </div>  
    <div class="form-group">
        <textarea class="form-control" type="text" name="inquiry" placeholder="Leave Your Message"></textarea>
    </div>
 
    <div class="flash-message-inquiry alert alert-info d-none">
        <span></span>
    </div> 
    <div class="form-group">
        <div class="g-recaptcha" data-sitekey="6LcFrGoUAAAAAE9nwReZ-oKM5nff7vL3AiLw_Uo1"></div>
    </div>
    <div class="flash-message-recaptcha-token alert alert-info d-none">
        <span></span>
    </div> 
    <button class="btn btn-primary" type="submit">Send It Now</button>
</form>

<div class="flash-message-success alert alert-info d-none">
    <span>Your inquiry has been submitted</span>
</div> 
