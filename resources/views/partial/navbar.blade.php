<?php  ?>


        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <label><font color="white" face="arrial" size="6" style="
                        padding: 10px 5px 5px 15px;
                        float: right;">TABUNGANKU</font>
                </label>
                <div style="padding: 10px 50px 5px 50px; float: right;">
                    <!-- <a href="#" title="Akun"><img style="border-radius: 200px; " width="50px" src="img/user/user.png" alt="Pengguna"></a> -->
                    <!-- <a onclick="return confirm('yakin ingin meninggalkan halaman ini?')" href="logout.php" class="btn btn-danger" title="Keluar"><i class="fa fa-power-off fa-2x"></i></a> -->
                </div>
        </nav>   
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li><font color="white"> Selamat Datang Kembali @auth<strong>{{ auth()->user()->name }}</strong> @else <strong>User</strong> @endauth </font></li>
                    <li>
                        <a  href="/"><i class="fa fa-home fa-2x"></i> Dashboard</a>
                    </li>

                    @auth
                    <li>
                        <a  href="/user"><i class="fa fa-users fa-2x"></i> Data User</a>
                    </li>
                    <li>
                        <a  href="#"><i class="fa fa-user fa-2x"></i> Data Admin</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-laptop fa-2x"></i> Data Tabungan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a  href="#"></i>Data </a></li>
                            <li><a  href="/siswa"></i>Data Siswa</a></li>
                            <li><a  href="/tabunganmasuk"></i>Tabungan Masuk</a></li>
                            <li><a  href="/tabungankeluar"></i>Tabungan Keluar</a></li>
                            <li><a  href="/rekapitulasitabungan"></i>Rekapitulasi</a></li>
                        </ul>
                    </li>
                    <li>
                        <a  href="/logout"><i class="fa fa-power-off fa-2x"></i> Keluar</a>
                        <!-- <form action="/logout" method="POST">
                            @csrf
                            <button><i class="fa fa-power-off fa-2x"></i> Keluar</button>
                        </form> -->
                    </li>
                    @endauth

                    @guest
                    <li>
                        <a  href="/login"><i class="fa fa-power-off fa-2x"></i> Login</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->