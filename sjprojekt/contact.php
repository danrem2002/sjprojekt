<?php 
    include('partials/nav.php')
    ?>

    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <h3 class="widget-title">Contact Us</h3>
                    <div class="contact-form">
                        <form name="contactform" id="contactform" action="#" method="post">
                            <p>
                                <input name="name" type="text" id="name" placeholder="Your Name">
                            </p>
                            <p>
                                <input name="email" type="text" id="email" placeholder="Your Email"> 
                            </p>
                            <p>
                                <input name="subject" type="text" id="subject" placeholder="Subject"> 
                            </p>
                            <p>
                                <textarea name="message" id="message" placeholder="Message"></textarea>    
                            </p>
                            <input type="submit" class="mainBtn" id="submit" value="Send Message">
                        </form>
                    </div> <!-- /.contact-form -->
                </div>
                <div class="col-md-7 col-sm-6 map-wrapper">
                    <h3 class="widget-title">Our Location</h3>
                    <div class="map-holder" style="height: 360px">
                    <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=Trieda%20Andreja%20Hlinku%201,%20949%2074%20Nitra-Chrenov%C3%A1+(Adresa)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure acres/hectares on map</a></iframe></div>
                </div>
                </div>
            </div>
        </div>
    </div> <!-- /.content-section -->

    
    <?php
    include('partials/foot.php');
    ?>