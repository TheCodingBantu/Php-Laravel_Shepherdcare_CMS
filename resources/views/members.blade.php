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
        
        <div class="row mb-2 mt-3 d-flex flex-row  justify-content-between align-center">
          <h1 class="m-0  ">Members</h1>

          <a href='{{route("addmember")}}' class="btn btn-primary "><i class="fas fa-plus mr-3"></i> Add Member</a>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
      <!-- Main content -->
      <section class="content">
     <!-- Default box -->
     <div class="card  shadow-none bg-transparent" >
      <div class="card-body pb-0">
        <div class="row">
        @foreach($records as $record)
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
            <div class="card bg-white  d-flex flex-fill">
              <div class="card-header text-muted border-bottom-0">
                Member
              </div>
              <div class="card-body pt-0 ">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>{{$record->other_names}} {{$record->surname}}</b></h2>
                    <p class="text-muted text-sm"><b>Added on: </b>{{$record->created_at}} </p>
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: {{$record->residence}}</li>
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: {{$record->phone}}</li>
                    </ul>
                  </div>
                  <div class="col-5 text-center">
                    <img src={{ Avatar::create($record->other_names)->toBase64() }} alt="user-avatar" class="img-circle img-fluid">
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  
                  <a href="{{route('profile',['id' => $record->id])}}" class="btn btn-sm btn-primary">
                    <i class="fas fa-user"></i> View Profile
                  </a>

                </div>
              </div>
            </div>
          </div>

          @endforeach
        
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        
      </div>
      <!-- /.card-footer -->
    </div>
    <!-- /.card -->
      </section>
    <!-- /.content -->
  </div>
  @yield('footer')

