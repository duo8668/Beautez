<!-- #NAVIGATION -->
<!-- Left panel : Navigation area -->
<aside id="left-panel">
    @include('includes.user.baruserinfo')
    <nav>
        <ul>
            @include('includes.menus.sidemenu')
            <li class="">
                <a href="#" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
                <ul>
                    <li class="">
                        <a href="ajax/dashboard.html" title="Dashboard"><span class="menu-item-parent">Analytics Dashboard</span></a>
                    </li>
                    <li class="">
                        <a href="ajax/dashboard-social.html" title="Dashboard"><span class="menu-item-parent">Social Wall</span></a>
                    </li>
                </ul>	
            </li>
            <li class="top-menu-invisible">
                <a href="#"><i class="fa fa-lg fa-fw fa-cube txt-color-blue"></i> <span class="menu-item-parent">SmartAdmin Intel</span></a>
                <ul>
                    <li class="">
                        <a href="ajax/layouts.html" title="Dashboard"><i class="fa fa-lg fa-fw fa-gear"></i> <span class="menu-item-parent">App Layouts</span></a>
                    </li>
                    <li class="">
                        <a href="ajax/skins.html" title="Dashboard"><i class="fa fa-lg fa-fw fa-picture-o"></i> <span class="menu-item-parent">Prebuilt Skins</span></a>
                    </li>
                    <li>
                        <a href="ajax/difver.html"><i class="fa fa-stack-overflow"></i> App Variations</a>
                    </li>
                    <li>
                        <a href="ajax/applayout.html"><i class="fa fa-cube"></i> App Settings</a>
                    </li>
                </ul>
            </li>


            <li class="chat-users top-menu-invisible">
                <a href="#"><i class="fa fa-lg fa-fw fa-comment-o"><em class="bg-color-pink flash animated">!</em></i> <span class="menu-item-parent">Smart Chat API <sup>beta</sup></span></a>
                <ul>
                    <li>
                        <!-- DISPLAY USERS -->
                        <div class="display-users">

                            <input class="form-control chat-user-filter" placeholder="Filter" type="text">

                            <a href="#" class="usr" 
                               data-chat-id="cha1" 
                               data-chat-fname="Sadi" 
                               data-chat-lname="Orlaf" 
                               data-chat-status="busy" 
                               data-chat-alertmsg="Sadi Orlaf is in a meeting. Please do not disturb!" 
                               data-chat-alertshow="true" 
                               data-rel="popover-hover" 
                               data-placement="right" 
                               data-html="true" 
                               data-content="
                               <div class='usr-card'>
                               <img src='img/avatars/5.png' alt='Sadi Orlaf'>
                               <div class='usr-card-content'>
                               <h3>Sadi Orlaf</h3>
                               <p>Marketing Executive</p>
                               </div>
                               </div>
                               "> 
                                <i></i>Sadi Orlaf
                            </a>

                            <a href="#" class="usr" 
                               data-chat-id="cha2" 
                               data-chat-fname="Jessica" 
                               data-chat-lname="Dolof" 
                               data-chat-status="online" 
                               data-chat-alertmsg="" 
                               data-chat-alertshow="false" 
                               data-rel="popover-hover" 
                               data-placement="right" 
                               data-html="true" 
                               data-content="
                               <div class='usr-card'>
                               <img src='img/avatars/1.png' alt='Jessica Dolof'>
                               <div class='usr-card-content'>
                               <h3>Jessica Dolof</h3>
                               <p>Sales Administrator</p>
                               </div>
                               </div>
                               "> 
                                <i></i>Jessica Dolof
                            </a>

                            <a href="#" class="usr" 
                               data-chat-id="cha3" 
                               data-chat-fname="Zekarburg" 
                               data-chat-lname="Almandalie" 
                               data-chat-status="online" 
                               data-rel="popover-hover" 
                               data-placement="right" 
                               data-html="true" 
                               data-content="
                               <div class='usr-card'>
                               <img src='img/avatars/3.png' alt='Zekarburg Almandalie'>
                               <div class='usr-card-content'>
                               <h3>Zekarburg Almandalie</h3>
                               <p>Sales Admin</p>
                               </div>
                               </div>
                               "> 
                                <i></i>Zekarburg Almandalie
                            </a>

                            <a href="#" class="usr" 
                               data-chat-id="cha4" 
                               data-chat-fname="Barley" 
                               data-chat-lname="Krazurkth" 
                               data-chat-status="away" 
                               data-rel="popover-hover" 
                               data-placement="right" 
                               data-html="true" 
                               data-content="
                               <div class='usr-card'>
                               <img src='img/avatars/4.png' alt='Barley Krazurkth'>
                               <div class='usr-card-content'>
                               <h3>Barley Krazurkth</h3>
                               <p>Sales Director</p>
                               </div>
                               </div>
                               "> 
                                <i></i>Barley Krazurkth
                            </a>

                            <a href="#" class="usr offline" 
                               data-chat-id="cha5" 
                               data-chat-fname="Farhana" 
                               data-chat-lname="Amrin" 
                               data-chat-status="incognito" 
                               data-rel="popover-hover" 
                               data-placement="right" 
                               data-html="true" 
                               data-content="
                               <div class='usr-card'>
                               <img src='img/avatars/female.png' alt='Farhana Amrin'>
                               <div class='usr-card-content'>
                               <h3>Farhana Amrin</h3>
                               <p>Support Admin <small><i class='fa fa-music'></i> Playing Beethoven Classics</small></p>
                               </div>
                               </div>
                               "> 
                                <i></i>Farhana Amrin (offline)
                            </a>

                            <a href="#" class="usr offline" 
                               data-chat-id="cha6" 
                               data-chat-fname="Lezley" 
                               data-chat-lname="Jacob" 
                               data-chat-status="incognito" 
                               data-rel="popover-hover" 
                               data-placement="right" 
                               data-html="true" 
                               data-content="
                               <div class='usr-card'>
                               <img src='img/avatars/male.png' alt='Lezley Jacob'>
                               <div class='usr-card-content'>
                               <h3>Lezley Jacob</h3>
                               <p>Sales Director</p>
                               </div>
                               </div>
                               "> 
                                <i></i>Lezley Jacob (offline)
                            </a>

                            <a href="ajax/chat.html" class="btn btn-xs btn-default btn-block sa-chat-learnmore-btn">About the API</a>

                        </div>
                        <!-- END DISPLAY USERS -->
                    </li>
                </ul>	
            </li>
        </ul>
    </nav>
    <a href="#ajax/difver.html" class="btn btn-primary nav-demo-btn"><i class="fa fa-info-circle"></i> SmartAdmin Package (187 MB)</a>



    <span class="minifyme" data-action="minifyMenu"> <i class="fa fa-arrow-circle-left hit"></i> </span>

</aside>
<!-- END NAVIGATION -->
