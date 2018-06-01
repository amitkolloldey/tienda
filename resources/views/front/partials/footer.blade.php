<!-- Footer -->
<footer id="footer">
    <div class="container">
        <!-- introduce-box -->
        <div id="introduce-box" class="row">
            <div class="col-md-3">
                <div id="address-box">
                    <a href="#"><img src="assets/data/introduce-logo.png" alt=""/></a>
                    <div id="address-list">
                        <div class="tit-name">Address:</div>
                        <div class="tit-contain">Example Street 68, Mahattan, New York, USA.</div>
                        <div class="tit-name">Phone:</div>
                        <div class="tit-contain">+00 123 456 789</div>
                        <div class="tit-name">Email:</div>
                        <div class="tit-contain">support@business.com</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="introduce-title">Company</div>
                        <ul id="introduce-company" class="introduce-list">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Affiliate Program</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <div class="introduce-title">My Account</div>
                        <ul id="introduce-Account" class="introduce-list">
                            <li><a href="#">My Order</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">My Credit Slip</a></li>
                            <li><a href="#">My Addresses</a></li>
                            <li><a href="#">My Personal In</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <div class="introduce-title">Support</div>
                        <ul id="introduce-support" class="introduce-list">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Affiliate Program</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="contact-box">
                    <div class="introduce-title">Newsletter</div>
                    <div class="input-group" id="mail-box">
                        <input type="text" placeholder="Your Email Address"/>
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">OK</button>
                          </span>
                    </div><!-- /input-group -->
                    <div class="introduce-title">Let's Socialize</div>
                    <div class="social-link">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-vk"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>

            </div>
        </div><!-- /#introduce-box -->

        <!-- #trademark-box -->
        <div id="trademark-box" class="row">
            <div class="col-sm-12">
                <ul id="trademark-list">
                    <li id="payment-methods">Accepted Payment Methods</li>
                    <li>
                        <a href="#"><img src="assets/data/trademark-ups.jpg" alt="ups"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="assets/data/trademark-qiwi.jpg" alt="ups"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="assets/data/trademark-wu.jpg" alt="ups"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="assets/data/trademark-cn.jpg" alt="ups"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="assets/data/trademark-visa.jpg" alt="ups"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="assets/data/trademark-mc.jpg" alt="ups"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="assets/data/trademark-ems.jpg" alt="ups"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="assets/data/trademark-dhl.jpg" alt="ups"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="assets/data/trademark-fe.jpg" alt="ups"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="assets/data/trademark-wm.jpg" alt="ups"/></a>
                    </li>
                </ul>
            </div>
        </div> <!-- /#trademark-box -->

    </div>
</footer>

<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->
<script type="text/javascript" src="{{asset('assets/lib/jquery/jquery-1.11.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/lib/select2/js/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/lib/jquery.bxslider/jquery.bxslider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/lib/owl.carousel/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/lib/jquery.countdown/jquery.countdown.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/lib/jquery.elevatezoom.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/lib/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/lib/fancyBox/jquery.fancybox.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.actual.min.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/js/theme-script.js')}}"></script>
@yield('scripts')
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>

<!-- Initialize autocomplete menu -->
<script>
    var client = algoliasearch('{{config('scout.algolia.id')}}', '{{config('scout.algolia.secret')}}');
    var index = client.initIndex('Products');

    //initialize autocomplete on search input (ID selector must match)
    autocomplete('#aa-search-input',
        {hint: true}, {
            source: autocomplete.sources.hits(index, {hitsPerPage: 10}),
            //value to be displayed in input control after user's suggestion selection
            displayKey: 'name',
            //hash of templates used when rendering dataset
            templates: {
                //'suggestion' templating function used to render a single suggestion
                suggestion: function (suggestion) {
                    if (suggestion.price) {
                        var image = '{{url("storage/")}}' + '/' + suggestion.image;
                        return '<span>'+ '<img src="'+ image +'" width="50px" style="margin-right: 10px"/>'
                            +'</span><span>' +
                            suggestion._highlightResult.name.value + '</span><span  class="pull-right">'+
                            'Price: $'+ suggestion.price + '<span>';
                    }else{
                        return '<span>' +
                            suggestion._highlightResult.name.value + '</span><span class="pull-right">' +
                            'Category'+'</span>'
                    }
                }
            }
        }).on('autocomplete:selected', function (event, suggestion, dataset) {
        if (suggestion.price) {
            window.location.href = "{{url('product')}}" + '/' + suggestion.slug;
        } else {
            window.location.href = "{{url('/category')}}" + '/' + suggestion.slug;
        }
        enterPressed = true;
    });
</script>
</body>
</html>