<?php get_header(); ?>

        <header class="bg-white">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="width: 100%;">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/Copy%20of%20OYON%20(7).png" class="navbar-brand"/>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" data-pg-ia='{"l":[{"name":"PositionTileOnOpen","trg":"click","a":{"l":[{"t":"^nav|.active-tile","l":[{"t":"set","p":0,"d":0,"l":{"autoAlpha":0}},{"t":"tween","p":0.4,"d":0.15,"l":{"pgia":{"play":"MoveTile"}}},{"t":"tween","p":0.55,"d":0.13,"l":{"autoAlpha":1}}]}]},"pdef":"true","rcr":"true"}]}'>
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <div class="active-tile" data-pg-ia='{"l":[{"name":"MoveTile","trg":"no","a":{"l":[{"t":"$.active-tile","l":[{"t":"tween","p":0,"d":0.28,"l":{"pgPos":{"pos":"center","width":104,"tsel":"^nav|.nav-item.active a"}}}]}]},"rstr":"true"}]}'></div>
                            <ul class="navbar-nav" style="z-index: 1; position: relative;">
                                <li class="nav-item">
                                    <a class="nav-link" href="#hero" data-pg-ia='{"l":[{"name":"ScrollOnClick","trg":"click","a":{"l":[{"t":"^body","l":[{"t":"tween","p":0,"d":0.59,"l":{"scrollTo":{"dest":"${target.href}"}}},{"t":"tween","p":0,"d":0.59,"l":{"history.push":"${target.href}"},"m":true}]},{"t":"","l":[{"t":"tween","p":0,"d":0.3,"l":{"pgia":{"play":"MakeActive"}}}]},{"t":"^nav|.active-tile","l":[{"t":"tween","p":0,"d":0.3,"l":{"pgia":{"play":"MoveTile"}}}]}]},"pdef":"true"},{"name":"MakeActive","trg":"no","a":{"l":[{"t":"^nav|.nav-item.active","l":[{"t":"set","p":0,"d":0,"l":{"class.remove":"active"}}]},{"t":"^.nav-item","l":[{"t":"tween","p":0,"d":0.05,"l":{"class.add":"active"}}]},{"t":"this","l":[{"t":"tween","p":0,"d":0.5,"l":{"color":"#f500db"}}],"m":true}]},"rcr":"true"},{"name":"PlayMoveTile","trg":"no","a":{"l":[{"t":"^nav|.active-tile","l":[{"t":"tween","p":0.1,"d":0.4,"l":{"pgia":{"play":"MoveTile"}}}]}]},"rstr":"true"}]}' data-pg-ia-apply="^nav|a[href^=&quot;#&quot;]"><?php _e( 'About Us', 'oyon' ); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section1"><?php _e( 'Services', 'oyon' ); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section2"><?php _e( 'Features', 'oyon' ); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section3"><?php _e( 'Our Team', 'oyon' ); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section4"><?php _e( 'Contact Us', 'oyon' ); ?></a>
                                </li>
                            </ul>
                        </div>
                        <menu class="socialbar">
                            <i class="fa fa-inverse fa-lg fa-square social"><a name="anchor" style="font-weight: bold; color: #B14DC2; position: fixed; margin-top: -3px; margin-left:-13px; font-size: 16px">ع</a></i>
                            <i class="fa fa-facebook-square fa-inverse fa-lg social"></i>
                            <i class="fa fa-inverse fa-lg fa-linkedin-square social"></i>
                            <i class="fa fa-instagram fa-inverse fa-lg social"></i>
                            <i class="fa fa-inverse fa-lg fa-twitter-square social"></i>
                        </menu>
                    </nav>
                </div>
            </div>
        </header>
        <section style="padding-top: 120px; padding-bottom: 120px; min-height: 300px; color: #ffffff; background-size: cover; background-repeat: no-repeat; background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/background.jpeg');" id="hero" data-pg-ia-scene='{"dir":"a","s":"custom","s_t":"start","s_s":"end","e_t":"end","e_s":"start","l":[{"a":{"l":[{"t":"","l":[{"t":"tween","p":0,"d":1,"l":{"pgia":{"play":"HideContent"}}},{"t":"tween","p":1,"d":8,"l":{"pgia":{"play":"ShowContent","once":1}}},{"t":"tween","p":9,"d":1,"l":{"pgia":{"play":"HideContent"}}}]}]},"p":"scroll","sc_dir":"up_down","rep":"true"}],"smooth":"0"}' data-pg-ia='{"l":[{"name":"ShowContent","trg":"no","a":{"l":[{"t":"h1,h2,p","l":[{"t":"tween","p":0,"d":1,"s":0.5,"l":{"autoAlpha":1}}]}],"desc":"Customize this animation to show the content when the section comes into view."}},{"name":"HideContent","trg":"no","a":{"l":[{"t":"","l":[]}],"desc":"Customize to hide the content when the section goes out of view. Not needed if you want to reveal the content only once. If hiding content, also remove Show Once in Scroll Scene animation."}}]}' data-pg-ia-apply="$section">
            <object type="image/svg+xml" data="background.svg" class="animated-background"></object>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 data-pg-ia-hide class="display-3"><?php _e( 'Smart web solutions that keep you focused on what matters.', 'oyon' ); ?></h1>
                        <p class="lead" data-pg-ia-hide><br><?php _e( 'Oyon is a web solutions agency based in Cairo. Our team consists of talented web specialists, designers, and developers who specialise in providing outstanding services and integrated web and IT solutions.', 'oyon' ); ?><br><br><?php _e( 'Focus on growing your business while we take care of your online presence. Our hosting services are built on cutting-edge technologies, and they are always up and running, monitored, and scaled on-demand.', 'oyon' ); ?><br><br><?php _e( 'We deliver our products and services efficiently and swiftly, your online success is our priority. The premium features and intelligent solutions we offer ensure your business a rapid growth and expansion, both online and offline.', 'oyon' ); ?><br><br><br><a class="nav-link" href="#section4" data-pg-ia="{&quot;l&quot;:[{&quot;name&quot;:&quot;ScrollOnClick&quot;,&quot;trg&quot;:&quot;click&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;^body&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.59,&quot;l&quot;:{&quot;scrollTo&quot;:{&quot;dest&quot;:&quot;${target.href}&quot;}}},{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.59,&quot;l&quot;:{&quot;history.push&quot;:&quot;${target.href}&quot;},&quot;m&quot;:true}]},{&quot;t&quot;:&quot;&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.3,&quot;l&quot;:{&quot;pgia&quot;:{&quot;play&quot;:&quot;MakeActive&quot;}}}]},{&quot;t&quot;:&quot;^nav|.active-tile&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.3,&quot;l&quot;:{&quot;pgia&quot;:{&quot;play&quot;:&quot;MoveTile&quot;}}}]}]},&quot;pdef&quot;:&quot;true&quot;},{&quot;name&quot;:&quot;MakeActive&quot;,&quot;trg&quot;:&quot;no&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;^nav|.nav-item.active&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;set&quot;,&quot;p&quot;:0,&quot;d&quot;:0,&quot;l&quot;:{&quot;class.remove&quot;:&quot;active&quot;}}]},{&quot;t&quot;:&quot;^.nav-item&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.05,&quot;l&quot;:{&quot;class.add&quot;:&quot;active&quot;}}]},{&quot;t&quot;:&quot;this&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;color&quot;:&quot;#f500db&quot;}}],&quot;m&quot;:true}]},&quot;rcr&quot;:&quot;true&quot;},{&quot;name&quot;:&quot;PlayMoveTile&quot;,&quot;trg&quot;:&quot;no&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;^nav|.active-tile&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0.1,&quot;d&quot;:0.4,&quot;l&quot;:{&quot;pgia&quot;:{&quot;play&quot;:&quot;MoveTile&quot;}}}]}]},&quot;rstr&quot;:&quot;true&quot;}]}" data-pg-ia-apply="^nav|a[href^=&quot;#&quot;]"><button class="display-1 nav-link" style="background-color: #7029c5;">
                                    <?php _e( 'Get a quote', 'oyon' ); ?>
                                </button></a></p>
                    </div>
                </div>
            </div>
        </section>
        <section id="section1">
            <div class="container">
                <h1 class="text-center"><b><span style="font-weight: normal;"><?php _e( 'What we do', 'oyon' ); ?></span></b></h1>
                <div class="col-md-7 col-xl-6" style="width: 100%; margin-left: 292px;"> 
                    <p></p> 
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <i class="fa fa-5x fa-server text-center" style="width: 100%; padding-left: 0; padding-bottom: 25px; padding-top: 25px; color: rgba(0, 0, 0, 0.76);"></i>
                        <h4 class="text-center"><?php _e( 'Managed Web Hosting', 'oyon' ); ?></h4>
                        <p style="margin-left: 10px; margin-right: 10px; padding-top: 16px;"><?php _e( 'The excellent place to host your website on powerful and secure servers. For your successful online projects or business, we provide lightning-fast, secure, and user-friendly cPanel website hosting.', 'oyon' ); ?></p>
                    </div>
                    <div class="col-md-4">
                        <i class="fa fa-5x fa-pencil-square-o text-center" style="width: 100%; padding-left: 0; padding-bottom: 25px; padding-top: 25px; color: rgba(0, 0, 0, 0.76);"></i>
                        <h4 class="text-center"><?php _e( 'Web Design', 'oyon' ); ?></h4> 
                        <p style="margin-left: 10px; margin-right: 10px; padding-top: 16px;"><?php _e( 'We create cutting-edge web and mobile apps using modern frameworks. With an interactive UI/UX interface that boosts brand awareness, our web solutions are feature-rich, fully functional, stable, and scalable.', 'oyon' ); ?></p>
                    </div>
                    <div class="col-md-4">
                        <i class="fa fa-5x fa-bullhorn text-center" style="width: 100%; padding-left: 0; padding-bottom: 25px; padding-top: 25px; color: rgba(0, 0, 0, 0.76);"></i>
                        <h4 class="text-center"><?php _e( 'Branding', 'oyon' ); ?></h4> 
                        <p style="margin-left: 10px; margin-right: 10px; padding-top: 16px;"><?php _e( 'We provide full creative branding and design services. Creating better brands that impact your business market and allow an exceptional business growth.', 'oyon' ); ?></p>
                    </div>
                </div>
                <div class="row" style="margin-top: 35px;">
                    <div class="col-md-4">
                        <i class="fa fa-5x fa-shopping-cart text-center" style="width: 100%; padding-left: 0; padding-bottom: 25px; padding-top: 25px; color: rgba(0, 0, 0, 0.76);"></i>
                        <h4 class="text-center"><?php _e( 'E-Commerce', 'oyon' ); ?></h4>
                        <p style="margin-left: 10px; margin-right: 10px; padding-top: 16px;"><?php _e( 'We create E-commerce websites using the most effective internet sales platforms, ensuring a great user experience, a growing market reach, and increased sales.', 'oyon' ); ?></p>
                    </div>
                    <div class="col-md-4">
                        <i class="fa fa-5x fa-paint-brush text-center" style="width: 100%; padding-left: 0; padding-bottom: 25px; padding-top: 25px; color: rgba(0, 0, 0, 0.76);"></i>
                        <h4 class="text-center"><?php _e( 'Graphic Design', 'oyon' ); ?></h4> 
                        <p style="margin-left: 10px; margin-right: 10px; padding-top: 16px;"><?php _e( 'Because your company&apos;s image is the first and most noticeable face to clients, it&apos;s critical that the quality of your services be reflected in the visual content you provide.', 'oyon' ); ?></p>
                    </div>
                    <div class="col-md-4">
                        <i class="fa fa-5x fa-share-alt text-center" style="width: 100%; padding-left: 0; padding-bottom: 25px; padding-top: 25px; color: rgba(0, 0, 0, 0.76);"></i>
                        <h4 class="text-center"><?php _e( 'Social Media Marketing', 'oyon' ); ?></h4> 
                        <p style="margin-left: 10px; margin-right: 10px; padding-top: 16px;"><?php _e( 'We can help you achieve the best customer experiences across all social platforms with our social media marketing services.', 'oyon' ); ?></p>
                    </div>
                </div>
            </div>
        </section>
        <section id="section2" style="background-color: #7b83ca; position: relative; z-index: 3; color: #ffffff;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4"> 
                        <i class="fa fa-5x fa-universal-access"></i>
                    </div>
                    <div class="col-md-6" style="padding-top: 0;">
                        <h2 data-pg-ia-hide><?php _e( 'Dedicated support', 'oyon' ); ?></h2>
                        <p data-pg-ia-hide><?php _e( 'Our team is available 24/7 for all your inquiries, requests and questions! Reach us through many channels of support including Emails, Livechat and Phone.', 'oyon' ); ?></p>
                    </div>
                </div>
                <div class="row" style="margin-top: 40px;">
                    <div class="col-lg-2 col-md-4 ">
                        <i class="fa fa-5x fa-gears"></i> 
                    </div>
                    <div class="col-md-6">
                        <h2 data-pg-ia-hide><?php _e( 'Fully Managed Services', 'oyon' ); ?></h2>
                        <p data-pg-ia-hide><?php _e( 'We live and breathe WordPress. Our managed hosting for WordPress and WooCommerce takes away cloud server related hassles so you can scale your website the way you want.', 'oyon' ); ?></p>
                    </div>
                </div>
                <div class="row" style="margin-top: 40px;">
                    <div class="col-lg-2 col-md-4 ">
                        <i class="fa fa-5x fa-rocket"></i> 
                    </div>
                    <div class="col-md-6">
                        <h2 data-pg-ia-hide><?php _e( 'Rapid delivery and outstanding performance', 'oyon' ); ?></h2>
                        <p data-pg-ia-hide><?php _e( 'We live and breathe WordPress. Our managed hosting for WordPress and WooCommerce takes away cloud server related hassles so you can scale your website the way you want.', 'oyon' ); ?></p>
                    </div>
                </div>
            </div>
        </section>
        <section id="section3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 data-pg-ia-hide style="text-align: center;"><?php _e( 'Who are we', 'oyon' ); ?></h2>
                        <p data-pg-ia-hide><?php _e( 'We are a group of talented computer enthusiasts and artists from Egypt&apos;s various cities. Our team is working remotely to ensure everyone&apos;s safety while also ensuring that we deliver our best during COVID-19&apos;s difficult consequences.', 'oyon' ); ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/Screenshot%20(14).png" style="width: 200px; height: 200px; border-radius: 50%; margin-bottom: 20px;"/>
                        <h4><?php _e( 'Mohamed Kotp', 'oyon' ); ?></h4>
                        <label style="color: rgba(0, 0, 0, 0.7);">
                            <i><?php _e( 'Web Specialist based in', 'oyon' ); ?>  <?php _e( 'Mansoura', 'oyon' ); ?></i>
                        </label>
                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/pp.jpeg" style="width: 200px; height: 200px; border-radius: 50%; margin-bottom: 20px;"/>
                        <h4><?php _e( 'Abdelrahman Bonna', 'oyon' ); ?></h4>
                        <label style="color: rgba(0, 0, 0, 0.7);">
                            <i><?php _e( 'Frontend and iOS Developer&nbsp; based in 
    Cairo', 'oyon' ); ?></i>
                        </label>
                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/eisa.jpeg" style="width: 200px; height: 200px; border-radius: 50%; margin-bottom: 20px;"/>
                        <h4><?php _e( 'Eisa Essam', 'oyon' ); ?></h4>
                        <label style="color: rgba(0, 0, 0, 0.7);">
                            <i><?php _e( 'Frontend Developer&nbsp; based in 
    Cairo', 'oyon' ); ?></i>
                        </label>
                    </div>
                    <div class="col-md-3">
                        <h3><?php _e( 'Column title', 'oyon' ); ?></h3> 
                        <p><?php _e( 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'oyon' ); ?></p> 
                    </div>
                </div>
            </div>
        </section>
        <section id="section4" style="background-color: #eeeeee;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 data-pg-ia-hide><?php _e( 'Get in touch', 'oyon' ); ?></h2>
                        <p data-pg-ia-hide><?php _e( 'Please fill out this form and we will be in touch with you as soon as possible. Please include as many details as possible and make sure you will be able to communicate with us through the email address and phone number provided.', 'oyon' ); ?></p>
                    </div>
                    <div class="col-md-6"> 
                        <form id="contact-form" method="post" action="<?php echo esc_url( get_template_directory_uri() ); ?>/contact.php" role="form">
                            <div class="messages"></div>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="form_name">
                                                <?php _e( 'Full Name', 'oyon' ); ?>
                                            </label>
                                            <input id="form_name" type="text" name="name" class="form-control" placeholder="" required="required" data-error="Full Name is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="form_company">
                                                <?php _e( 'Company', 'oyon' ); ?>
                                            </label>
                                            <input id="form_company" type="text" name="company" class="form-control" placeholder="" required="required" data-error="Company name is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="form_email">
                                                <?php _e( 'Email', 'oyon' ); ?>
                                            </label>
                                            <input id="form_email" type="email" name="email" class="form-control" placeholder="" required="required" data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="form_phone">
                                                <?php _e( 'Phone', 'oyon' ); ?>
                                            </label>
                                            <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="form_message">
                                        <?php _e( 'Message', 'oyon' ); ?>
                                    </label>
                                    <textarea id="form_message" name="message" class="form-control" placeholder="" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                    <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <input type="submit" class="btn btn-success btn-send" value="Send message" style="background-color: #b14dc2; border-radius: 5px;">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <footer class=" bg-dark pb-3 pt-3 text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">                          

                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/OYON%20(1).png" style="width: 120px; height: 120px;"/>
                    </div>
                    <div class="col-lg-7 col-md-4">                          
</div>
                    <div class="col-md-3" style="left: 50px; top: 40px; height: 60px;">
                        <p class="mb-0"><?php _e( 'Made with ♥ in Cairo, Egypt.', 'oyon' ); ?><br><?php _e( '&copy; 2021 OYON Solutions Ltd.', 'oyon' ); ?><br></p>
                    </div>
                </div>
            </div>
        </footer>        

<?php get_footer(); ?>