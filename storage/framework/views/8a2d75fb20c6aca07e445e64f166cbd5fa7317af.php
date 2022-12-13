<div class="main-wrapper">
    <div class="sidebar" id="sidebar">
                    <div class="sidebar-inner slimscroll">
                        <div id="sidebar-menu" class="sidebar-menu">
                            <ul>
                                <li class="menu-title">
                                    <span>Data</span>
                                </li>
                                <li class="<?php echo e(Request::is('home') ? 'active' : ''); ?>">
                                    <a href="<?php echo e(url('home')); ?>">
                                        <i class="la la-home"></i> <span>Home</span>
                                    </a>
                                </li>
                                <li class="<?php echo e(Request::is('datadiri') ? 'active' : ''); ?>">
                                    <a href="<?php echo e(url('datadiri')); ?>">
                                        <i class="la la-user"></i> <span>Data Diri</span>
                                    </a>
                                </li>
                                <li class="<?php echo e(Request::is('verifikasi2') ? 'active' : ''); ?>">
                                    <a href="<?php echo e(url('verifikasi2')); ?>">
                                        <i class="la la-check-circle"></i> <span>Verifikasi</span>
                                    </a>
                                </li>
                                <li class="<?php echo e(Request::is('datakeluarga') ? 'active' : ''); ?>">
                                    <a href="<?php echo e(url('datakeluarga')); ?>">
                                        <i class="la la-users"></i> <span>Data Keluarga</span>
                                    </a>
                                </li>
                                <li class="<?php echo e(Request::is('datapernikahan') ? 'active' : ''); ?>">
                                    <a href="<?php echo e(url('datapernikahan')); ?>">
                                        <i class="la la-users"></i> <span>Data Pernikahan</span>
                                    </a>
                                </li>
                                
                            </ul>   
                        </div>
                    </div>
                </div>
                </div>


<?php /**PATH C:\xampp\htdocs\dapensri-office\resources\views/layout/user/nav2.blade.php ENDPATH**/ ?>