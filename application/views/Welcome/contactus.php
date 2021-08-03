<section class="projects">
    <div class="row text-center">
        <h3>Contact Us</h3>
    </div>
    <div class="row">
        <div class="container">
            <div class="row terms">
                <form method="post" action="<?php echo base_url()."/Welcome/sendEmail";?>" id="contact-form">
            <div class="panel-body">
                                    <p>Feel free to contact us for any issues you might have with our products.</p>
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input type="email" name="email" class="form-control" placeholder="youremail@domain.com" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" name="subject" class="form-control" placeholder="Message subject" required="required">
                                    </div>                                
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea name="message" class="form-control" placeholder="Your message" rows="3" required="required"></textarea>
                                    </div>                                
                                </div> 
                                    <button class="btn btn-success pull-right"><span class="fa fa-envelope-o"></span> Send</button>
                                
                </form>
            </div>
        </div>
    </div>
</section>