<div class="main-wrapper">
    <div class="sidebar" id="sidebar">
                    <div class="sidebar-inner slimscroll">
                        <div id="sidebar-menu" class="sidebar-menu">
                            <ul>
                                <li class="menu-title">
                                    <span>Data</span>
                                </li>
                                <li class="{{ Request::is('home') ? 'active' : '' }}">
                                    <a href="{{url('home')}}">
                                        <i class="la la-home"></i> <span>Home</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('datadiri') ? 'active' : '' }}">
                                    <a href="{{url('datadiri')}}">
                                        <i class="la la-user"></i> <span>Data Diri</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('verifikasi2') ? 'active' : '' }}">
                                    <a href="{{url('verifikasi2')}}">
                                        <i class="la la-check-circle"></i> <span>Verifikasi</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('datakeluarga') ? 'active' : '' }}">
                                    <a href="{{url('datakeluarga')}}">
                                        <i class="la la-users"></i> <span>Data Keluarga</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('datapernikahan') ? 'active' : '' }}">
                                    <a href="{{url('datapernikahan')}}">
                                        <i class="la la-users"></i> <span>Data Pernikahan</span>
                                    </a>
                                </li>
                                
                            </ul>   
                        </div>
                    </div>
                </div>
                </div>


