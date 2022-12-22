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
                <h1 class="m-0  "> Activity Details</h1>

            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row ">

                <div class=" col-md-8">

                    <div class="card card-widget">
                        <div class="card-header">
                            <div class="user-block">
                                <img class="img-circle" src={{ Avatar::create($member->other_names)->toBase64() }}
                                    alt="User Image">
                                <span class="username"><a href="javascript:void(0)">{{ $record->title }}</a></span>
                                <span class="description">Added by {{ $user->name }} -
                                    {{ $record->created_at->diffForHumans() }}</span>

                            </div>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" title="Mark as read">
                                    <i class="far fa-circle"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body">

                            <p>{{ $record->description }}</p>


                            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i>
                                Share</button>

                            <span class="float-right text-muted">{{ count($comments) }} comments</span>
                        </div>

                        <div class="card-footer card-comments">
                            @if (sizeof($comments) != 0)
                                @foreach ($comments as $comment)
                                    <div class="card-comment">

                                        <img class="img-circle img-sm"
                                            src={{ Avatar::create($comment->getCommentRelation->name)->toBase64() }}
                                            alt="User Image">
                                        <div class="comment-text">
                                            <span class="username">
                                                {{ $comment->getCommentRelation->name }}

                                                <span
                                                    class="text-muted float-right">{{ $comment->created_at->diffForHumans() }}</span>
                                            </span>
                                            {{ $comment->comment }}
                                        </div>

                                    </div>
                                @endforeach
                            @else
                            @endif


                        </div>

                        <div class="card-footer">
                            <form id="comment-form">
                                <img class="img-fluid img-circle img-sm"
                                    src={{ Avatar::create(Auth::User()->name)->toBase64() }} alt="Alt Text">

                                <div class="img-push d-flex">
                                    <input id="comment" type="text" class="form-control mr-2 "
                                        placeholder="Press enter to post comment">

                                </div>
                            </form>
                        </div>

                    </div>

                </div>
                <div class="col-md-4">

                    <div class="card card-widget widget-user">

                        <div class="widget-user-header bg-white">
                            <h3 class="widget-user-username">{{ $user->name }}</h3>
                            <h5 class="widget-user-desc">Pastor</h5>
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle elevation-2" src={{ Avatar::create($user->name)->toBase64() }}
                                alt="User Avatar">
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">{{$cares}}</h5>
                                        <span class="description-text">Cares</span>
                                    </div>

                                </div>

                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">{{$connects}}</h5>
                                        <span class="description-text">Connects</span>
                                    </div>

                                </div>

                                <div class="col-sm-4">
                                    <div class="description-block">
                                        <h5 class="description-header">{{$celebrations}}</h5>
                                        <span class="description-text">Celbrations</span>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>


                    <div class="card ">
                        <div class="card-header">
                        <h3 class="card-title">Activity</h3>
                        
                        </div>
                        <div class="card-body">
                        <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 456px;" width="456" height="250" class="chartjs-render-monitor"></canvas>
                        </div>
                        </div>
                        
                        </div>


                </div>



            </div>
            <!-- /.row -->
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>


@yield('footer')
<script>
    $("#comment-form").submit(function(e) {
        e.preventDefault()

        var activity = {{ $record->id }}
        var user = {{ Auth::User()->id }}
        var comment = $('#comment').val()


        $.ajax({
            type: "POST",
            url: "/comment",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                comment: comment,
                activity: activity,
                user: user
            },
            success: function(response) {

                if (response.success) {
                    $(document).Toasts('create', {
                        class: 'bg-success',
                        title: 'Success',
                        autohide: true,
                        delay: 2000,
                        body: response.success,
                    })
                }
                if (response.error) {
                    $(document).Toasts('create', {
                        class: 'bg-danger',
                        title: 'Error',
                        autohide: true,
                        delay: 2000,
                        body: response.error,
                    })
                }

            },
            error: function(error) {
                console.log(error.error);

            }
        }); //end ajax
    })
</script>

<script>
    
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.

    var areaChartData = {
        labels: ['JAN', 'FEB', 'MAR', 'APR','MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],

      datasets: [
        {
          label               : 'Digital Goods',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : {!! $thisYear !!}

        },
        {
          label               : 'Electronics',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : {!! $lastYear !!}

        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
       
        xAxes: [{
          gridLines : {
            display : false,
          }

        }],
        yAxes: [{
            ticks: {
      stepSize: 10,
      beginAtZero: true,
    },
          gridLines : {
            display : false,
          },
          
          
        }]
      }
    }

   

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })

    //-------------
 

   
  })

</script>
