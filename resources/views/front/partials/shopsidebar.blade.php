<div class="column col-xs-12 col-sm-3" id="left_column">
    <!-- block category -->
    <div class="block left-module">
        <p class="title_block">Product Categories</p>
        <div class="block_content">
            <!-- layered -->
            <div class="layered layered-category">
                <div class="layered-content">
                    <ul class="tree-menu">
                        @forelse($product_categories as $category)
                        <li >
                            <span></span><a href="{{route('product.category',$category->slug)}}">{{$category->name}}</a>
                            @if($category->sub_categories($category->id)->count() > 0)
                            <ul style="display: block"  class="tree-menu">
                                @foreach($category->sub_categories($category->id) as $subcategory)
                                    <li ><span></span><a href="{{route('product.category',$subcategory->slug)
                                    }}">{{$subcategory->name}}</a></li>
                                    @foreach($category->sub_categories($subcategory->id) as $sub_sub_category)
                                        @if($category->sub_categories($subcategory->id)->count() > 0)
                                        <ul style="display: block">
                                            <li class="level-3rd"><span></span><a
                                                        href="{{route('product.category',$sub_sub_category->slug)
                                                        }}"><i class="fa fa-angle-right"></i>
                                                    {{$sub_sub_category->name}}</a></li>
                                        </ul>
                                        @endif
                                    @endforeach
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @empty
                            <li><span>No Product Category Created!</span></li>
                        @endforelse
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
                            <input type="checkbox" id="c1" name="cc" />
                            <label for="c1">
                                <span class="button"></span>
                                Tops<span class="count">(10)</span>
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" id="c2" name="cc" />
                            <label for="c2">
                                <span class="button"></span>
                                T-shirts<span class="count">(10)</span>
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" id="c3" name="cc" />
                            <label for="c3">
                                <span class="button"></span>
                                Dresses<span class="count">(10)</span>
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" id="c4" name="cc" />
                            <label for="c4">
                                <span class="button"></span>
                                Jackets and coats<span class="count">(10)</span>
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" id="c5" name="cc" />
                            <label for="c5">
                                <span class="button"></span>
                                Knitted<span class="count">(10)</span>
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" id="c6" name="cc" />
                            <label for="c6">
                                <span class="button"></span>
                                Pants<span class="count">(10)</span>
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" id="c7" name="cc" />
                            <label for="c7">
                                <span class="button"></span>
                                Bags & Shoes<span class="count">(10)</span>
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" id="c8" name="cc" />
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

                    <div data-label-reasult="Range:" data-min="0" data-max="500" data-unit="$" class="slider-range-price" data-value-min="50" data-value-max="350"></div>
                    <div class="amount-range-price">Range: $50 - $350</div>
                    <ul class="check-box-list">
                        <li><a href="{{ route( Illuminate\Support\Facades\Route::currentRouteName(), [ 'sortby' =>
                        'newest_items'])}}">Newest Items</a></li>
                        <li><a href="{{ route( Illuminate\Support\Facades\Route::currentRouteName(), ['sortby' => 'best_selling'])}}">Bestselling</a></li>
                        <li><a href="{{route( Illuminate\Support\Facades\Route::currentRouteName(), ['sortby' => 'low_to_high']) }}">Low to High</a></li>
                        <li><a href="{{ route( Illuminate\Support\Facades\Route::currentRouteName(), [ 'sortby' =>
                        'high_to_low'])
                         }}">High to
                            Low</a></li>
                    </ul>
                </div>
                <!-- ./filter price -->
            </div>
            <!-- ./layered -->

        </div>
    </div>
    <!-- ./block filter  -->

    <!-- left silide -->
    <div class="col-left-slide left-module">
        <ul class="owl-carousel owl-style2" data-loop="true" data-nav = "false" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
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
            <ul class="testimonials owl-carousel" data-loop="true" data-nav = "false" data-margin = "30" data-autoplayTimeout="1000" data-autoplay="true" data-autoplayHoverPause = "true" data-items="1">
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