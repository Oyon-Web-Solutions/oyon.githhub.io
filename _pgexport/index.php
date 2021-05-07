<?php get_header(); ?>

<header class="bg-white">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/Copy%20of%20OYON%20(6).png" class="navbar-brand"/>
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
                            <a class="nav-link" href="#section2"><?php _e( 'Section 2', 'oyon' ); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section3"><?php _e( 'Section 3', 'oyon' ); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section4"><?php _e( 'Section 4', 'oyon' ); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section5"><?php _e( 'Section 5', 'oyon' ); ?></a>
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
                <h1 data-pg-ia-hide class="display-3"><?php _e( 'Smart web solutions for your business needs.', 'oyon' ); ?></h1>
                <p class="lead" data-pg-ia-hide><br><?php _e( 'Oyon is a web solutions agency based in Cairo. Our team consists of talented web specialists, designers, and developers who specialise in providing outstanding services and integrated web and IT solutions.', 'oyon' ); ?><br><br><?php _e( 'Focus on growing your business while we take care of your online presence. Our hosting services are built on cutting-edge technology, and they are always up and running, monitored, and scaled on-demand.', 'oyon' ); ?><br><br><?php _e( 'We deliver our products and services efficiently and swiftly, your online success is our priority. The premium features and intelligent solutions we offer ensure your business a rapid growth and expansion, both online and offline.', 'oyon' ); ?><br><br><br><button class="display-1" style="background-color: #7029c5;">
                        <?php _e( 'Get a quote', 'oyon' ); ?>
                    </button></p>
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
                <i class="fa fa-5x fa-server text-center" style="width: 100%; padding-left: 0; padding-bottom: 25px; padding-top: 25px;"></i>
                <h4 class="text-center"><?php _e( 'Managed Web Hosting', 'oyon' ); ?></h4>
                <p style="margin-left: 10px; margin-right: 10px; padding-top: 16px;"><?php _e( 'The excellent place to host your website on powerful and secure servers. For your successful online projects or business, we provide lightning-fast, secure, and user-friendly cPanel website hosting.', 'oyon' ); ?></p>
            </div>
            <div class="col-md-4">
                <i class="fa fa-5x fa-pencil-square-o text-center" style="width: 100%; padding-left: 0; padding-bottom: 25px; padding-top: 25px;"></i>
                <h4 class="text-center"><?php _e( 'Web Design', 'oyon' ); ?></h4> 
                <p style="margin-left: 10px; margin-right: 10px; padding-top: 16px;"><?php _e( 'We create cutting-edge web and mobile apps using modern frameworks. With an interactive UI/UX interface that boosts brand awareness, our web solutions are feature-rich, fully functional, stable, and scalable.', 'oyon' ); ?></p>
            </div>
            <div class="col-md-4">
                <i class="fa fa-5x fa-bullhorn text-center" style="width: 100%; padding-left: 0; padding-bottom: 25px; padding-top: 25px;"></i>
                <h4 class="text-center"><?php _e( 'Branding', 'oyon' ); ?></h4> 
                <p style="margin-left: 10px; margin-right: 10px; padding-top: 16px;"><?php _e( 'We provide full creative branding and design services. Creating better brands that impact your business market and allow an exceptional business growth.', 'oyon' ); ?></p>
            </div>
        </div>
        <div class="row" style="margin-top: 35px;">
            <div class="col-md-4">
                <i class="fa fa-5x fa-shopping-cart text-center" style="width: 100%; padding-left: 0; padding-bottom: 25px; padding-top: 25px;"></i>
                <h4 class="text-center"><?php _e( 'E-Commerce', 'oyon' ); ?></h4>
                <p style="margin-left: 10px; margin-right: 10px; padding-top: 16px;"><?php _e( 'We create E-commerce websites using the most effective internet sales platforms, ensuring a great user experience, a growing market reach, and increased sales.', 'oyon' ); ?></p>
            </div>
            <div class="col-md-4">
                <i class="fa fa-5x fa-paint-brush text-center" style="width: 100%; padding-left: 0; padding-bottom: 25px; padding-top: 25px;"></i>
                <h4 class="text-center"><?php _e( 'Graphic Design', 'oyon' ); ?></h4> 
                <p style="margin-left: 10px; margin-right: 10px; padding-top: 16px;"><?php _e( 'Because your company&apos;s image is the first and most noticeable face to clients, it&apos;s critical that the quality of your services be reflected in the visual content you provide.', 'oyon' ); ?></p>
            </div>
            <div class="col-md-4">
                <i class="fa fa-5x fa-share-alt text-center" style="width: 100%; padding-left: 0; padding-bottom: 25px; padding-top: 25px;"></i>
                <h4 class="text-center"><?php _e( 'Social Media', 'oyon' ); ?></h4> 
                <p style="margin-left: 10px; margin-right: 10px; padding-top: 16px;"><?php _e( 'We can help you achieve the best customer experiences across all social platforms with our social media marketing services.', 'oyon' ); ?></p>
            </div>
        </div>
    </div>
</section>
<section id="section2" style="background-color: #eeeeee; position: relative; z-index: 3;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 data-pg-ia-hide><?php _e( 'Section 2', 'oyon' ); ?></h2>
                <p data-pg-ia-hide><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet. Curabitur ac sagittis neque, vel egestas est. Aenean elementum, erat at aliquet hendrerit, elit nisl posuere tortor, id suscipit diam dui sed nisi. Morbi sollicitudin massa vel tortor consequat, eget semper nisl fringilla. Maecenas at hendrerit odio. Sed in mi eu quam suscipit bibendum quis at orci. Pellentesque fermentum nisl purus, et iaculis lectus pharetra sit amet.', 'oyon' ); ?></p>
            </div>
        </div>
    </div>
</section>
<section id="section3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 data-pg-ia-hide><?php _e( 'Section 3', 'oyon' ); ?></h2>
                <p data-pg-ia-hide><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet. Curabitur ac sagittis neque, vel egestas est. Aenean elementum, erat at aliquet hendrerit, elit nisl posuere tortor, id suscipit diam dui sed nisi. Morbi sollicitudin massa vel tortor consequat, eget semper nisl fringilla. Maecenas at hendrerit odio. Sed in mi eu quam suscipit bibendum quis at orci. Pellentesque fermentum nisl purus, et iaculis lectus pharetra sit amet.', 'oyon' ); ?></p>
            </div>
        </div>
    </div>
</section>
<section id="section4" style="background-color: #eeeeee;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 data-pg-ia-hide><?php _e( 'Section 4', 'oyon' ); ?></h2>
                <p data-pg-ia-hide><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet. Curabitur ac sagittis neque, vel egestas est. Aenean elementum, erat at aliquet hendrerit, elit nisl posuere tortor, id suscipit diam dui sed nisi. Morbi sollicitudin massa vel tortor consequat, eget semper nisl fringilla. Maecenas at hendrerit odio. Sed in mi eu quam suscipit bibendum quis at orci. Pellentesque fermentum nisl purus, et iaculis lectus pharetra sit amet.', 'oyon' ); ?></p>
            </div>
        </div>
    </div>
</section>
<section id="section5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 data-pg-ia-hide><?php _e( 'Section 5', 'oyon' ); ?></h2>
                <p data-pg-ia-hide><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet. Curabitur ac sagittis neque, vel egestas est. Aenean elementum, erat at aliquet hendrerit, elit nisl posuere tortor, id suscipit diam dui sed nisi. Morbi sollicitudin massa vel tortor consequat, eget semper nisl fringilla. Maecenas at hendrerit odio. Sed in mi eu quam suscipit bibendum quis at orci. Pellentesque fermentum nisl purus, et iaculis lectus pharetra sit amet.', 'oyon' ); ?></p>
            </div>
        </div>
    </div>
</section>
<footer class=" bg-dark pb-3 pt-3 text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="mb-0"><?php _e( 'Made with ♥ in Cairo, Egypt.', 'oyon' ); ?><br><br><?php _e( '&copy; 2021 OYON Solutions Ltd.', 'oyon' ); ?><br></p>
            </div>
        </div>
    </div>
</footer>        

<?php get_footer(); ?>