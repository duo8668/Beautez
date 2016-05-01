@foreach ($sideMenus as $sideMenu)
<li class="treeview">
    <a href="{{$sideMenu->link}}">
        <i class="fa {{$sideMenu->fontAwesome}}"></i><span>{{$sideMenu->title}}</span>
        @if(!empty($sideMenu->children))<i class="fa fa-angle-left pull-right"></i>@endif
    </a>
    @if(!empty($sideMenu->children))
    <!-- need to include menu item -->
    @include('includes.menus.menuItem', array('sideMenus' => $sideMenu->children))
    @endif
</li>
@endforeach