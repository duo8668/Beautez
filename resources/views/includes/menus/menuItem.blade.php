<ul>
    @foreach ($sideMenus as $sideMenu)
    <li>
        <a href="#{{$sideMenu->link}}">
            <i class="fa fa-lg fa-fw {{$sideMenu->fontAwesome}}"></i>
            <span class="menu-item-parent">{{$sideMenu->title}}</span>
        </a>
        @if(!empty($sideMenu->children))
        <!-- need to include menu item -->
        @include('includes.menus.menuItem', array('sideMenus' => $sideMenu->children))
        @endif
    </li>
    @endforeach
</ul>