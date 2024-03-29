<style>
    .header-navbar {
        background: #f1467e;
        color: white;
    }

    .user-name {
        color: white;
    }

    .dropdown-toggle::after {
        color: white;
    }
</style>
<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper container">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item"><a class="navbar-brand" href="<?= base_url('staffdosen') ?>"><img class="brand-logo" alt="robust admin logo" src="<?php echo base_url('robust/app-assets/images/logo/logo-light-sm_mmc.png') ?>">
                        <h3 class="brand-text"><strong>MMC</strong></h3>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <span class="avatar avatar-online">
                                <?php if (session()->get('fotoprofil') == NULL) { ?>
                                    <img src="<?php echo base_url('robust/app-assets/images/portrait/medium/avatar-m-1.png') ?>" alt="avatar">

                                <?php } elseif (session()->get('fotoprofil') != NULL) { ?>
                                    <img src="<?php echo base_url('fotoprofilstaffdosen/' . session()->get('fotoprofil')) ?>" alt="avatar">

                                <?php } ?>
                            </span>
                            <span class="user-name"><?= session()->get('nama') ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="<?= base_url('staffdosen/profil') ?>"><i class="ft-user"></i> Edit Profile</a>
                            <a class="dropdown-item" href="<?= base_url('login/logout') ?>"><i class="ft-power"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>