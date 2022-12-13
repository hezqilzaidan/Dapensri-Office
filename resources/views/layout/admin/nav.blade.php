<div class="main-wrapper">
    <div class="sidebar" id="sidebar">
                    <div class="sidebar-inner slimscroll">
                        <div id="sidebar-menu" class="sidebar-menu">
                            <ul>
                                <li class="menu-title">
                                    <span>Data</span>
                                </li>
                                <li class="{{ Request::is('List_Ex') ? 'active' : '' }}">
                                    <a href="{{url('List_Ex')}}">
                                        <i class="la la-user"></i> <span>Ex Karyawan</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('keluarga') ? 'active' : '' }}">
                                    <a href="{{url('keluarga')}}">
                                        <i class="la la-users"></i> <span>Keluarga Ex Karyawan</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('verifikasi') ? 'active' : '' }}">
                                    <a href="{{url('verifikasi')}}">
                                        <i class="la la-check-circle"></i> <span>Verifikasi</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('lapKeu') ? 'active' : '' }}">
                                    <a  href="{{url('lapKeu')}}"> <i class="la la-money"></i> <span> Laporan Keuangan </span></a>
                                </li>
                                <li class="{{ Request::is('spt') ? 'active' : '' }}">
                                    <a  href="{{url('spt')}}"> <i class="la la-file-text"></i> <span> SPT </span>  </a>
                                </li>
                                <li class="{{ Request::is('useMob') ? 'active' : '' }}">
                                    <a  href="{{url('userMob')}}"> <i class="la la-mobile-phone"></i> <span> Pengguna Mobile Dapen </span>  </a>

                            </ul>
                        </div>
                    </div>
                </div>
                </div>


