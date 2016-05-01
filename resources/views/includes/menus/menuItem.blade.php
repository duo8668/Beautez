<ul class="treeview-menu">
    @foreach ($sideMenus as $sideMenu)
    <li>
        <a href="{{$sideMenu->link}}"><i class="fa {{$sideMenu->fontAwesome}}"></i>{{$sideMenu->title}}
            @if(!empty($sideMenu->children))<i class="fa fa-angle-left pull-right"></i>@endif
        </a>
        @if(!empty($sideMenu->children))
        <!-- need to include menu item -->
        @include('includes.menus.menuItem', array('sideMenus' => $sideMenu->children))
        @endif
    </li>
    @endforeach
</ul>