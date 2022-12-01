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
            <h1 class="m-0  ">  
                @if ($name=='connect') Connects @endif
                @if ($name=='care') Cares @endif
                @if ($name=='celebrate') Celebrations @endif
                @if ($name=='calling') Calling @endif</h1>

            <a href='{{route('addactivity',['user'=>'','activity'=>$name])}}' class="btn btn-primary "><i class="fas fa-plus mr-3"></i> Add @if ($name=='connect') Connect @endif
                @if ($name=='care') Care @endif
                @if ($name=='celebrate') Celebration @endif
                @if ($name=='calling') Calling @endif</a>
          </div>
        </div><!-- /.container-fluid -->
      </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            
        
            <div class="row mr-3">
                @if(sizeof($records)!=0)
                     <div class="card  shadow-none  col-12">
                    <div class="card-header">
                        <h3 class="card-title">Recent @if ($name=='connect') Connects @endif
                            @if ($name=='care') Cares @endif
                            @if ($name=='celebrate') Celebrations @endif
                            @if ($name=='calling') Callings @endif
                        </h3>

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
                    <div class="card-body p-0 ">
                        <ul class="products-list product-list-in-card pl-2 pr-2 ">

                            @foreach ($records as $record)

                            <li  class="item cursor-pointer " onclick="javascript:window.location.href='{{route('activity-details',['id'=>$record->id])}}'">
                                <div class="product-img ">
                                    <img class="rounded-circle" src= {{ Avatar::create($record->getActivityRelation->other_names)->toBase64() }}
                                        alt="Product Image" class="img-size-50">
                                </div>
                                <div class="product-info">
                                    <a href="javascript:void(0)" class="product-title text-dark">{{$record->title}}
                                        !
                                        <span class="badge float-right">
                                            <span class=" mr-2 font-weight-normal text-sm" style="color: #999999">{{$record->created_at->diffForHumans()}}
                                            </span><i class="text-primary fas fa-circle text-xs"></i></span>
                                    </a>

                                    <span class="product-description">
                                        {{$record->description}}
                                    </span>
                                </div>
                            </li>

                            @endforeach
                            
                           

                            <!-- /.item -->
                        </ul>
                    </div>
                   
                </div>
                <div class="row m-auto">
                {{$records->onEachSide(1)->links()}}

                </div>

                @else
                <h5 class="m-auto"> Sorry!  No entries available </h5>

                @endif
                
               
            </div>


            <!-- /.row -->
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>

@yield('footer')
