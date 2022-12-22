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
                <h1 class="m-0 ">Member Profile</h1>

                <a href='{{ route('addactivity', ['user' => $record->id, 'activity' => 'calling']) }}'
                    class="btn btn-primary "><i class="fas fa-plus mr-3"></i> New Activity</a>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="{{ Avatar::create($record->other_names)->toBase64() }}"
                                    alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{{ $record->surname }}</h3>

                            <p class="text-muted text-center text-capitalize">{{ $record->role }}</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Connects</b> <a class="float-right">{{ $count[0] }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Cares</b> <a class="float-right">{{ $count[1] }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Calling</b> <a class="float-right">{{ $count[2] }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Celebrations</b> <a class="float-right">{{ $count[3] }}</a>
                                </li>
                            </ul>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#Connects"
                                        data-toggle="tab">Connects</a></li>
                                <li class="nav-item"><a class="nav-link" href="#Cares" data-toggle="tab">Cares</a></li>
                                <li class="nav-item"><a class="nav-link" href="#Calling" data-toggle="tab">Calling</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#Celebrations"
                                        data-toggle="tab">Celebrations</a></li>
                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Edit</a>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="Connects">
                                    <!-- Post -->
                                    @isset($connects)
                                        @foreach ($connects as $connect)
                                            <div class="post"
                                                onclick="javascript:window.location.href='{{ route('activity-details', ['id' => $record->id]) }}'">
                                                <div class="user-block">
                                                    <img class="img-circle img-bordered-sm"
                                                        src="{{ Avatar::create($connect->getActivityRelation->other_names)->toBase64() }}"
                                                        alt="user image">
                                                    <span class="username">
                                                        <a href="javascript:void(0)">{{ $record->title }}</a>
                                                    </span>
                                                    <span class="description">Added by
                                                        {{ $connect->getUserRelation->name }}
                                                        - {{ $connect->created_at->diffForHumans() }}</span>
                                                </div>
                                                <!-- /.user-block -->
                                                <p>
                                                    {{ $connect->description }}
                                                </p>

                                            </div>
                                        @endforeach
                                        @endif
                                        <a class=" d-block border text-center p-2"
                                            href={{ route('activity', ['name' => 'connect', 'member' => $record->id]) }}
                                            class="btn btn-primary ">Show All</a>

                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="Cares">
                                        <!-- The timeline -->
                                        @isset($cares)
                                            @foreach ($cares as $care)
                                                <div class="post"
                                                    onclick="javascript:window.location.href='{{ route('activity-details', ['id' => $record->id]) }}'">
                                                    <div class="user-block">
                                                        <img class="img-circle img-bordered-sm"
                                                            src="{{ Avatar::create($care->getActivityRelation->other_names)->toBase64() }}"
                                                            alt="user image">
                                                        <span class="username">
                                                            <a href="javascript:void(0)">{{ $care->title }}</a>
                                                        </span>
                                                        <span class="description">Added by {{ $care->getUserRelation->name }} -
                                                            {{ $care->created_at->diffForHumans() }}</span>
                                                    </div>
                                                    <!-- /.user-block -->
                                                    <p>
                                                        {{ $care->description }}
                                                    </p>

                                                </div>
                                            @endforeach
                                            @endif
                                            <a class=" d-block border text-center p-2"
                                                href={{ route('activity', ['name' => 'care', 'member' => $record->id]) }}
                                                class="btn btn-primary ">Show All</a>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="Calling">
                                            <!-- The timeline -->
                                            @isset($callings)
                                                @foreach ($callings as $calling)
                                                    <div class="post"
                                                        onclick="javascript:window.location.href='{{ route('activity-details', ['id' => $record->id]) }}'">
                                                        <div class="user-block">
                                                            <img class="img-circle img-bordered-sm"
                                                                src="{{ Avatar::create($calling->getActivityRelation->other_names)->toBase64() }}"
                                                                alt="user image">
                                                            <span class="username">
                                                                <a href="javascript:void(0)">{{ $calling->title }}</a>
                                                            </span>
                                                            <span class="description">Added by
                                                                {{ $calling->getUserRelation->name }} -
                                                                {{ $calling->created_at->diffForHumans() }}</span>
                                                        </div>
                                                        <!-- /.user-block -->
                                                        <p>
                                                            {{ $calling->description }}
                                                        </p>

                                                    </div>
                                                @endforeach
                                                @endif
                                                <a class=" d-block border text-center p-2"
                                                    href={{ route('activity', ['name' => 'calling', 'member' => $record->id]) }}
                                                    class="btn btn-primary ">Show All</a>
                                            </div>
                                            <!-- /.tab-pane -->
                                            <!-- /.tab-pane -->
                                            <div class="tab-pane" id="Celebrations">
                                                <!-- The timeline -->
                                                @isset($celebrations)
                                                    @foreach ($celebrations as $celebration)
                                                        <div class="post"
                                                            onclick="javascript:window.location.href='{{ route('activity-details', ['id' => $record->id]) }}'">
                                                            <div class="user-block">
                                                                <img class="img-circle img-bordered-sm"
                                                                    src="{{ Avatar::create($celebration->getActivityRelation->other_names)->toBase64() }}"
                                                                    alt="user image">
                                                                <span class="username">
                                                                    <a href="javascript:void(0)">{{ $celebration->title }}</a>
                                                                </span>
                                                                <span class="description">Added by
                                                                    {{ $celebration->getUserRelation->name }} -
                                                                    {{ $celebration->created_at->diffForHumans() }}</span>
                                                            </div>
                                                            <!-- /.user-block -->
                                                            <p>
                                                                {{ $celebration->description }}
                                                            </p>

                                                        </div>
                                                    @endforeach
                                                    @endif
                                                    <a class=" d-block border text-center p-2"
                                                        href={{ route('activity', ['name' => 'celebration', 'member' => $record->id]) }}
                                                        class="btn btn-primary ">Show All</a>
                                                </div>
                                                <!-- /.tab-pane -->

                                                <div class="tab-pane" id="settings">
                                                    <form class="form-horizontal">
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-2 col-form-label">Surname</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" required class="form-control" id="surname"
                                                                    value="{{ $record->surname }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-2 col-form-label">Other names</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" required class="form-control" id="other-names"
                                                                    value="{{ $record->other_names }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="email"
                                                                    value="{{ $record->email }}"
                                                                    @if ($record->role == 'admin') disabled @endif>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName2" class="col-sm-2 col-form-label">Phone</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="phone"
                                                                    value="{{ $record->phone }}">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="inputName2" class="col-sm-2 col-form-label">Role</label>
                                                            <div class="col-sm-10">
                                                                <select onchange="changeUser('{{ $record->role }}')"
                                                                    @if ($record->role == 'admin') disabled @endif name=""
                                                                    class="form-control" id="role">
                                                                    <option @if ($record->role == 'member') selected @endif
                                                                        value="member">Member</option>
                                                                    <option @if ($record->role == 'admin') selected @endif
                                                                        value="admin">Admin</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        @if (Auth::User()->email == $record->email)
                                                            <div class="form-group row">
                                                                <label for="inputName2"
                                                                    class="col-sm-2 col-form-label">Password</label>

                                                                <div class="form-check col-sm-10  d-flex align-items-center ">
                                                                    <input onclick="togglePassChange()" type="checkbox"
                                                                        class="form-check-input" id="togglepass">
                                                                    <label class="form-check-label" for="exampleCheck1">Update
                                                                        Password </label>
                                                                </div>
                                                            </div>

                                                            <div id='passchange'>
                                                                <div class="form-group row ">
                                                                    <label for="inputName2" class="col-sm-2 col-form-label">Current
                                                                        Password</label>
                                                                    <div class="col-sm-10">
                                                                        <input autocomplete="off" type="password"
                                                                            class="form-control" id="oldpass" />

                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="inputName2" class="col-sm-2 col-form-label">New
                                                                        Password</label>
                                                                    <div class="col-sm-10">
                                                                        <input autocomplete="off" type="password"
                                                                            class="form-control" id="newpass" />
                                                                        <span id="invalidpass" class="error invalid-feedback">New
                                                                            passwords do not match</span>
                                                                    </div>
                                                                    {{-- <p class="form-control text-sm text-danger">The passwords do not match</p> --}}

                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="inputName2" class="col-sm-2 col-form-label">Repeat
                                                                        Password </label>
                                                                    <div class="col-sm-10">
                                                                        <input autocomplete="off" type="password"
                                                                            class="form-control" id="repeat-newpass" />

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif

                                                        <div class="form-group row offset-sm-2 col-sm-10 ">

                                                            <button type="button" onclick="updateMember()"
                                                                class="btn btn-danger">Submit</button>

                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- /.tab-pane -->
                                            </div>
                                            <!-- /.tab-content -->

                                        </div><!-- /.card-body -->

                                    </div>
                                    <!-- /.card -->
                                </div>

                                <!-- /.col -->
                            </div>


                            <!-- /.row -->
                        </div>
                        <!--/. container-fluid -->
                    </section>
                    <!-- /.content -->
                </div>

                <div class="modal fade" id="modal-sm" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">

                                <h4 class="modal-title text-md text-center">Account Control</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="text-center">Change User to Admin?</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger" onclick="userRoleChangeConfirm('0')">No</button>
                                <button type="button" class="btn btn-default" onclick="userRoleChangeConfirm('1')">Yes</button>
                            </div>
                        </div>

                    </div>

                </div>
                @yield('footer')

                <script>
                    $('#passchange').hide()

                    function togglePassChange() {
                        $('#pass-old').val('')
                        $('#pass-new').val('')
                        $('#repeat-pass-new').val('')
                        $('#passchange').toggle()
                    }

                    function changeUser(role) {
                        // if someone selects admin and the member was not previously an admin
                        if ($("#role").val() != role && $("#role").val() == 'admin') {
                            $('#modal-sm').modal('show');
                        }

                    }

                    function userRoleChangeConfirm(val) {
                        if (val == 0) {
                            $("#role").prop("selectedIndex", 0);
                            $('#modal-sm').modal('hide');

                        } else {
                            $('#modal-sm').modal('hide');

                        }
                    }

                    // update the db
                    function updateMember() {
                        $('#repeat-newpass').removeClass('is-valid')
                        $('#newpass').removeClass('is-valid')
                        $('#repeat-newpass').removeClass('is-invalid')
                        $('#newpass').removeClass('is-invalid')

                        var surname = $('#surname').val()
                        var other_names = $('#other-names').val()
                        var phone = $('#phone').val()
                        var email = $('#email').val()
                        var role = $('#role').val()
                        var oldpass = $('#oldpass').val()
                        var newpass = $('#newpass').val()
                        var repeat_newpass = $('#repeat-newpass').val()

                        // if exists togglepass button 
                        if ($("#togglepass").length > 0) {
                            if ($('#togglepass').is(':checked')) {
                                if (newpass.length < 6) {
                                    $('#newpass').addClass('is-invalid')
                                    $('#invalidpass').text('Password should be more than six characters')
                                } else {
                                    if (repeat_newpass != newpass) {
                                        // console.log('not same');
                                        $('#repeat-newpass').addClass('is-invalid')
                                        $('#newpass').addClass('is-invalid')
                                        $('#invalidpass').text('Password do not match')


                                    } else {
                                        $('#repeat-newpass').addClass('is-valid')
                                        $('#newpass').addClass('is-valid')

                                        $.ajax({
                                            type: "POST",
                                            url: "/updatemember",

                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            },
                                            data: {
                                                surname: surname,
                                                other_names: other_names,
                                                phone: phone,
                                                email: email,
                                                role: role,
                                                oldpass: oldpass,
                                                newpass: newpass

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
                                }
                            }

                        }
                        else{
                        var oldpass = ''
                        var newpass = ''
                        $.ajax({
                            type: "POST",
                            url: "/updatemember",

                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            data: {
                                surname: surname,
                                other_names: other_names,
                                phone: phone,
                                email: email,
                                role: role,
                                oldpass: oldpass,
                                newpass: newpass

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


                    }
                </script>
