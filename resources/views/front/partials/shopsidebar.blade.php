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
                            <li>
                                <span></span><a
                                        href="{{route('product.category',$category->slug)}}">{{$category->name}}</a>
                                @if($category->sub_categories($category->id)->count() > 0)
                                    <ul style="display: block" class="tree-menu">
                                        @foreach($category->sub_categories($category->id) as $subcategory)
                                            <li><span></span><a href="{{route('product.category',$subcategory->slug)
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
            @if(request()->route()->getName() == 'shop.products')
                <!-- filter price -->
                    <div class="layered_subtitle">Price Filter</div>
                    <div class="layered-content slider-range">
                        <div class="price-range"><!--price-range-->
                            <div>
                                <div class="price_input clearfix">
                                    <div class="min pull-left">
                                        Min: <p id="output_min_price">{{$overall_min_price}}</p>
                                    </div>
                                    <input type="range" name="min_price" id="min_price" value="{{$overall_min_price}}"
                                           min="{{$overall_min_price}}" max="{{$overall_max_price}}"
                                           onchange="output_min_price(this.value);" step="1">

                                    <input type="range" name="max_price" id="max_price" value="{{$overall_max_price}}"
                                           min="{{$overall_min_price}}" max="{{$overall_max_price}}"
                                           onchange="output_max_price(this.value);" step="1">
                                    <div class="max pull-right">Max: <p id="output_max_price">{{$overall_max_price}}
                                        </p></div>
                                    <input type="submit" value="Filter" id="filter_price" onclick="filter_price()">
                                </div>
                            </div>

                            <script>
                                function output_min_price(val) {
                                    document.getElementById('output_min_price').innerText = val;

                                }

                                function output_max_price(val) {
                                    document.getElementById('output_max_price').innerText = val;
                                }
                            </script>
                        </div><!--/price-range-->


                        <ul class="check-box-list">
                            <li><a href="{{ route( Illuminate\Support\Facades\Route::currentRouteName(), [ 'sortby' =>
                        'newest_items'])}}">Newest Items</a></li>
                            <li>
                                <a href="{{ route( Illuminate\Support\Facades\Route::currentRouteName(), ['sortby' => 'best_selling'])}}">Bestselling</a>
                            </li>
                            <li>
                                <a href="{{route( Illuminate\Support\Facades\Route::currentRouteName(), ['sortby' => 'low_to_high']) }}">Low
                                    to High</a></li>
                            <li><a href="{{ route( Illuminate\Support\Facades\Route::currentRouteName(), [ 'sortby' =>
                        'high_to_low'])
                         }}">High to
                                    Low</a></li>
                        </ul>
                    </div>
                    <!-- ./filter price -->
                @endif
            </div>
            <!-- ./layered -->

        </div>
    </div>
    <!-- ./block filter  -->
</div>

@section('scripts')
    <script>
        function filter_price() {
            var csrfToken = '{{csrf_token()}}';
            var min_price = document.getElementById('min_price').value;
            var max_price = document.getElementById('max_price').value;
            $.get('{{route('product.price_filter')}}', {
                    min_price: min_price, max_price: max_price,
                    _token: csrfToken
                },
                function
                    (data) {
                    $('#productList').html(data);
                });
        }
    </script>
@endsection