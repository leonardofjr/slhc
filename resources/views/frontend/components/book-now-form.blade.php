<form method="POST" action="/book-now" class="mr-auto ml-auto py-4 book-now-form">
  {{ csrf_field() }} 
  <div class="form-group">
    <label for="name">Name:</label>
    <input class="form-control" type="text" name="name" placeholder="your name"/>

    <div class="flash-message flash-message-name alert alert-info d-none">
        <span></span>
    </div>  
  </div>
            

  <div class="form-group">
    <label for="phone">Phone:</label>
    <input class="form-control" type="tel" name="phone" placeholder="your phone number"/>
    
    <div class="flash-message flash-message-phone alert alert-info d-none">
        <span></span>
    </div>  
  </div>

  <div class="form-group">
    <label for="email">Email address:</label>
     <input class="form-control" type="email" name="email" placeholder="your email address"/>
    
    <div class="flash-message flash-message-email alert alert-info d-none">
        <span></span>
    </div>  
  </div>

  <div class="form-group">
    <label>Treatment of interest?:</label>

    <div class="checkbox">
     <label><input type="checkbox" name="interests[]" value="Traditional Chinese Medicine">Traditional Chinese Medicine</label>
    </div>

    <div class="checkbox">
      <label><input type="checkbox" name="interests[]" value="Sacred Crystal Healing">Sacred Crystal Healing</label>
    </div>

    <div class="checkbox">
      <label><input type="checkbox" name="interests[]" value="Massage">Massage</label>
    </div>

    <div class="checkbox">
      <label><input type="checkbox" name="interests[]" value="Reiki">Reiki</label>
    </div>

    <div class="checkbox">
      <label><input type="checkbox" name="interests[]" value="inca Shamanic Healing">Inca Shamanic Healing</label>
    </div>

    <div class="flash-message flash-message-interests alert alert-info d-none">
        <span></span>
    </div>  
  </div>

  
  <div class="form-group">
    <label for="date">Preferred Date:</label>
     <input class="form-control" type="date" name="date"/>
    
    <div class="flash-message flash-message-date alert alert-info d-none">
        <span></span>
    </div>  
  </div>



  <div class="form-group">
    <label for="inquiry">Inquiry:</label>
    <textarea class="form-control" type="text" name="inquiry" placeholder="Leave Your Message"></textarea>
    
    <div class="flash-message flash-message-inquiry alert alert-info d-none">
        <span></span>
    </div>  
  </div>
    <div class="form-group">
        <div class="g-recaptcha" data-sitekey="6LcFrGoUAAAAAE9nwReZ-oKM5nff7vL3AiLw_Uo1"></div>
    </div>
    <div class="flash-message-recaptcha-token alert alert-info d-none">
        <span></span>
    </div> 
    <button class="btn btn-primary" type="submit">Send It Now</button>
</form>

<div class="flash-message flash-message-success alert alert-info d-none">
    <span>Your inquiry has been submitted</span>
</div> 