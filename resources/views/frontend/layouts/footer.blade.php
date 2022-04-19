<!-- FOOTER
    ================================================== -->


<section class="section footer-1 section-padding-top-bottom">
        <div class="container">
                <div class="four columns" data-scroll-reveal="enter left move 200px over 0.5s after 0.8s">
                        <a href="index.html" class="animsition-link">
                                <div class="logo-footer"></div>
                        </a>
                </div>
                <div class="four columns" data-scroll-reveal="enter left move 200px over 0.5s after 0.3s">
                        <h6><i class="icon-footer">&#xf041;</i>Turkey</h6>
                        <p>Fortifis Limited Headquarters<br />
                                Trump Tower,  Mecidiyekoy Yolu Cad No.12<br />
                                Kustepe Mah. <br />
                                Kat 4 - KNo:12 - DNo. 405<br />
                                Sisli, Istanbul<br />
                        Landline: +902129828324<br />
                        Mobile: +905523053696<br />
                        Fax: +908505223403<br />
                </p>
                </div>
                <div class="four columns" data-scroll-reveal="enter right move 200px over 0.5s after 0.3s">
                        <h6><i class="icon-footer">&#xf041;</i>CAMEROON</h6>
                        <p>Bonapriso,Rue Ella Marie.<br />
                                Opposite Mali Consulate-Douala<br />
                                
                                Telephone:(+237)654528393<br />
                                (+237)656968497</p>
                </div>
                <div class="four columns" data-scroll-reveal="enter right move 200px over 0.5s after 0.8s">
                        <div class="social-bottom">
                                <ul class="list-social">
                                        <li class="icon-soc">
                                                <a href="#">&#xf099;</a>
                                        </li>
                                        <li class="icon-soc">
                                                <a href="#">&#xf09a;</a>
                                        </li>
                                        <li class="icon-soc">
                                                <a href="#">&#xf09b;</a>
                                        </li>
                                        <li class="icon-soc">
                                                <a href="#">&#xf0d5;</a>
                                        </li>
                                </ul>
                        </div>
                        <p><i class="icon-footer">&#xf0e0;</i><a href="mailto:sales@fortifis.net" title="">sales@fortifis.net</a></p>
                        <p><i class="icon-footer">&#xf0e0;</i><a href="mailto:support@fortifis.net" title="">support@fortifis.net</a></p>
                        <p><i class="icon-footer">&#xf0e0;</i><a href="mailto:security@fortifis.net" title="">security@fortifis.net</a></p>
                        <p><i class="icon-footer">&#xf0e0;</i><a href="mailto:info@fortifis.net" title="">info@fortifis.net</a></p>
                </div>
        </div>
</section>

<section class="section footer-bottom">
        <div class="container">
                <div class="sixteen columns">
                        <p>© 2022 Fortifis Security Solutions, Inc. All rights reserved. All trademarks displayed on this web site are the exclusive property of the respective holders.</p>
                </div>
        </div>
</section>




</main>

<div class="scroll-to-top">&#xf106;</div>


</div>

<!-- JAVASCRIPT
    ================================================== -->
<script>
        console.log("{{asset('frontend/js/jquery-2.1.1.js')}}")
</script>
<script type="text/javascript" src="{{asset('frontend/js/jquery-2.1.1.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/modernizr.custom.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.mobile.custom.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/retina-1.1.0.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.animsition.min.js')}}"></script>
<script type="text/javascript">
        (function($) {
                "use strict";
                $(document).ready(function() {

                        $(".animsition").animsition({

                                inClass: 'zoom-in-sm',
                                outClass: 'zoom-out-sm',
                                inDuration: 1500,
                                outDuration: 800,
                                linkElement: '.animsition-link',
                                // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
                                loading: true,
                                loadingParentElement: 'body', //animsition wrapper element
                                loadingClass: 'animsition-loading',
                                unSupportCss: ['animation-duration',
                                        '-webkit-animation-duration',
                                        '-o-animation-duration'
                                ],
                                //"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser. 
                                //The default setting is to disable the "animsition" in a browser that does not support "animation-duration".

                                overlay: false,

                                overlayClass: 'animsition-overlay-slide',
                                overlayParentElement: 'body'
                        });
                });
        })(jQuery);
</script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.easing.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.hidescroll.min.js')}}"></script>
<script type="text/javascript">
        $('.header-top').hidescroll();
</script>
<script type="text/javascript" src="{{ asset('frontend/js/smoothScroll.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.parallax-1.1.3.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.counterup.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/scrollReveal.js')}}"></script>
<script type="text/javascript">
        (function($) {
                "use strict";
                window.scrollReveal = new scrollReveal();
        })(jQuery);
</script>
<script type="text/javascript" src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript">
        (function($) {
                "use strict";
                jQuery(document).ready(function() {
                        var offset = 450;
                        var duration = 500;
                        jQuery(window).scroll(function() {
                                if (jQuery(this).scrollTop() > offset) {
                                        jQuery('.scroll-to-top').fadeIn(duration);
                                } else {
                                        jQuery('.scroll-to-top').fadeOut(duration);
                                }
                        });

                        jQuery('.scroll-to-top').click(function(event) {
                                event.preventDefault();
                                jQuery('html, body').animate({
                                        scrollTop: 0
                                }, duration);
                                return false;
                        })
                });
        })(jQuery);
</script>
<script type="text/javascript" src="{{ asset('frontend/js/visible.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/pro-bars.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.counterup.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/smk-accordion.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/styleswitcher.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/custom-services-1.js')}}"></script>
<!-- End Document
================================================== -->

<script>
        var botmanWidget = {
                aboutText: 'Write Something',
                introMessage: "✋ Hi! I'm your assistant. How May I help You!"
        };
</script>

<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>






</body>

</html>
