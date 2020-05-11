

    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="<?= base_url('assets/templates/') ?>img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Mark Stephen</h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li><a href="<?= base_url('Dashboard/Dashboard') ?>"> <i class="icon-home"></i>Home </a></li>
                <li><a href="tables.html"> <i class="icon-grid"></i>Tables </a></li>
                <li class="active"><a href="<?= base_url('Communication/Communication/chat') ?>"> <i class="fa fa-bar-chart"></i>Chats </a></li>
                <li><a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Example dropdown </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="#">Page</a></li>
                    <li><a href="#">Page</a></li>
                    <li><a href="#">Page</a></li>
                  </ul>
                </li>
                <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li>
        </ul><span class="heading">Extras</span>
        <ul class="list-unstyled">
          <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
        </ul>
      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Charts</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Charts            </li>
          </ul>
        </div>
        <section>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-8">
                <div class="line-chart block chart" >
                  <div class="title"><strong>Appel de Nom en cours</strong></div>
                  <!-- <canvas id="lineChartCustom1"></canvas> -->
                </div>
              </div>
              <div class="col-lg-4">       
                <div class="lin-chart block chart"  >
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search friends">
                   <button class="input-group-btn btn-primary form-control btn-sm" style="width: 5px;color: black;">Search</button>
                  </div>
                    <div class="row">
                        <div class="col-lg-12 input-group">
                           <div class="row">
                              <div class="col-md-12">
                                <span class="input-addon" style="border-radius: 50%;height: 10px;width: 10px;background:green;"></span>
                                <a href=""> <h4 style="font-size: 1em;">Giscard Daniel</h4></a>
                             </div>
          
                            </div>
                         </div>
                    </div>
                  </div>
                  <div class="line-chart chart margin-bottom-sm">
                   <!--  <canvas id="lineChartCustom2"></canvas> -->
                  </div>
                  <div class="line-chart chart">
                   <!--  <canvas id="lineChartCustom3"></canvas> -->
                  </div>
                </div>
              </div>
              
             
            </div>
          </div>
        </section>

        
   