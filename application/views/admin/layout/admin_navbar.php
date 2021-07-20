<header class="app-header fixed-top">
    <div class="app-header-inner">
        <div class="container-fluid py-2">
            <div class="app-header-content">
                <div class="row justify-content-between align-items-center">

                    <div class="col-auto">
                        <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                role="img">
                                <title>Menu</title>
                                <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                    stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
                            </svg>
                        </a>
                    </div>
                    <!--//col-->
                    <div class="search-mobile-trigger d-sm-none col">
                        <i class="search-mobile-trigger-icon fas fa-search"></i>
                    </div>
                    <!--//col-->
                    <div class="app-search-box col">
                        <form class="app-search-form">
                            <input type="text" placeholder="Search..." name="search" class="form-control search-input">
                            <button type="submit" class="btn search-btn btn-primary" value="Search"><i
                                    class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <!--//app-search-box-->

                    <div class="app-utilities col-auto">
                        <div class="app-utility-item app-user-dropdown dropdown">
                            <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#"
                                role="button" aria-expanded="false"><img src="assets/images/user.png"
                                    alt="user profile"></a>
                            <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
                                <li><a class="dropdown-item" href="account.html">Account</a></li>
                                <li><a class="dropdown-item" href="settings.html">Settings</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="login.html">Log Out</a></li>
                            </ul>
                        </div>
                        <!--//app-user-dropdown-->
                    </div>
                    <!--//app-utilities-->
                </div>
                <!--//row-->
            </div>
            <!--//app-header-content-->
        </div>
        <!--//container-fluid-->
    </div>
    <!--//app-header-inner-->
    <div id="app-sidepanel" class="app-sidepanel">
        <div id="sidepanel-drop" class="sidepanel-drop"></div>
        <div class="sidepanel-inner d-flex flex-column">
            <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
            <div class="app-branding">
                <!-- <a class="app-logo" href="index.html"><img class="logo-icon me-2" src="assets/images/app-logo.svg"  alt="logo"> -->
                <span class="logo-text">ระบบจัดการสารสนเทศ</span></a>
            </div>
            <!--//app-branding-->

            <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
                <ul class="app-menu list-unstyled accordion" id="menu-accordion">
                    <li class="nav-item"> 
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class="nav-link <?=$this->uri->segment(2) == "Home" ? "active" : ""?>" href="<?=base_url('admin')?>">
                            <span class="nav-icon">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z" />
                                    <path fill-rule="evenodd"
                                        d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                </svg>
                            </span>
                            <span class="nav-link-text">หน้าแรก</span>
                        </a>
                        <!--//nav-link-->
                    </li>

                    <!-- Divider -->
                    <hr class="sidebar-divider">
                    <?php $status = $this->session->userdata('status')?>

                    <?php   $ar = array('เมนูหลัก','ข้อมูลเบื้องต้น','ข้อมูลระบบ','ระบบโรงเรียน');
      foreach ($ar as $k_value => $value) :  ?>

                    <?php if($this->session->userdata('status') != 'user') : ?> 
                    <div class="sidebar-heading mx-3"><?=$value;?></div>
                    <?php endif; ?>

                    <?php  foreach ($menu as $k_menu => $v_menu) :
                if($v_menu->Amenu_group == $k_value && $v_menu->Amenu_submenu == ''): 
                      $permi_menu = @explode("|",$v_menu->Amenu_permission);
                      $permi_user = @explode("|",$this->session->userdata('permission_menu'));
                  
                  if($v_menu->Amenu_url != '#' ):  
                       foreach ($permi_menu as $key => $v_permi):
                          if(in_array($v_permi,$permi_user)  || $status =='admin'):
                            $url = explode("/",$v_menu->Amenu_url);
      ?>
                    <li class="nav-item">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class="nav-link <?=$this->uri->segment(2) == $url[1] ? "active" : ""?>" href="<?=base_url($v_menu->Amenu_url);?>">
                            <span class="nav-icon">
                            <i class="fas fa-fw fa-cog"></i>
                            </span>
                            <span class="nav-link-text"><?=$v_menu->Amenu_name?></span>
                        </a>
                        <!--//nav-link-->
                    </li>

                    <?php endif; ?>
                    <?php  endforeach; ?>
                    <?php else: ?>
                    <?php 
                      foreach ($permi_menu as $key => $v_permi):
                          if(in_array($v_permi,$permi_user)  || $status =='admin'):
                  ?>
                    <li class="nav-item has-submenu">
                        <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse"
                            data-bs-target="#submenu-<?=$k_menu?>" aria-expanded="false" aria-controls="submenu-<?=$k_menu?>">
                            <span class="nav-icon">
                            <i class="fas fa-fw fa-folder"></i>
                            </span>
                            <span class="nav-link-text"><?=$v_menu->Amenu_name?></span>
                            <span class="submenu-arrow">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </span>
                            <!--//submenu-arrow-->
                        </a>
                        <!--//nav-link-->
                        <div id="submenu-<?=$k_menu?>" class="collapse submenu submenu-<?=$k_menu?>" data-bs-parent="#menu-accordion">
                            <ul class="submenu-list list-unstyled">
                            <?php foreach ($menu as $k_menusub => $v_menusub) : 
                                    if($v_menusub->Amenu_submenu == $v_menu->Amenu_id):?>
                                     <li class="submenu-item"><a class="submenu-link" href="<?=base_url($v_menusub->Amenu_url);?>"><?=$v_menusub->Amenu_name;?></a></li>
                                <?php endif; ?>
                            <?php endforeach; ?>

                            </ul>
                        </div>
                    </li>
                    <!--//nav-item-->

                    <?php endif; ?>
                    <?php  endforeach; ?>
                    <?php endif;
              endif;
            endforeach;?>
                    <?php if($this->session->userdata('status') != 'user') : ?>
                    <hr class="sidebar-divider"><?php endif; ?>

                    <?php endforeach; 
          ?>
                 
           
                </ul>
                <!--//app-menu-->
            </nav>
            <!--//app-nav-->

        </div>
        <!--//sidepanel-inner-->
    </div>
    <!--//app-sidepanel-->
</header>
<!--//app-header-->