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
            <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#add-product-modal"> Add New Product</button>
        </div>
        <div class="col-md-12 mt-20">
            <table id="products-table" class="table table-striped">
                <thead>
                <tr role="row">
                    <th>English Name</th>
                    <th>الاسم بالعربي</th>
                    <th>English Description</th>
                    <th>الوصف بالعربي</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($products as $product)
                    <tr role="row">
                        <td>{{ $product->name_english }}</td>
                        <td>{{ $product->name_arabic }}</td>
                        <td>{{ $product->description_english }}</td>
                        <td>{{ $product->description_arabic }}</td>
                        <td>{{ $product->price }}</td>
                        <td><img src="{{  asset('img/products') }}/{{ $product->image }}" alt="{{ $product->name }}" class="img-responsive img-center" /></td>
                        <td>{{ $product->category['name_english'] }}</td>
                        <td>
                            <i class="btn btn-info glyphicon glyphicon-edit edit-product" href="javascript:;" data-edit="{{ $product->id }}"></i>
                            <i class="btn btn-danger glyphicon glyphicon-trash delete-product" href="javascript:;" data-delete="{{ $product->id }}"></i>
                        </td>
                    </tr>
                @empty
                    <h3>No Products</h3>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade mt-50" id="add-product-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="POST" id="add-product">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title text-center">Add New Product</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 prl-20">
                                <div class="form-group">
                                    <input type="hidden" name="type" value="product">
                                    <label>English Product Name <span class="mandatory">*</span></label>
                                    <input type="text" name="name_english" class="form-control" placeholder="english product name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 prl-20">
                                <div class="form-group">
                                    <label>اسم المنتج بالعربي <span class="mandatory">*</span></label>
                                    <input type="text" name="name_arabic" placeholder="اسم المنتج بالعربي" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 prl-20">
                                <div class="form-group">
                                    <label>English Product Description<span class="mandatory">*</span></label>
                                    <textarea type="text" name="description_english" placeholder="english product description" المنتج class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 prl-20">
                                <div class="form-group">
                                    <label>وصف المنتج بالعربي<span class="mandatory">*</span></label>
                                    <textarea type="text" name="description_arabic" placeholder="الوصف المنتج بالعربي" المنتج class="form-control" ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 prl-20">
                                <div class="form-group">
                                    <label>Price<span class="mandatory">*</span></label>
                                    <input type="number" name="price" placeholder="price" المنتج class="form-control" min="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group clearfix">
                                <div class="col-md-12 prl-20">
                                    <div class="slim"
                                         data-label="Drop Your Product Image"
                                         data-size="100,100"
                                         data-ratio="1:1">
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 prl-20">
                                <div class="form-group">
                                    <label>Product Category</label>
                                    <select type="text" name="category" class="form-control" placeholder="product category">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name_english }}</option>
                                        @endforeach
                                    </select>
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

    <div class="modal fade" id="edit-product-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="margin-top: 50px;">
                <form method="POST" id="edit-product-form">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title text-center">Edit product</h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id">
                        <div class="row">
                            <div class="col-md-12 prl-20">
                                <div class="form-group">
                                    <input type="hidden" name="type" value="product">
                                    <label>English Product Name <span class="mandatory">*</span></label>
                                    <input type="text" name="name_english" class="form-control" placeholder="english product name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 prl-20">
                                <div class="form-group">
                                    <label>اسم المنتج بالعربي <span class="mandatory">*</span></label>
                                    <input type="text" name="name_arabic" placeholder="اسم المنتج بالعربي" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 prl-20">
                                <div class="form-group">
                                    <label>English Product Description<span class="mandatory">*</span></label>
                                    <textarea type="text" name="description_english" placeholder="english product description" المنتج class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 prl-20">
                                <div class="form-group">
                                    <label>وصف المنتج بالعربي<span class="mandatory">*</span></label>
                                    <textarea type="text" name="description_arabic" placeholder="الوصف المنتج بالعربي" المنتج class="form-control" ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 prl-20">
                                <div class="form-group">
                                    <label>Price<span class="mandatory">*</span></label>
                                    <input type="number" name="price" placeholder="price" المنتج class="form-control" min="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group clearfix">
                                <div class="col-md-12 prl-20">
                                    <div class="slim"
                                         data-label="Drop Your Product Image"
                                         data-size="100,100"
                                         data-ratio="1:1">
                                        <img src="{{ asset('img/products') }}/{{ $product->image }}" alt="{{ $product->name }}" class="form-control" id="edit-course-image" name="image"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 prl-20">
                                <div class="form-group">
                                    <label>Product Category</label>
                                    <select type="text" name="category" class="form-control" placeholder="product category">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name_english }}</option>
                                        @endforeach
                                    </select>
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
            $('#products-table').DataTable();
        });

        $("form#add-product").on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: 'addNewProduct',
                data: $(this).serialize(),
                type: "POST",
                success: function(response) {
                    window.location.reload();
                },
                error: function(response) {
                    var errors = response.responseJSON;
                    $.each(errors, function(name, error) {
                        $("form#add-product input[name='"+name_english+"']").parents('.form-group').addClass('has-error').append("<p class='text-danger'>"+error+"</p>");
                        $("form#add-product input[name='"+name_arabic+"']").parents('.form-group').addClass('has-error').append("<p class='text-danger'>"+error+"</p>");
                        $("form#add-product textarea[name='"+description_english+"']").parents('.form-group').addClass('has-error').append("<p class='text-danger'>"+error+"</p>");
                        $("form#add-product textarea[name='"+description_arabic+"']").parents('.form-group').addClass('has-error').append("<p class='text-danger'>"+error+"</p>");
                        $("form#add-product input[name='"+price+"']").parents('.form-group').addClass('has-error').append("<p class='text-danger'>"+error+"</p>");
                        $("form#add-product input[name='"+image+"']").parents('.form-group').addClass('has-error').append("<p class='text-danger'>"+error+"</p>");
                    });
                },
                beforeSend: function() {
                }
            });
        });

        $(".edit-product").on("click", function() {
            var id = $(this).data('edit');
            $.ajax({
                url: 'editProduct',
                data: {id: id},
                type: "GET",
                success: function(response) {
                    $("form#edit-product-form input[name='id']").val(response.id);
                    $("form#edit-product-form input[name='name_english']").val(response.name_english);
                    $("form#edit-product-form input[name='name_arabic']").val(response.name_arabic);
                    $("form#edit-product-form textarea[name='description_english']").val(response.description_english);
                    $("form#edit-product-form textarea[name='description_arabic']").val(response.description_arabic);
                    $("form#edit-product-form input[name='price']").val(response.price);
                    $("form#edit-product-image").attr('src', "{{ asset('public/img/products') }}/"+response.image);
                    $("#edit-product-modal").modal('show');
                },
                error: function(response) {

                },
                beforeSend: function() {
                }
            });
        });

        $("form#edit-product-form").on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: 'updateProduct',
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

        $(".delete-product").on("click", function() {
            var id = $(this).data('delete');
            swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this product!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                },
                function(){
                    $.ajax({
                        url: 'deleteProduct',
                        data: {id: id, _token: '{{ csrf_token() }}', _method: 'DELETE'},
                        type: "DELETE",
                        success: function(response) {
                            swal("Deleted!", "Product has been deleted.", "success");
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