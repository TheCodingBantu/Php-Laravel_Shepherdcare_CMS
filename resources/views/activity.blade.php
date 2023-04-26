@include('components.navbar')
@include('components.sidebar')
@include('components.footer')

@yield('navbar')
@yield('sidebar')
<link rel="stylesheet" href="../../dist/css/adminlte.min.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper pl-4">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">

            <div class="row mb-2 mt-3 d-flex flex-row  justify-content-between align-center">
                <h1 class="m-0  ">
                    @if ($name == 'connect')
                        Connects
                    @endif
                    @if ($name == 'care')
                        Cares
                    @endif
                    @if ($name == 'celebrate')
                        Celebrations
                    @endif
                    @if ($name == 'calling')
                        Calling
                    @endif
                </h1>

            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row  mr-3 mb-3  d-flex flex-row justify-content-between align-items-center ">

                <div class=" col-4">
                    <form  action="{{ route('activity', ['name' => $name])}}" method="POST" class=" border d-flex align-items-center ">
                        @csrf
                        <input name="search" type="text" class=" form-control  mr-2 border-0"
                            placeholder="Search page ...">
                        <i class="nav-link border-right top-0 right-0 fas fa-search"></i>

                    </form>
                </div>
                <div class=""><a href='{{ route('addactivity', ['user' => '', 'activity' => $name]) }}'
                        class="btn btn-primary "><i class="fas fa-plus "></i> Add @if ($name == 'connect')
                            Connect
                        @endif
                        @if ($name == 'care')
                            Care
                        @endif
                        @if ($name == 'celebrate')
                            Celebration
                        @endif
                        @if ($name == 'calling')
                            Calling
                        @endif
                    </a></div>

            </div>
            <div class="row mr-3">
                @if (sizeof($records) != 0)

                    <div class="card  shadow-none  col-12">
                        <div class="card-header">
                            <h3 class="card-title">Recent @if ($name == 'connect')
                                    Connects
                                @endif
                                @if ($name == 'care')
                                    Cares
                                @endif
                                @if ($name == 'celebrate')
                                    Celebrations
                                @endif
                                @if ($name == 'calling')
                                    Callings
                                @endif
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

                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="">
                                    <!-- Post -->
                                    @isset($records)
                                        @foreach ($records as $record)
                                            <div class="post"
                                                onclick="javascript:window.location.href='{{ route('activity-details', ['id' => $record->id]) }}'">
                                                <div class="user-block">
                                                    <img class="img-circle img-bordered-sm"
                                                        src="{{ Avatar::create($record->getActivityRelation->other_names)->toBase64() }}"
                                                        alt="user image">
                                                    <span class="username">
                                                        <a href="javascript:void(0)">{{ $record->title }}</a>
                                                    </span>
                                                    <span class="description">Added by {{ $record->getUserRelation->name }}
                                                        - {{ $record->created_at->diffForHumans() }}</span>
                                                </div>
                                                <!-- /.user-block -->
                                                <p>
                                                    {{ $record->description }}
                                                </p>

                                            </div>
                                        @endforeach
                                    @endisset


                                </div>

                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <div class="row m-auto">
                        {{ $records->onEachSide(1)->links() }}

                    </div>
                @else
                    <h5 class="m-auto"> Sorry! No entries available </h5>

                @endif

            </div>

            <!-- /.row -->
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>

@yield('footer')
<script>
    function processQuery(e) {

        e.preventDefault()
        var search = $('searchbox').val();
        $.ajax({
            type: "POST",
            url: {{ Request::path() }},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                search: search,

            },

        }); //end ajax
        success: function(response) {

            // window.location.
        },
    }
</script>
