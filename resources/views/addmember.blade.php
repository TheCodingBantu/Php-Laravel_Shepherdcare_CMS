@include('components.navbar')
@include('components.sidebar')
@include('components.footer')

@yield('navbar')
@yield('sidebar')

<link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

<link rel="stylesheet" href="../../plugins/bs-stepper/css/bs-stepper.min.css">
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper pl-4">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">

            <div class="row mb-2 mt-3 d-flex flex-row  justify-content-between align-center">
                <h1 class="m-0  ">Add Member</h1>

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
                            <h3 class="card-title">New Member Details</h3>
                        </div>
                        <div class="card-body p-0">
                            <div class="bs-stepper">
                                <div class="bs-stepper-header" role="tablist">
                                    <!-- your steps here -->
                                    <div class="step" data-target="#logins-part">
                                        <button type="button" class="step-trigger" role="tab"
                                            aria-controls="logins-part" id="logins-part-trigger">
                                            <span class="bs-stepper-circle">1</span>
                                            <span class="bs-stepper-label">Personal</span>
                                        </button>
                                    </div>
                                    <div class="line"></div>

                                    <div class="step" data-target="#what-part">
                                        <button type="button" class="step-trigger" role="tab"
                                            aria-controls="what-part" id="what-part-trigger">
                                            <span class="bs-stepper-circle">2</span>
                                            <span class="bs-stepper-label">Salvation</span>
                                        </button>
                                    </div>

                                    <div class="line"></div>
                                    <div class="step" data-target="#information-part">
                                        <button type="button" class="step-trigger" role="tab"
                                            aria-controls="information-part" id="information-part-trigger">
                                            <span class="bs-stepper-circle">3</span>
                                            <span class="bs-stepper-label">Ministry</span>
                                        </button>
                                    </div>

                                </div>


                                <div class="bs-stepper-content">
                                    <!-- your steps content here -->
                                    <div id="logins-part" class="content" role="tabpanel"
                                        aria-labelledby="logins-part-trigger">
                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label>Surname</label>
                                                    <input id="surname" type="text" class="form-control "
                                                        style="width: 100%;" tabindex="-1">

                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Other names</label>
                                                    <input id="other-names" type="text" class="form-control "
                                                        style="width: 100%;" tabindex="-1">


                                                </div>



                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input id="phone" type="number" class="form-control "
                                                        style="width: 100%;" tabindex="-1">

                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input id="email" type="email" class="form-control "
                                                        style="width: 100%;" tabindex="-1">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Residence</label>
                                                    <input id="residence" type="text" class="form-control "
                                                        style="width: 100%;" tabindex="-1">

                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Marital status </label>
                                                    <div class="row ml-2">
                                                        <div class="form-check form-check-inline">
                                                            <input id="single" tabindex="-1" style="width: 100%;"
                                                                class="form-control form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="inlineRadio1"
                                                                value="single">
                                                            <label class="form-check-label"
                                                                for="inlineRadio1">Single</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input id="married" tabindex="-1" style="width: 100%;"
                                                                class="form-control form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="inlineRadio2"
                                                                value="married">
                                                            <label class="form-check-label"
                                                                for="inlineRadio2">Married</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input id="divorced" tabindex="-1" style="width: 100%;"
                                                                class="form-control form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="inlineRadio2"
                                                                value="divorced">
                                                            <label class="form-check-label"
                                                                for="inlineRadio2">Divorced</label>
                                                        </div>

                                                    </div>


                                                </div>

                                            </div>



                                        </div>

                                        <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                                    </div>

                                    <div id="what-part" class="content" role="tabpanel"
                                        aria-labelledby="what-part-trigger">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Is the member saved? </label>
                                                    <div class="row ml-2">
                                                        <div class="form-check form-check-inline">
                                                            <input id="saved" tabindex="-1" style="width: 100%;"
                                                                class="form-control form-check-input" type="radio"
                                                                name="inlineRadioOptions1" id="inlineRadio3"
                                                                value="yes">
                                                            <label class="form-check-label"
                                                                for="marital-status1">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input id="not-saved" tabindex="-1" style="width: 100%;"
                                                                class="form-control form-check-input" type="radio"
                                                                name="inlineRadioOptions1" id="inlineRadio4"
                                                                value="no">
                                                            <label class="form-check-label"
                                                                for="marital-status2">No</label>
                                                        </div>


                                                    </div>


                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label>Date of salvation:</label>
                                                <div class="input-group date" id="reservationdate"
                                                    data-target-input="nearest">
                                                    <input id="date-saved" type="text"
                                                        class="form-control datetimepicker-input"
                                                        data-target="#reservationdate">
                                                    <div class="input-group-append" data-target="#reservationdate"
                                                        data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Describe</label>
                                            <textarea id="description" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                        </div>
                                        <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>

                                        <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                                    </div>

                                    <div id="information-part" class="content" role="tabpanel"
                                        aria-labelledby="information-part-trigger">
                                        <div class="form-group">
                                            <label>User Role: </label>
                                            <div class="select2-green">
                                                <select id="role"  class="select2"
                                                    data-placeholder="Select a State" style="width: 100%;">
                                                    <option value="member" >Member</option>
                                                    <option value="admin" >Admin</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Ministries interested in: </label>
                                            <div class="select2-green">
                                                <select id="ministry" class="select2" multiple="multiple"
                                                    data-placeholder="Select a State" style="width: 100%;">
                                                    <option>Children Ministry</option>
                                                    <option>Ushering</option>
                                                    <option>Praise and Worship</option>
                                                    <option>Evangelism</option>
                                                    <option>Intercessory</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                        <button onclick="saveMember()" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            
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
<script src="../../plugins/moment/moment.min.js"></script>

<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>


<script>
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function() {
        window.stepper = new Stepper(document.querySelector('.bs-stepper'))

    })
    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'Y-M-D'
    });

    $('.select2').select2()
</script>
<script>
    // form logic

    function saveMember() {
        var surname = $('#surname').val()
        var other_names = $('#other-names').val()
        var phone = $('#phone').val()
        var email = $('#email').val()
        var residence = $('#residence').val()
        var role = $('#role').val()

        if ($('#' + 'divorced').is(":checked")) var marital_status = $('#divorced').val()
        if ($('#' + 'married').is(":checked")) var marital_status = $('#married').val()
        if ($('#' + 'single').is(":checked")) var marital_status = $('#single').val()


        var description = $('#description').val()

        if ($('#' + 'saved').is(":checked")) var is_saved = $('#saved').val()
        if ($('#' + 'not-saved').is(":checked")) var is_saved = $('#not-saved').val()

        var date_saved = $('#date-saved').val()
        
        var ministry = $('#ministry').val()


        $.ajax({
            type: "POST",
            url: "/addmember",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                surname: surname,
                other_names: other_names,
                phone: phone,
                email: email,
                residence: residence,
                marital_status: marital_status,
                description: description,
                is_saved: is_saved,
                date_saved: date_saved,
                ministry: ministry,
                role: role


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
