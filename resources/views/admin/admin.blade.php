@extends('layouts.admin')
@section('styles')
    <link rel="stylesheet" href="{{ asset('plugins/datatable/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert/sweetalert.css') }}">
    <style>
        .mt-20 {
            margin-top: 20px;
        }
        .mt-50 {
            margin-top: 50px;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#add-admin-modal"> Add New Admin</button>
        </div>
        <div class="col-md-12 mt-20">
            <table id="admins-table" class="table table-striped">
                <thead>
                <tr role="row">
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Mobile Number</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($admins as $admin)
                    <tr role="row">
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>{{ $admin->mobile }}</td>
                        <td>
                            <i class="btn btn-info glyphicon glyphicon-edit edit-admin" href="javascript:;" data-edit="{{ $admin->id }}"></i>
                            <i class="btn btn-danger glyphicon glyphicon-trash delete-admin" href="javascript:;" data-delete="{{ $admin->id }}"></i>
                        </td>
                    </tr>
                @empty
                    <h3>No Admins</h3>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade mt-50" id="add-admin-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="POST" id="add-admin">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title text-center">Add New Admin</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 prl-20">
                                <div class="form-group">
                                    <input type="hidden" name="type" value="admin">
                                    <label>Admin Name<span class="mandatory">*</span></label>
                                    <input type="text" name="name" class="form-control" placeholder="admin name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 prl-20">
                                <div class="form-group">
                                    <label>Admin Password<span class="mandatory">*</span></label>
                                    <input type="password" name="password" placeholder="admin password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 prl-20">
                                <div class="form-group">
                                    <label>Admin E-mail<span class="mandatory">*</span></label>
                                    <input type="email" name="email" placeholder="admin email" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 prl-20">
                                <div class="form-group">
                                    <label>Admin Mobile<span class="mandatory">*</span></label>
                                    <input type="text" name="mobile" placeholder="admin mobile" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit-admin-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="margin-top: 50px;">
                <form method="POST" id="edit-admin-form">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title text-center">Edit Admin</h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id">
                        <div class="row">
                            <div class="col-md-12 prl-20">
                                <div class="form-group">
                                    <input type="hidden" name="type" value="admin">
                                    <label>Admin Name <span class="mandatory">*</span></label>
                                    <input type="text" name="name" class="form-control" placeholder="admin name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 prl-20">
                                <div class="form-group">
                                    <label>Admin Password<span class="mandatory">*</span></label>
                                    <input type="password" name="password" placeholder="admin password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 prl-20">
                                <div class="form-group">
                                    <label>Admin E-mail<span class="mandatory">*</span></label>
                                    <input type="email" name="email" placeholder="admin email" المنتج class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 prl-20">
                                <div class="form-group">
                                    <label>Admin Mobile<span class="mandatory">*</span></label>
                                    <input type="text" name="mobile" placeholder="admin mobile" المنتج class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection




@section('scripts')
    <script type="text/javascript" src="{{ asset('plugins/datatable/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/sweetalert/sweetalert.min.js') }}"></script>

    <script>
        $(document).ready(function(){
            $('#admins-table').DataTable();
        });

        $("form#add-admin").on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: 'addNewAdmin',
                data: $(this).serialize(),
                type: "POST",
                success: function(response) {
                    window.location.reload();
                },
                error: function(response) {
                    var errors = response.responseJSON;
                    $.each(errors, function(name, error) {
                        $("form#add-admin input[name='"+name+"']").parents('.form-group').addClass('has-error').append("<p class='text-danger'>"+error+"</p>");
                        $("form#add-admin input[name='"+password+"']").parents('.form-group').addClass('has-error').append("<p class='text-danger'>"+error+"</p>");
                        $("form#add-admin input[name='"+email+"']").parents('.form-group').addClass('has-error').append("<p class='text-danger'>"+error+"</p>");
                        $("form#add-admin input[name='"+mobile+"']").parents('.form-group').addClass('has-error').append("<p class='text-danger'>"+error+"</p>");
                    });
                },
                beforeSend: function() {
                }
            });
        });

        $(".edit-admin").on("click", function() {
            var id = $(this).data('edit');
            $.ajax({
                url: 'editAdmin',
                data: {id: id},
                type: "GET",
                success: function(response) {
                    $("form#edit-admin-form input[name='id']").val(response.id);
                    $("form#edit-admin-form input[name='name']").val(response.name);
                    $("form#edit-admin-form input[name='password']").val(response.password);
                    $("form#edit-admin-form input[name='email']").val(response.email);
                    $("form#edit-admin-form input[name='mobile']").val(response.mobile);
                    $("#edit-admin-modal").modal('show');
                },
                error: function(response) {

                },
                beforeSend: function() {
                }
            });
        });

        $("form#edit-admin-form").on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: 'updateAdmin',
                data: new FormData(this),
                processData: false,
                contentType: false,
                type: "POST",
                success: function(response) {
                    window.location.reload();

                },
                error: function(response) {

                },
                beforeSend: function() {
                }
            });
        });

        $(".delete-admin").on("click", function() {
            var id = $(this).data('delete');
            swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this admin!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                },
                function(){
                    $.ajax({
                        url: 'deleteAdmin',
                        data: {id: id, _token: '{{ csrf_token() }}', _method: 'DELETE'},
                        type: "DELETE",
                        success: function(response) {
                            swal("Deleted!", "Admin has been deleted.", "success");
                            window.location.reload();
                        },
                        error: function(response) {

                        },
                        beforeSend: function() {
                        }
                    });
                });
        });
    </script>

@endsection