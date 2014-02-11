        <footer>
            <div id="services">Services
                <div class="detilfooter">
                    <a href="<?=site_url("tumurah/faq")?>">FAQ</a><br/>
                    <a href="<?=site_url("tumurah/contact")?>">Contact Us</a><br/>
                    <a href="<?=site_url("tumurah/payment")?>">Payment Confirm</a><br/>
                    <a href="<?=site_url("tumurah/payment")?>">Delivery Details</a><br/>
                    <a href="#">Unsubscribe</a><br/>
                </div>
            </div>
            <div id="aboutus">About Us
                <div class="detilfooter">
                    <a href="<?=site_url("tumurah/about")?>">About Tumurah</a><br/>
                    <a href="#">Careers</a><br/>
                    <a href="#">Wholesale</a><br/>
                    <a href="#">Return Policy</a><br/>
                    <a href="#">Privacy Policy</a><br/>
                    <a href="#">Terms and Conditions</a><br/>
                </div>			
            </div>
            <div id="kolom">
                <div id="delivopt">Delivery Options<br/>
                    <img src="<?=base_url()?>assets/images/jne.jpg" style="width:50px;"/>
                </div>
                <div id="payopt">Payment Options</div>
            </div>
            <div id="kolom">
                <div id="subs">Subscribe to our Newsletter
                    <div class="detilfooter">
                        <input type="text" placeholder="Email...." name="email" id="email"/>
                    </div>
                </div>
                <div id="connus">Connect with Us</div>
            </div>
        </footer>


        <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/js/jquery.easing.1.3.js"></script>
        
        the jScrollPane script 
        <script type="text/javascript" src="<?=base_url();?>assets/js/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/js/jquery.contentcarousel.js"></script>-->
        
        <!--  JQUERY FOR ACCORDION PAYMENT -->
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script type="text/javascript">
            var icons = {
              header: "ui-icon-circle-arrow-e",
              activeHeader: "ui-icon-circle-arrow-s"
            };
            $( "#accordion" ).accordion({
              heightStyle: "content",
              icons: icons,
              collapsible: true
            });
            $( "#toggle" ).button().click(function() {
              if ( $( "#accordion" ).accordion( "option", "icons" ) ) {
                $( "#accordion" ).accordion( "option", "icons", null );
              } else {
                $( "#accordion" ).accordion( "option", "icons", icons );
              }
            });
        </script>
        <!--  END JQUERY FOR ACCORDION PAYMENT -->

	</body>
</html>