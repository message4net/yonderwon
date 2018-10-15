{include 'head.tpl'}

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 clean-superblock" id="contact">
                    <h2>Contact</h2>
                    
                    <form action="#" method="get" accept-charset="utf-8" class="contact-form">
                        <input type="text" name="name" id="contact-name" placeholder="Name" class="form-control input-lg">
                        <input type="email" name="email" id="contact-email" placeholder="Email" class="form-control input-lg">
                        <!--
                        <input type="toolbar" name="toolbar" id="contact-toolbar" class="form-control input-lg">
                        <textarea rows="10" name="message" id="contact-body" placeholder="Your Message" class="form-control input-lg">
                        
                        </textarea>
                        -->
                        <div id="contact-toolbar"></div>
                        <div name="message" id="contact-body">
                        
                        </div>
                        
                        <div class="buttons clearfix">
                            <button type="submit" class="btn btn-xlarge btn-clean-one">Submit</button>
                        </div>                    
                    </form>
                </div>
            </div>        
        </div>
        
{include 'foot.tpl'}