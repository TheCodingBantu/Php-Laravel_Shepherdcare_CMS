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
                                <img class="img-circle" src={{ Avatar::create($user->name)->toBase64() }}
                                    alt="User Image">
                                <span class="username"><a href="#">{{$user->name}}</a></span>
                                <span class="description">Shared publicly - {{$record->created_at->format('j F, Y')}} </span>
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

                            <p>{{$record->description}}</p>


                            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i>
                                Share</button>
                            <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i>
                                Like</button>
                            <span class="float-right text-muted">45 likes - 2 comments</span>
                        </div>

                        <div class="card-footer card-comments">
                            @if (isset($comments))
                            @foreach ($comments as $comment)
                            <div class="card-comment">

                                <img class="img-circle img-sm" src={{ Avatar::create($comment->getCommentRelation->name)->toBase64() }}
                                    alt="User Image">
                                <div class="comment-text">
                                    <span class="username">
                                        {{$comment->getCommentRelation->name}}

                                        <span class="text-muted float-right">{{$comment->created_at->diffForHumans()}}</span>
                                    </span>
                                    {{$comment->comment}}
                                </div>

                            </div>
                            @endforeach
                            @else
                            
                                
                            @endif
                
                  
                        </div>

                        <div class="card-footer">
                            <form id="comment-form">
                                <img class="img-fluid img-circle img-sm" src={{ Avatar::create(Auth::User()->name)->toBase64() }}
                                    alt="Alt Text">

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
                        <h3 class="widget-user-username">{{$member->other_names}}</h3>
                        <h5 class="widget-user-desc">Member</h5>
                        </div>
                        <div class="widget-user-image">
                        <img class="img-circle elevation-2" src={{ Avatar::create($member->other_names)->toBase64() }} alt="User Avatar">
                        </div>
                        <div class="card-footer">
                        <div class="row">
                        <div class="col-sm-4 border-right">
                        <div class="description-block">
                        <h5 class="description-header">3,200</h5>
                        <span class="description-text">SALES</span>
                        </div>
                        
                        </div>
                        
                        <div class="col-sm-4 border-right">
                        <div class="description-block">
                        <h5 class="description-header">13,000</h5>
                        <span class="description-text">FOLLOWERS</span>
                        </div>
                        
                        </div>
                        
                        <div class="col-sm-4">
                        <div class="description-block">
                        <h5 class="description-header">35</h5>
                        <span class="description-text">PRODUCTS</span>
                        </div>
                        
                        </div>
                        
                        </div>
                        
                        </div>
                        </div>
    

                    <div class="info-box mb-3 bg-white shadow-none">
                        <span class="info-box-icon"><i class="fas fa-tag"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Response time</span>
                            <span class="info-box-number">5 hrs</span>
                        </div>

                    </div>

                    <div class="info-box mb-3 bg-white shadow-none">
                        <span class="info-box-icon"><i class="far fa-heart"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Response Rate</span>
                            <span class="info-box-number">12%</span>
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

$("#comment-form").submit(function(e){
    e.preventDefault()

      var activity = {{$record->id}}
      var user = {{Auth::User()->id}}
      var comment = $('#comment').val()

      
      $.ajax({
          type: "POST",
          url: "/comment",
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          data: {
              comment: comment,
              activity:activity,
              user:user
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