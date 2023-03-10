<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
                Creative Tim
            </a>
        </div>

        <ul class="nav">
            <li @class(['active'=> Request::is('/')])>
                <a href="/">
                    <i class="ti-panel"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{Request::is('user')?'active':''}}">
                <a href="/user">
                    <i class="ti-user"></i>
                    <p>User Profile</p>
                    
                </a>
            </li>
            <li class="{{Request::is('table')?'active':''}}">
                <a href="/table">
                    <i class="ti-view-list-alt"></i>
                    <p>Table List</p>
                </a>
            </li>
            <li class="{{Request::is('typography')?'active':''}}">
                <a href="/typography">
                    <i class="ti-text"></i>
                    <p>Typography</p>
                </a>
            </li>
            <li class="{{Request::is('icons')?'active':''}}">
                <a href="/icons">
                    <i class="ti-pencil-alt2"></i>
                    <p>Icons</p>
                </a>
            </li>
            <li class="{{Request::is('maps')?'active':''}}">
                <a href="/maps">
                    <i class="ti-map"></i>
                    <p>Maps</p>
                </a>
            </li>
            <li class="{{Request::is('notifications')?'active':''}}">
                <a href="/notifications">
                    <i class="ti-bell"></i>
                    <p>Notifications</p>
                </a>
            </li>
            <li class="active-pro">
                <a href="upgrade.html">
                    <i class="ti-export"></i>
                    <p>Upgrade to PRO</p>
                </a>
            </li>
        </ul>
    </div>
</div>