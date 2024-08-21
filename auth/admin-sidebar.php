<body class="navbar-fixed sidebar-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    
    <div id="toaster"></div>
    

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">
      
      
        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar sidebar-dark" id="left-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="/index.html">
                <img src="images/logo.png" alt="Mono">
                <span class="brand-name">MONO</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-left" data-simplebar style="height: 100%;">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                

              <!-- all user start -->
              <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#other-user"
                      aria-expanded="false" aria-controls="other-user">
                      <i class="mdi mdi-file-multiple"></i>
                      <span class="nav-text">User</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="other-user"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
 
                          
                            <li >
                              <a class="sidenav-item-link" href="user-all.php">
                                <span class="nav-text">all</span>
                                
                              </a>
                            </li>
                          

                        
                      </div>
                    </ul>
                  </li>
              <!-- all user end -->
                

                
              <!-- prodcut category start here -->
                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#other-page"
                      aria-expanded="false" aria-controls="other-page">
                      <i class="mdi mdi-file-multiple"></i>
                      <span class="nav-text">Category</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="other-page"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">

                        
                          
                            <li >
                              <a class="sidenav-item-link" href="cat-all.php">
                                <span class="nav-text">all</span>
                                
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="cat-add.php">
                                <span class="nav-text">add new</span>
                                
                              </a>
                            </li>

                        
                      </div>
                    </ul>
                </li>
              <!-- prodcut category end here -->

              <!-- Product brand start here -->
              <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#brand"
                      aria-expanded="false" aria-controls="brand">
                      <i class="mdi mdi-file-multiple"></i>
                      <span class="nav-text">Brand</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="brand"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">

                        
                          
                            <li >
                              <a class="sidenav-item-link" href="brand-all.php">
                                <span class="nav-text">all</span>
                                
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="brand-add.php">
                                <span class="nav-text">add new</span>
                                
                              </a>
                            </li>

                        
                      </div>
                    </ul>
                </li>
              <!-- Product brand end here -->


              <!-- product start -->

              <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#product"
                      aria-expanded="false" aria-controls="product">
                      <i class="mdi mdi-file-multiple"></i>
                      <span class="nav-text">Product</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="product"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">

                        
                          
                            <li >
                              <a class="sidenav-item-link" href="product-all.php">
                                <span class="nav-text">all</span>
                                
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="product-add.php">
                                <span class="nav-text">add new</span>
                                
                              </a>
                            </li>

                        
                      </div>
                    </ul>
                  </li>
              <!-- product end -->



                                  


                

                
                  
                

                
              </ul>

            </div>






            <div class="sidebar-footer">
              <div class="sidebar-footer-content">
                <ul class="d-flex">
                  <li>
                    <a href="user-account-settings.html" data-toggle="tooltip" title="Profile settings"><i class="mdi mdi-settings"></i></a></li>
                  <li>
                    <a href="#" data-toggle="tooltip" title="No chat messages"><i class="mdi mdi-chat-processing"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </aside>
