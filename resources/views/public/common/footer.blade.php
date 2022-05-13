 @php
    $settings = \App\Model\Settings::where('status',1)->first();
@endphp

        <!-- Footer
        ============================================= -->
        <footer id="footer" class="dark">
            <div class="container">
                <!-- Footer Widgets
                ============================================= -->
                <div class="footer-widgets-wrap">
                    <div class="row col-mb-50">
                        <div class="col-lg-8">
                            <div class="row col-mb-50">
                                <div class="col-md-4">
                                    <div class="widget clearfix">
                                        <h4>Contact info</h4>

                                       {{--  <img src="{{ asset('assets/images/footer.png') }}" alt="Image" class="footer-logo"> --}}
{{--                                         <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> & <strong>Flexible</strong> Design Standards.</p>
 --}}                                        <div style="background: url('{{ asset('assets/images/world-map.png')}}') no-repeat center center; background-size: 100%;">
                                           
                                            <abbr title="Phone Number"><strong>Phone:</strong></abbr> {{ $settings->hot_line }}<br>
                                            <abbr title="Email Address"><strong>Email:</strong></abbr> {{ $settings->info_mail }}<br>
                                             <address>
                                                <strong>Headquarters:</strong><br>
                                                {!! $settings->address !!}<br>
                                            </address>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-4">
                                    <div class="widget widget_links clearfix">
                                        <h4>Blogroll</h4>
                                        <ul>
                                            <li><a href="https://codex.wordpress.org/">Documentation</a></li>
                                            <li><a href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
                                            <li><a href="https://wordpress.org/extend/plugins/">Plugins</a></li>
                                            <li><a href="https://wordpress.org/support/">Support Forums</a></li>
                                            <li><a href="https://wordpress.org/extend/themes/">Themes</a></li>
                                            <li><a href="https://wordpress.org/news/">Canvas Blog</a></li>
                                            <li><a href="https://planet.wordpress.org/">Canvas Planet</a></li>
                                        </ul>
                                    </div>
                                </div> -->
                                <!-- div class="col-md-4">
                                    <div class="widget clearfix">
                                        <h4>Recent Posts</h4>
                                        <div class="posts-sm row col-mb-30" id="post-list-footer">
                                            <div class="entry col-12">
                                                <div class="grid-inner row">
                                                    <div class="col">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li>10th July 2021</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="entry col-12">
                                                <div class="grid-inner row">
                                                    <div class="col">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li>10th July 2021</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="entry col-12">
                                                <div class="grid-inner row">
                                                    <div class="col">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li>10th July 2021</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row col-mb-50">
                                
                              {{--   <div class="col-md-5 col-lg-12">
                                    <div class="widget subscribe-widget clearfix">
                                        <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers & Inside Scoops:</h5>
                                        <div class="widget-subscribe-form-result"></div>
                                        <form id="widget-subscribe-form" action="include/subscribe.html" method="post" class="mb-0">
                                            <div class="input-group mx-auto">
                                                <div class="input-group-text"><i class="icon-email2"></i></div>
                                                <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                                <button class="btn btn-success" type="submit">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div> --}}
                                <div class="col-md-3 col-lg-12">
                                    <div class="widget clearfix" style="margin-bottom: -20px;">
                                        <div class="row">
                                            <div class="col-6 col-md-12 col-lg-6 clearfix bottommargin-sm">
                                                <a href="#" class="social-icon si-dark si-colored si-facebook mb-0" style="margin-right: 10px;">
                                                    <i class="icon-facebook"></i>
                                                    <i class="icon-facebook"></i>
                                                </a>
                                                <a href="{{  $settings->facebook_link ?? '' }}"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
                                            </div>
                                            <div class="col-6 col-md-12 col-lg-6 clearfix">
                                                <a href="#" class="social-icon si-dark si-colored si-youtube mb-0" style="margin-right: 10px;">
                                                    <i class="icon-youtube"></i>
                                                    <i class="icon-youtube"></i>
                                                </a>
                                                <a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to Youtube </small></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .footer-widgets-wrap end -->
            </div>
            <!-- Copyrights
            ============================================= -->
            <div id="copyrights">
                <div class="container">
                    <div class="row col-mb-30">
                        <div class="col-md-6 text-center text-md-start">
                            Copyrights &copy; 2021 All Rights Reserved by Vegan Food Ltd.<br>
                            
                        </div>
                        
                    </div>
                </div>
            </div><!-- #copyrights end -->
        </footer><!-- #footer end -->
    
