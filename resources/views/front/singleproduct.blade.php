@extends('front.layout.template')
@section('title') {{$product->name}} @endsection
@section('bodyclass')product-page @endsection
@section('content')

    <div class="columns-container">
        <div class="container" id="columns">
            <!-- row -->
            <div class="row">
                <!-- Left colunm -->
                <div class="column col-xs-12 col-sm-3" id="left_column">
                    <!-- block category -->
                    <div class="block left-module">
                        <p class="title_block">Product types</p>
                        <div class="block_content">
                            <!-- layered -->
                            <div class="layered layered-category">
                                <div class="layered-content">
                                    <ul class="tree-menu">
                                        <li class="active">
                                            <span></span><a href="#">Tops</a>
                                            <ul>
                                                <li><span></span><a href="#">T-shirts</a></li>
                                                <li><span></span><a href="#">Dresses</a></li>
                                                <li><span></span><a href="#">Casual</a></li>
                                                <li><span></span><a href="#">Evening</a></li>
                                                <li><span></span><a href="#">Summer</a></li>
                                                <li><span></span><a href="#">Bags & Shoes</a></li>
                                                <li><span></span><a href="#"><span></span>Blouses</a></li>
                                            </ul>
                                        </li>
                                        <li><span></span><a href="#">T-shirts</a></li>
                                        <li><span></span><a href="#">Dresses</a></li>
                                        <li><span></span><a href="#">Jackets and coats </a></li>
                                        <li><span></span><a href="#">Knitted</a></li>
                                        <li><span></span><a href="#">Pants</a></li>
                                        <li><span></span><a href="#">Bags & Shoes</a></li>
                                        <li><span></span><a href="#">Best selling</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- ./layered -->
                        </div>
                    </div>
                    <!-- ./block category  -->
                    <!-- block filter -->
                    <div class="block left-module">
                        <p class="title_block">Filter selection</p>
                        <div class="block_content">
                            <!-- layered -->
                            <div class="layered layered-filter-price">
                                <!-- filter categgory -->
                                <div class="layered_subtitle">CATEGORIES</div>
                                <div class="layered-content">
                                    <ul class="check-box-list">
                                        <li>
                                            <input type="checkbox" id="c1" name="cc"/>
                                            <label for="c1">
                                                <span class="button"></span>
                                                Tops<span class="count">(10)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="c2" name="cc"/>
                                            <label for="c2">
                                                <span class="button"></span>
                                                T-shirts<span class="count">(10)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="c3" name="cc"/>
                                            <label for="c3">
                                                <span class="button"></span>
                                                Dresses<span class="count">(10)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="c4" name="cc"/>
                                            <label for="c4">
                                                <span class="button"></span>
                                                Jackets and coats<span class="count">(10)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="c5" name="cc"/>
                                            <label for="c5">
                                                <span class="button"></span>
                                                Knitted<span class="count">(10)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="c6" name="cc"/>
                                            <label for="c6">
                                                <span class="button"></span>
                                                Pants<span class="count">(10)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="c7" name="cc"/>
                                            <label for="c7">
                                                <span class="button"></span>
                                                Bags & Shoes<span class="count">(10)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="c8" name="cc"/>
                                            <label for="c8">
                                                <span class="button"></span>
                                                Best selling<span class="count">(10)</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <!-- ./filter categgory -->
                                <!-- filter price -->
                                <div class="layered_subtitle">price</div>
                                <div class="layered-content slider-range">

                                    <div data-label-reasult="Range:" data-min="0" data-max="500" data-unit="$"
                                         class="slider-range-price" data-value-min="50" data-value-max="350"></div>
                                    <div class="amount-range-price">Range: $50 - $350</div>
                                    <ul class="check-box-list">
                                        <li>
                                            <input type="checkbox" id="p1" name="cc"/>
                                            <label for="p1">
                                                <span class="button"></span>
                                                $20 - $50<span class="count">(0)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="p2" name="cc"/>
                                            <label for="p2">
                                                <span class="button"></span>
                                                $50 - $100<span class="count">(0)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="p3" name="cc"/>
                                            <label for="p3">
                                                <span class="button"></span>
                                                $100 - $250<span class="count">(0)</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <!-- ./filter price -->
                                <!-- filter color -->
                                <div class="layered_subtitle">Color</div>
                                <div class="layered-content filter-color">
                                    <ul class="check-box-list">
                                        <li>
                                            <input type="checkbox" id="color1" name="cc"/>
                                            <label style=" background:#aab2bd;" for="color1"><span
                                                        class="button"></span></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="color2" name="cc"/>
                                            <label style=" background:#cfc4a6;" for="color2"><span
                                                        class="button"></span></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="color3" name="cc"/>
                                            <label style=" background:#aab2bd;" for="color3"><span
                                                        class="button"></span></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="color4" name="cc"/>
                                            <label style=" background:#fccacd;" for="color4"><span
                                                        class="button"></span></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="color5" name="cc"/>
                                            <label style="background:#964b00;" for="color5"><span class="button"></span></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="color6" name="cc"/>
                                            <label style=" background:#faebd7;" for="color6"><span
                                                        class="button"></span></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="color7" name="cc"/>
                                            <label style=" background:#e84c3d;" for="color7"><span
                                                        class="button"></span></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="color8" name="cc"/>
                                            <label style=" background:#c19a6b;" for="color8"><span
                                                        class="button"></span></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="color9" name="cc"/>
                                            <label style=" background:#f39c11;" for="color9"><span
                                                        class="button"></span></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="color10" name="cc"/>
                                            <label style=" background:#5d9cec;" for="color10"><span
                                                        class="button"></span></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="color11" name="cc"/>
                                            <label style=" background:#a0d468;" for="color11"><span
                                                        class="button"></span></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="color12" name="cc"/>
                                            <label style=" background:#f1c40f;" for="color12"><span
                                                        class="button"></span></label>
                                        </li>

                                    </ul>
                                </div>
                                <!-- ./filter color -->
                                <!-- ./filter brand -->
                                <div class="layered_subtitle">brand</div>
                                <div class="layered-content filter-brand">
                                    <ul class="check-box-list">
                                        <li>
                                            <input type="checkbox" id="brand1" name="cc"/>
                                            <label for="brand1">
                                                <span class="button"></span>
                                                Channelo<span class="count">(0)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="brand2" name="cc"/>
                                            <label for="brand2">
                                                <span class="button"></span>
                                                Mamypokon<span class="count">(0)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="brand3" name="cc"/>
                                            <label for="brand3">
                                                <span class="button"></span>
                                                Pamperson<span class="count">(0)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="brand4" name="cc"/>
                                            <label for="brand4">
                                                <span class="button"></span>
                                                Pumano<span class="count">(0)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="brand5" name="cc"/>
                                            <label for="brand5">
                                                <span class="button"></span>
                                                AME<span class="count">(0)</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <!-- ./filter brand -->
                                <!-- ./filter size -->
                                <div class="layered_subtitle">Size</div>
                                <div class="layered-content filter-size">
                                    <ul class="check-box-list">
                                        <li>
                                            <input type="checkbox" id="size1" name="cc"/>
                                            <label for="size1">
                                                <span class="button"></span>X
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size2" name="cc"/>
                                            <label for="size2">
                                                <span class="button"></span>XXL
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size3" name="cc"/>
                                            <label for="size3">
                                                <span class="button"></span>XL
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size4" name="cc"/>
                                            <label for="size4">
                                                <span class="button"></span>XXL
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size5" name="cc"/>
                                            <label for="size5">
                                                <span class="button"></span>M
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size6" name="cc"/>
                                            <label for="size6">
                                                <span class="button"></span>XXS
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size7" name="cc"/>
                                            <label for="size7">
                                                <span class="button"></span>S
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size8" name="cc"/>
                                            <label for="size8">
                                                <span class="button"></span>XS
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size9" name="cc"/>
                                            <label for="size9">
                                                <span class="button"></span>34
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size10" name="cc"/>
                                            <label for="size10">
                                                <span class="button"></span>36
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size11" name="cc"/>
                                            <label for="size11">
                                                <span class="button"></span>35
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size12" name="cc"/>
                                            <label for="size12">
                                                <span class="button"></span>37
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <!-- ./filter size -->
                            </div>
                            <!-- ./layered -->

                        </div>
                    </div>
                    <!-- ./block filter  -->

                    <!-- left silide -->
                    <div class="col-left-slide left-module">
                        <ul class="owl-carousel owl-style2" data-loop="true" data-nav="false" data-margin="30"
                            data-autoplayTimeout="1000" data-autoplayHoverPause="true" data-items="1"
                            data-autoplay="true">
                            <li><a href="#"><img src="assets/data/slide-left.jpg" alt="slide-left"></a></li>
                            <li><a href="#"><img src="assets/data/slide-left2.jpg" alt="slide-left"></a></li>
                            <li><a href="#"><img src="assets/data/slide-left3.png" alt="slide-left"></a></li>
                        </ul>

                    </div>
                    <!--./left silde-->
                    <!-- SPECIAL -->
                    <div class="block left-module">
                        <p class="title_block">SPECIAL PRODUCTS</p>
                        <div class="block_content">
                            <ul class="products-block">
                                <li>
                                    <div class="products-block-left">
                                        <a href="#">
                                            <img src="assets/data/product-100x122.jpg" alt="SPECIAL PRODUCTS">
                                        </a>
                                    </div>
                                    <div class="products-block-right">
                                        <p class="product-name">
                                            <a href="#">Woman Within Plus Size Flared</a>
                                        </p>
                                        <p class="product-price">$38,95</p>
                                        <p class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <div class="products-block">
                                <div class="products-block-bottom">
                                    <a class="link-all" href="#">All Products</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./SPECIAL -->
                    <!-- TAGS -->
                    <div class="block left-module">
                        <p class="title_block">TAGS</p>
                        <div class="block_content">
                            <div class="tags">
                                <a href="#"><span class="level1">actual</span></a>
                                <a href="#"><span class="level2">adorable</span></a>
                                <a href="#"><span class="level3">change</span></a>
                                <a href="#"><span class="level4">consider</span></a>
                                <a href="#"><span class="level3">phenomenon</span></a>
                                <a href="#"><span class="level4">span</span></a>
                                <a href="#"><span class="level1">spanegs</span></a>
                                <a href="#"><span class="level5">spanegs</span></a>
                                <a href="#"><span class="level1">actual</span></a>
                                <a href="#"><span class="level2">adorable</span></a>
                                <a href="#"><span class="level3">change</span></a>
                                <a href="#"><span class="level4">consider</span></a>
                                <a href="#"><span class="level2">gives</span></a>
                                <a href="#"><span class="level3">change</span></a>
                                <a href="#"><span class="level2">gives</span></a>
                                <a href="#"><span class="level1">good</span></a>
                                <a href="#"><span class="level3">phenomenon</span></a>
                                <a href="#"><span class="level4">span</span></a>
                                <a href="#"><span class="level1">spanegs</span></a>
                                <a href="#"><span class="level5">spanegs</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- ./TAGS -->
                    <!-- Testimonials -->
                    <div class="block left-module">
                        <p class="title_block">Testimonials</p>
                        <div class="block_content">
                            <ul class="testimonials owl-carousel" data-loop="true" data-nav="false" data-margin="30"
                                data-autoplayTimeout="1000" data-autoplay="true" data-autoplayHoverPause="true"
                                data-items="1">
                                <li>
                                    <div class="client-mane">Roverto & Maria</div>
                                    <div class="client-avarta">
                                        <img src="assets/data/testimonial.jpg" alt="client-avarta">
                                    </div>
                                    <div class="testimonial">
                                        "Your product needs to improve more. To suit the needs and update your image up"
                                    </div>
                                </li>
                                <li>
                                    <div class="client-mane">Roverto & Maria</div>
                                    <div class="client-avarta">
                                        <img src="assets/data/testimonial.jpg" alt="client-avarta">
                                    </div>
                                    <div class="testimonial">
                                        "Your product needs to improve more. To suit the needs and update your image up"
                                    </div>
                                </li>
                                <li>
                                    <div class="client-mane">Roverto & Maria</div>
                                    <div class="client-avarta">
                                        <img src="assets/data/testimonial.jpg" alt="client-avarta">
                                    </div>
                                    <div class="testimonial">
                                        "Your product needs to improve more. To suit the needs and update your image up"
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- ./Testimonials -->
                </div>
                <!-- ./left colunm -->
                <!-- Center colunm-->
                <div class="center_column col-xs-12 col-sm-9" id="center_column">
                    <!-- Product -->
                    
                    <div id="product">
                        <div class="primary-box row">
                            <div class="pb-left-column col-xs-12 col-sm-6">
                                <!-- product-imge-->
                                <div class="product-image">
                                    <div class="product-full">
                                        <img id="product-zoom" src='{{url('storage/'.$product->image)
                                        }}'>
                                    </div>
                                    <div class="product-img-thumb" id="gallery_01">
                                        <ul class="owl-carousel" data-items="3" data-nav="true" data-dots="false"
                                            data-margin="20" data-loop="true">
                                            @foreach(json_decode($product->gallery,true) as $gallery_image)
                                            <li>
                                                <a href="#" data-image="{{asset('storage/'.$gallery_image)}}">
                                                    <img id="product-zoom"
                                                         src="{{asset('storage/'.$gallery_image)}}"/>
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-imge-->
                            </div>
                            <div class="pb-right-column col-xs-12 col-sm-6">
                                <h1 class="product-name">{{$product->name}}</h1>
                                <div class="product-comments">
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="comments-advices">
                                        <a href="#">Based on 3 ratings</a>
                                        <a href="#"><i class="fa fa-pencil"></i> write a review</a>
                                    </div>
                                </div>
                                <div class="product-price-group">
                                    <span class="price">$38.95</span>
                                    <span class="old-price">$52.00</span>
                                    <span class="discount">-30%</span>
                                </div>
                                <div class="info-orther">
                                    <p>Item Code: #453217907</p>
                                    <p>Availability: <span class="in-stock">In stock</span></p>
                                    <p>Condition: New</p>
                                </div>
                                <div class="product-desc">
                                    Vestibulum eu odio. Suspendisse potenti. Morbi mollis tellus ac sapien. Praesent
                                    egestas
                                    tristique nibh. Nullam dictum felis eu pede mollis pretium.Fusce egestas elit eget
                                    lorem.
                                </div>
                                <div class="form-option">
                                    <p class="form-option-title">Available Options:</p>
                                    <div class="attributes">
                                        <div class="attribute-label">Color:</div>
                                        <div class="attribute-list">
                                            <ul class="list-color">
                                                <li style="background:#0c3b90;"><a href="#">red</a></li>
                                                <li style="background:#036c5d;" class="active"><a href="#">red</a></li>
                                                <li style="background:#5f2363;"><a href="#">red</a></li>
                                                <li style="background:#ffc000;"><a href="#">red</a></li>
                                                <li style="background:#36a93c;"><a href="#">red</a></li>
                                                <li style="background:#ff0000;"><a href="#">red</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="attributes">
                                        <div class="attribute-label">Qty:</div>
                                        <div class="attribute-list product-qty">
                                            <div class="qty">
                                                <input id="option-product-qty" type="text" value="1">
                                            </div>
                                            <div class="btn-plus">
                                                <a href="#" class="btn-plus-up">
                                                    <i class="fa fa-caret-up"></i>
                                                </a>
                                                <a href="#" class="btn-plus-down">
                                                    <i class="fa fa-caret-down"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="attributes">
                                        <div class="attribute-label">Size:</div>
                                        <div class="attribute-list">
                                            <select>
                                                <option value="1">X</option>
                                                <option value="2">XL</option>
                                                <option value="3">XXL</option>
                                            </select>
                                            <a id="size_chart" class="fancybox" href="assets/data/size-chart.jpg">Size
                                                Chart</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-action">
                                    <div class="button-group">
                                        <a class="btn-add-cart" href="#">Add to cart</a>
                                    </div>
                                    <div class="button-group">
                                        <a class="wishlist" href="#"><i class="fa fa-heart-o"></i>
                                            <br>Wishlist</a>
                                        <a class="compare" href="#"><i class="fa fa-signal"></i>
                                            <br>
                                            Compare</a>
                                    </div>
                                </div>
                                <div class="form-share">
                                    <div class="sendtofriend-print">
                                        <a href="javascript:print();"><i class="fa fa-print"></i> Print</a>
                                        <a href="#"><i class="fa fa-envelope-o fa-fw"></i>Send to a friend</a>
                                    </div>
                                    <div class="network-share">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab product -->
                        <div class="product-tab">
                            <ul class="nav-tab">
                                <li class="active">
                                    <a aria-expanded="true" data-toggle="tab" href="#product-detail">Product Details</a>
                                </li>
                                <li class="">
                                    <a aria-expanded="false" data-toggle="tab" href="#information">information</a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" href="#reviews" aria-expanded="false">reviews</a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" href="#extra-tabs" aria-expanded="false">Extra Tabs</a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" href="#guarantees" aria-expanded="false">guarantees</a>
                                </li>
                            </ul>
                            <div class="tab-container">
                                <div id="product-detail" class="tab-panel active">
                                    <p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit
                                        viverra.
                                        Nunc nec neque. Pellentesque auctor neque nec urna.</p>

                                    <p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae,
                                        vestibulum
                                        eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per
                                        conubia nostra,
                                        per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>

                                    <p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae
                                        euismod ligula
                                        urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit
                                        quis, nisi.
                                        Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet
                                        convallis
                                        pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>
                                </div>
                                <div id="information" class="tab-panel">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td width="200">Compositions</td>
                                            <td>Cotton</td>
                                        </tr>
                                        <tr>
                                            <td>Styles</td>
                                            <td>Girly</td>
                                        </tr>
                                        <tr>
                                            <td>Properties</td>
                                            <td>Colorful Dress</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="reviews" class="tab-panel">
                                    <div class="product-comments-block-tab">
                                        <div class="comment row">
                                            <div class="col-sm-3 author">
                                                <div class="grade">
                                                    <span>Grade</span>
                                                    <span class="reviewRating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                                <div class="info-author">
                                                    <span><strong>Jame</strong></span>
                                                    <em>04/08/2015</em>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 commnet-dettail">
                                                Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet
                                                convallis
                                                pulvinar
                                            </div>
                                        </div>
                                        <div class="comment row">
                                            <div class="col-sm-3 author">
                                                <div class="grade">
                                                    <span>Grade</span>
                                                    <span class="reviewRating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                                <div class="info-author">
                                                    <span><strong>Author</strong></span>
                                                    <em>04/08/2015</em>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 commnet-dettail">
                                                Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet
                                                convallis
                                                pulvinar
                                            </div>
                                        </div>
                                        <p>
                                            <a class="btn-comment" href="#">Write your review !</a>
                                        </p>
                                    </div>

                                </div>
                                <div id="extra-tabs" class="tab-panel">
                                    <p>Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis
                                        pulvinar,
                                        justo nulla eleifend augue, ac auctor orci leo non est. Sed lectus. Sed a
                                        libero. Vestibulum
                                        eu odio.</p>

                                    <p>Maecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at
                                        lacus ac velit
                                        ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.</p>

                                    <p>Maecenas nec odio et ante tincidunt tempus. Vestibulum suscipit nulla quis orci.
                                        Aenean
                                        tellus metus, bibendum sed, posuere ac, mattis non, nunc. Aenean ut eros et nisl
                                        sagittis
                                        vestibulum. Aliquam eu nunc.</p>
                                </div>
                                <div id="guarantees" class="tab-panel">
                                    <p>Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis
                                        pulvinar,
                                        justo nulla eleifend augue, ac auctor orci leo non est. Sed lectus. Sed a
                                        libero. Vestibulum
                                        eu odio.</p>

                                    <p>Maecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at
                                        lacus ac velit
                                        ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.</p>

                                    <p>Maecenas nec odio et ante tincidunt tempus. Vestibulum suscipit nulla quis orci.
                                        Aenean
                                        tellus metus, bibendum sed, posuere ac, mattis non, nunc. Aenean ut eros et nisl
                                        sagittis
                                        vestibulum. Aliquam eu nunc.</p>
                                    <p>Maecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at
                                        lacus ac velit
                                        ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.</p>
                                </div>
                            </div>
                        </div>
                        <!-- ./tab product -->
                        <!-- box product -->
                        <div class="page-product-box">
                            <h3 class="heading">Related Products</h3>
                            <ul class="product-list owl-carousel owl-theme owl-loaded" data-dots="false"
                                data-loop="true"
                                data-nav="true" data-margin="30" data-autoplaytimeout="1000"
                                data-autoplayhoverpause="true"
                                data-responsive="{&quot;0&quot;:{&quot;items&quot;:1},&quot;600&quot;:{&quot;items&quot;:3},&quot;1000&quot;:{&quot;items&quot;:3}}">


                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                         style="transform: translate3d(-900px, 0px, 0px); transition: 0s; width: 3000px;">
                                        <div class="owl-item cloned" style="width: 270px; margin-right: 30px;">
                                            <li>
                                                <div class="product-container">
                                                    <div class="left-block">
                                                        <a href="#">
                                                            <img class="img-responsive" alt="product"
                                                                 src="assets/data/p35.jpg">
                                                        </a>
                                                        <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Maecenas consequat
                                                                mauris</a></h5>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 270px; margin-right: 30px;">
                                            <li>
                                                <div class="product-container">
                                                    <div class="left-block">
                                                        <a href="#">
                                                            <img class="img-responsive" alt="product"
                                                                 src="assets/data/p37.jpg">
                                                        </a>
                                                        <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Maecenas consequat
                                                                mauris</a></h5>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 270px; margin-right: 30px;">
                                            <li>
                                                <div class="product-container">
                                                    <div class="left-block">
                                                        <a href="#">
                                                            <img class="img-responsive" alt="product"
                                                                 src="assets/data/p39.jpg">
                                                        </a>
                                                        <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Maecenas consequat
                                                                mauris</a></h5>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item active" style="width: 270px; margin-right: 30px;">
                                            <li>
                                                <div class="product-container">
                                                    <div class="left-block">
                                                        <a href="#">
                                                            <img class="img-responsive" alt="product"
                                                                 src="assets/data/p40.jpg">
                                                        </a>
                                                        <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Maecenas consequat
                                                                mauris</a></h5>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item active" style="width: 270px; margin-right: 30px;">
                                            <li>
                                                <div class="product-container">
                                                    <div class="left-block">
                                                        <a href="#">
                                                            <img class="img-responsive" alt="product"
                                                                 src="assets/data/p35.jpg">
                                                        </a>
                                                        <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Maecenas consequat
                                                                mauris</a></h5>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item active" style="width: 270px; margin-right: 30px;">
                                            <li>
                                                <div class="product-container">
                                                    <div class="left-block">
                                                        <a href="#">
                                                            <img class="img-responsive" alt="product"
                                                                 src="assets/data/p37.jpg">
                                                        </a>
                                                        <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Maecenas consequat
                                                                mauris</a></h5>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item" style="width: 270px; margin-right: 30px;">
                                            <li>
                                                <div class="product-container">
                                                    <div class="left-block">
                                                        <a href="#">
                                                            <img class="img-responsive" alt="product"
                                                                 src="assets/data/p39.jpg">
                                                        </a>
                                                        <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Maecenas consequat
                                                                mauris</a></h5>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 270px; margin-right: 30px;">
                                            <li>
                                                <div class="product-container">
                                                    <div class="left-block">
                                                        <a href="#">
                                                            <img class="img-responsive" alt="product"
                                                                 src="assets/data/p40.jpg">
                                                        </a>
                                                        <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Maecenas consequat
                                                                mauris</a></h5>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 270px; margin-right: 30px;">
                                            <li>
                                                <div class="product-container">
                                                    <div class="left-block">
                                                        <a href="#">
                                                            <img class="img-responsive" alt="product"
                                                                 src="assets/data/p35.jpg">
                                                        </a>
                                                        <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Maecenas consequat
                                                                mauris</a></h5>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 270px; margin-right: 30px;">
                                            <li>
                                                <div class="product-container">
                                                    <div class="left-block">
                                                        <a href="#">
                                                            <img class="img-responsive" alt="product"
                                                                 src="assets/data/p37.jpg">
                                                        </a>
                                                        <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Maecenas consequat
                                                                mauris</a></h5>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-controls">
                                    <div class="owl-nav">
                                        <div class="owl-prev" style=""><i class="fa fa-angle-left"></i></div>
                                        <div class="owl-next" style=""><i class="fa fa-angle-right"></i></div>
                                    </div>
                                    <div class="owl-dots" style="display: none;"></div>
                                </div>
                            </ul>
                        </div>
                        <!-- ./box product -->
                        <!-- box product -->
                        <div class="page-product-box">
                            <h3 class="heading">You might also like</h3>
                            <ul class="product-list owl-carousel owl-theme owl-loaded" data-dots="false"
                                data-loop="true"
                                data-nav="true" data-margin="30" data-autoplaytimeout="1000"
                                data-autoplayhoverpause="true"
                                data-responsive="{&quot;0&quot;:{&quot;items&quot;:1},&quot;600&quot;:{&quot;items&quot;:3},&quot;1000&quot;:{&quot;items&quot;:3}}">


                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                         style="transform: translate3d(-900px, 0px, 0px); transition: 0s; width: 3000px;">
                                        <div class="owl-item cloned" style="width: 270px; margin-right: 30px;">
                                            <li>
                                                <div class="product-container">
                                                    <div class="left-block">
                                                        <a href="#">
                                                            <img class="img-responsive" alt="product"
                                                                 src="assets/data/p34.jpg">
                                                        </a>
                                                        <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Maecenas consequat
                                                                mauris</a></h5>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 270px; margin-right: 30px;">
                                            <li>
                                                <div class="product-container">
                                                    <div class="left-block">
                                                        <a href="#">
                                                            <img class="img-responsive" alt="product"
                                                                 src="assets/data/p36.jpg">
                                                        </a>
                                                        <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Maecenas consequat
                                                                mauris</a></h5>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 270px; margin-right: 30px;">
                                            <li>
                                                <div class="product-container">
                                                    <div class="left-block">
                                                        <a href="#">
                                                            <img class="img-responsive" alt="product"
                                                                 src="assets/data/p36.jpg">
                                                        </a>
                                                        <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Maecenas consequat
                                                                mauris</a></h5>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item active" style="width: 270px; margin-right: 30px;">
                                            <li>
                                                <div class="product-container">
                                                    <div class="left-block">
                                                        <a href="#">
                                                            <img class="img-responsive" alt="product"
                                                                 src="assets/data/p97.jpg">
                                                        </a>
                                                        <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Maecenas consequat
                                                                mauris</a></h5>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item active" style="width: 270px; margin-right: 30px;">
                                            <li>
                                                <div class="product-container">
                                                    <div class="left-block">
                                                        <a href="#">
                                                            <img class="img-responsive" alt="product"
                                                                 src="assets/data/p34.jpg">
                                                        </a>
                                                        <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Maecenas consequat
                                                                mauris</a></h5>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item active" style="width: 270px; margin-right: 30px;">
                                            <li>
                                                <div class="product-container">
                                                    <div class="left-block">
                                                        <a href="#">
                                                            <img class="img-responsive" alt="product"
                                                                 src="assets/data/p36.jpg">
                                                        </a>
                                                        <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Maecenas consequat
                                                                mauris</a></h5>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item" style="width: 270px; margin-right: 30px;">
                                            <li>
                                                <div class="product-container">
                                                    <div class="left-block">
                                                        <a href="#">
                                                            <img class="img-responsive" alt="product"
                                                                 src="assets/data/p36.jpg">
                                                        </a>
                                                        <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Maecenas consequat
                                                                mauris</a></h5>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 270px; margin-right: 30px;">
                                            <li>
                                                <div class="product-container">
                                                    <div class="left-block">
                                                        <a href="#">
                                                            <img class="img-responsive" alt="product"
                                                                 src="assets/data/p97.jpg">
                                                        </a>
                                                        <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Maecenas consequat
                                                                mauris</a></h5>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 270px; margin-right: 30px;">
                                            <li>
                                                <div class="product-container">
                                                    <div class="left-block">
                                                        <a href="#">
                                                            <img class="img-responsive" alt="product"
                                                                 src="assets/data/p34.jpg">
                                                        </a>
                                                        <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Maecenas consequat
                                                                mauris</a></h5>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 270px; margin-right: 30px;">
                                            <li>
                                                <div class="product-container">
                                                    <div class="left-block">
                                                        <a href="#">
                                                            <img class="img-responsive" alt="product"
                                                                 src="assets/data/p36.jpg">
                                                        </a>
                                                        <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Maecenas consequat
                                                                mauris</a></h5>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-controls">
                                    <div class="owl-nav">
                                        <div class="owl-prev" style=""><i class="fa fa-angle-left"></i></div>
                                        <div class="owl-next" style=""><i class="fa fa-angle-right"></i></div>
                                    </div>
                                    <div class="owl-dots" style="display: none;"></div>
                                </div>
                            </ul>
                        </div>
                        <!-- ./box product -->
                    </div>
                    <!-- Product -->
                </div>
                <!-- ./ Center colunm -->
            </div>
            <!-- ./row-->
        </div>
    </div>


@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('assets/lib/jquery.elevatezoom.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/lib/fancyBox/jquery.fancybox.js')}}"></script>
@endsection