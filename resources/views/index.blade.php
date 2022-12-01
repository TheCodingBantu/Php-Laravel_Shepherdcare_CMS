@include('components.navbar')
@include('components.sidebar')
@include('components.footer')

@yield('navbar')
@yield('sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper pl-4">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0  mt-3">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box shadow-none p-4 " style="background-color: #35353D;">
                <span class="info-box-icon bg-black  "><i class=" text-xl fas fa-cog"></i></span>
  
                <div class="info-box-content text-white">
                  <span class="info-box-text">CPU Traffic</span>
                  <span class="info-box-number">
                    10
                    <small>%</small>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box shadow-none p-4 mb-3 shadow-none" style="background-color: #FFFBEF;">
                <span class="info-box-icon bg-white "><i class="fas fa-thumbs-up"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Likes</span>
                  <span class="info-box-number">41,410</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
  
            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>
  
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box shadow-none p-4 mb-3" style="background-color: #EFEFF1;">
                <span class="info-box-icon bg-white "><i class="fas fa-shopping-cart"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Sales</span>
                  <span class="info-box-number">760</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box shadow-none p-4 mb-3 " style="background-color: #E9EAFF;">
                <span class="info-box-icon bg-white "><i class="fas fa-users"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">New Members</span>
                  <span class="info-box-number">2,000</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>

          
        <div class="row ">
          

          <!-- /.col-md-6 -->
          <div class=" col-lg-6">
           
            <div class="">
              <div class="card shadow-none">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title">Activity</h3>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex">
                    <p class="d-flex flex-column">
                      <span class="text-bold text-lg">18000 </span>
                      <span>Entries Over Time</span>
                    </p>
                    <p class="ml-auto d-flex flex-column text-right">
                      <span class="text-success">
                        <i class="fas fa-arrow-up"></i> 33.1%
                      </span>
                      <span class="text-muted">Since last month</span>
                    </p>
                  </div>
                  <!-- /.d-flex -->
  
                  <div class="position-relative mb-4">
                    <canvas id="sales-chart" height="200"></canvas>
                  </div>
  
                  <div class="d-flex flex-row justify-content-end">
                    <span class="mr-2">
                      <i class="fas fa-square text-primary"></i> This year
                    </span>
  
                    <span>
                      <i class="fas fa-square text-gray"></i> Last year
                    </span>
                  </div>
                </div>
              </div>
       
            </div>
          
            <!-- /.card -->

          </div>
          <!-- /.col-md-6 -->

          <div class="col-12 col-lg-6">
  
            <div class="card  shadow-none">
              <div class="card-header">
                <h3 class="card-title">Recent Activity</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                  <li class="item">
                    <div class="product-img ">
                      <img class="rounded-circle" src=" {{asset('dist/img/user1-128x128.jpg')}}" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title text-dark">John Doe is Celebrating !
                        <span class="badge float-right"><span class="text-dark mr-2">5 hrs</span><i class="text-primary fas fa-circle text-xs"></i></span></a>
                      <span class="product-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, quo.
                      </span>
                    </div>
                  </li>
                  <li class="item">
                    <div class="product-img ">
                      <img class="rounded-circle" src=" {{asset('dist/img/user1-128x128.jpg')}}" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title text-dark">John Doe is Celebrating !
                        <span class="badge float-right"><span class="text-dark mr-2">5 hrs</span><i class="text-primary fas fa-circle text-xs"></i></span></a>
                      <span class="product-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, quo.
                      </span>
                    </div>
                  </li>
         
                  <!-- /.item -->
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <a href="javascript:void(0)" class="uppercase">View All Products</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
        </div>
  
          <div class="row">
           
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!--/. container-fluid -->
      </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @yield('footer')
