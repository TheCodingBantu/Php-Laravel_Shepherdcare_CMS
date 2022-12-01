@include('components.navbar')
@include('components.sidebar')
@include('components.footer')

@yield('navbar')
@yield('sidebar')

<link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

<link rel="stylesheet" href="{{ asset('plugins/bs-stepper/css/bs-stepper.min.css')}}">
<link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper pl-4">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        
        <div class="row mb-2 mt-3 d-flex flex-row  justify-content-between align-center">
          <h1 class="m-0  ">Add Activity </h1>
          

        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
      <!-- Main content -->
      <section class="content">
     <!-- Default box -->
     <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">New Activity</h3>
              
            </div>
            <div class="card-body p-0">
              <div class="bs-stepper">
                <div class="bs-stepper-header" role="tablist">
                  <!-- your steps here -->
                  <div class="step" data-target="#logins-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                      <span class="bs-stepper-circle">1</span>
                      <span class="bs-stepper-label">Who?</span>
                    </button>
                  </div>
                  <div class="line"></div>

                  <div class="step" data-target="#what-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="what-part" id="what-part-trigger">
                      <span class="bs-stepper-circle">2</span>
                      <span class="bs-stepper-label">What?</span>
                    </button>
                  </div>
                  
                  <div class="line"></div>
                  <div class="step" data-target="#information-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                      <span class="bs-stepper-circle">3</span>
                      <span class="bs-stepper-label">Assign</span>
                    </button>
                  </div>
         
                </div>

                <div class="bs-stepper-content">
                  <!-- your steps content here -->
                  <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                    <div class="form-group">
                      <label>Search Member</label>
                      <select id="member-id" class="form-control select2" style="width: 100%;">
                        @foreach($records as $record)
                        <option value="{{$record->id}}" @if( app('request')->input('user') == $record->id ) selected="selected" @endif  >{{$record->surname}}{{$record->other_names}}</option>
                        @endforeach
                        
                      </select>
                    </div>
                    <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                  </div>

                  <div id="what-part" class="content" role="tabpanel" aria-labelledby="what-part-trigger">
                    <div class="form-group">
                      <label>Choose Category</label>
                      <select id="category" class="form-control" style="width: 100%;">
                        
                        <option @if( app('request')->input('activity') == 'connect' ) selected="selected" @endif >connect</option>
                        <option @if( app('request')->input('activity') == 'care' ) selected="selected" @endif >care</option>
                        <option @if( app('request')->input('activity') == 'calling' ) selected="selected" @endif >calling</option>
                        <option @if( app('request')->input('activity') == 'celebrate' ) selected="selected" @endif >celebrate</option>
                        
                        
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Title</label>
                      <input id="title" type="text" class="form-control "
                          style="width: 100%;" tabindex="-1">

                  </div>

                    <div class="form-group">
                      <label>Describe</label>
                      <textarea id="description" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>

                    <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                  </div>

                  <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                    <div class="form-group">
                      <label>Select people you want to assign this activity to</label>
                      <div class="select2-green">
                      <select id="assigned-to" class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                        @foreach($records as $record)
                        <option value="{{$record->id}}" >{{$record->surname}}{{$record->other_names}}</option>
                        @endforeach
                      </select>
                    </div>
                    </div>
                    <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                    <button  class="btn btn-primary" onclick="saveActivity()">Submit</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              Visit <a href="https://github.com/Johann-S/bs-stepper/#how-to-use-it">bs-stepper documentation</a> for more examples and information about the plugin.
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>
      </div>
    <!-- /.card -->
      </section>
    <!-- /.content -->
  </div>
  
@yield('footer')

<script>
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
  window.stepper = new Stepper(document.querySelector('.bs-stepper'))

})

 $(function () {
  //Initialize Select2 Elements
  $('.select2').select2()

 })
</script>
<script>
  function saveActivity() {
        var member_id = $('#member-id').val()
        var category = $('#category').val()
        var title = $('#title').val()
        var description = $('#description').val()
        var assigned_to = $('#assigned-to').val()

        $.ajax({
            type: "POST",
            url: "/addactivity",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                member_id: member_id,
                title: title,
                category: category,
                description: description,
                assigned_to: assigned_to             

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
    }
</script>

