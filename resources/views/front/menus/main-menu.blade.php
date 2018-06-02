<ul class="nav navbar-nav">
    @foreach($items as $menu_item)
        @php
            $submenu = $menu_item->children;
        @endphp
        <li class="{{$submenu->count() > 0 ? 'dropdown' : ''}} {{Request::url() == $menu_item->link() ? 'active' :
        ''}}">
            <a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>
            <ul class="{{$submenu->count() > 0 ? 'dropdown-menu' : ''}} container-fluid">
                <li class="block-container">
                    <ul class="block">
                        @foreach($submenu as $item)
                            <li class="link_container"><a href="{{$item->url}}">{{$item->title}} </a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </li>
    @endforeach
</ul>