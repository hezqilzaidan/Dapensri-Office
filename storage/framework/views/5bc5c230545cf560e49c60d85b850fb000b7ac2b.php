<div class="main-wrapper">
    <div class="sidebar" id="sidebar">
                    <div class="sidebar-inner slimscroll">
                        <div id="sidebar-menu" class="sidebar-menu">
                            <ul>
                                <li class="menu-title">
                                    <span>Data</span>
                                </li>
                                <li class="<?php echo e(Request::is('List_Ex') ? 'active' : ''); ?>">
                                    <a href="<?php echo e(url('List_Ex')); ?>">
                                        <i class="la la-user"></i> <span>Ex Karyawan</span>
                                    </a>
                                </li>
                                <li class="<?php echo e(Request::is('keluarga') ? 'active' : ''); ?>">
                                    <a href="<?php echo e(url('keluarga')); ?>">
                                        <i class="la la-users"></i> <span>Keluarga Ex Karyawan</span>
                                    </a>
                                </li>
                                <li class="<?php echo e(Request::is('verifikasi') ? 'active' : ''); ?>">
                                    <a href="<?php echo e(url('verifikasi')); ?>">
                                        <i class="la la-check-circle"></i> <span>Verifikasi</span>
                                    </a>
                                </li>
                                <li class="<?php echo e(Request::is('lapKeu') ? 'active' : ''); ?>">
                                    <a  href="<?php echo e(url('lapKeu')); ?>"> <i class="la la-money"></i> <span> Laporan Keuangan </span></a>
                                </li>
                                <li class="<?php echo e(Request::is('spt') ? 'active' : ''); ?>">
                                    <a  href="<?php echo e(url('spt')); ?>"> <i class="la la-file-text"></i> <span> SPT </span>  </a>
                                </li>
                                <li class="<?php echo e(Request::is('useMob') ? 'active' : ''); ?>">
                                    <a  href="<?php echo e(url('userMob')); ?>"> <i class="la la-mobile-phone"></i> <span> Pengguna Mobile Dapen </span>  </a>

                            </ul>
                        </div>
                    </div>
                </div>
                </div>


<?php /**PATH C:\xampp\htdocs\dapensri-office\resources\views/layout/admin/nav.blade.php ENDPATH**/ ?>