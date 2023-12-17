<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?= base_url() ?>template/assets/img/logoitera1.jpg" class="user-image img-responsive"/>
                    <li>
                        <a  href="<?= base_url() ?>"><i class="fa fa-globe"></i>PEMETAAN</a>
                    </li>
                    <li>
                        <a  href="<?= base_url('gedung') ?>"><i class="fa fa-plus"></i>GEDUNG </a>
                    </li>
                    <li>
                        <a  href="<?= base_url('home/geojson') ?>"><i class="fa fa-map-marker"></i>TOPONIM</a>
                    </li>
                    <li>
                        <a  href="<?= base_url('sekolah/input') ?>"><i class="fa fa-plus"></i>TAMBAHKAN DATA</a>
                    </li>
                    <li>
                        <a  href="<?= base_url('admin') ?>"><i class="fa fa-users"></i>PENGGUNA </a>
                    </li>
                    <li>
                        <a  href="<?= base_url('admin/input') ?>"><i class="fa fa-plus"></i>TAMBAHKAN PENGGUNA</a>
                    </li>
				</li>
					

                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2><?= $title ?></h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />