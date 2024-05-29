@extends('admin.layouts.app')

<style>
    .datatable-input {
        display: none;
    }
</style>
@section('content')


<main id="main" class="main">
    <section class="section dashboard" style="margin-left: -260px;
">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-0">
                        <div class="col-sm-6">
                            <h1 class="m-0">Gallery</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <div class="float-sm-right">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>

                                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fas fa-plus"></i> Add About service</button> -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#test" data-whatever="@mdo"><i class="fas fa-plus"></i> Add Gallery</button>
                            </div>
                        </div>

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document"> <!-- Added modal-lg class for large width -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add content service</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('add-client') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6"> <!-- Each input takes half of the row width on medium screens -->
                                        <div class="form-group">
                                            <label for="title" class="col-form-label">Title:</label>
                                            <input type="text" class="form-control" id="title" name="title" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6"> <!-- Each input takes half of the row width on medium screens -->
                                        <div class="form-group">
                                            <label for="spantitle" class="col-form-label">Color Title:</label>
                                            <input type="text" class="form-control" id="spantitle" name="spantitle" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Content</label>
                                    <textarea class="form-control" id="message-text" name="content" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Photo:</label>
                                    <input type="file" class="form-control" id="recipient-name" name="image" required>
                                </div>

                                <h5 class="modal-title" id="exampleModalLabel">Add ourservice service</h5>
                                <div class="col-md-12"> <!-- Each input takes half of the row width on medium screens -->
                                    <div class="form-group">
                                        <label for="spantitle" class="col-form-label">Service Title</label>:</label>
                                        <input type="text" class="form-control" id="spantitle" name="servicetitle">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">service content</label>
                                    <textarea class="form-control" id="message-text" name="servicedescription"></textarea>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="test" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add gallery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('add-gallery') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    
                 
                    <div class="form-group">
                        <label for="machineimage" class="col-form-label">Photo:</label>
                        <input type="file" class="form-control" id="machineimage" name="machineimage" required>
                        @error('machineimage')
                        <div id="image-error" class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
            </form>
        </div>
    </div>
</div>

            <div class="modal fade" id="editModal1" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Record</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="editForm1" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title" class="col-form-label">Title:</label>
                                            <input type="text" class="form-control" id="1" name="title" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="spantitle" class="col-form-label">Color Title:</label>
                                            <input type="text" class="form-control" id="2" name="spantitle" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="content" class="col-form-label">Content</label>
                                    <textarea class="form-control" id="3" name="content" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="image" class="col-form-label">Photo:</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                                <img src="" alt="Image" id="4" width="100px" height="100px">

                                <h5 class="modal-title" id="exampleModalLabel">Add ourservice </h5>
                                <div class="col-md-12"> <!-- Each input takes half of the row width on medium screens -->
                                    <div class="form-group">
                                        <label for="spantitle" class="col-form-label">Service Title</label>:</label>
                                        <input type="text" class="form-control" id="servicetitle" name="servicetitle">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">service content</label>
                                    <textarea class="form-control" id="servicedescription" name="servicedescription"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="updateRecord1">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- <section class="section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <!-- <p style="color: red;">(*First Record only Display.Delete Exists*)</p> 
                                <div class="card-body">
                                    <h5 class="card-title"> Tables</h5>


                                    <!-- Table with stripped rows 
                                    <div class="table-responsive">
                                        <table class="table table-striped datatable">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Title</th>
                                                    <th>SpanTitle</th>
                                                    <th>Description</th>
                                                    <th>Photo</th>
                                                    <th>#</th>
                                                    <th>Service Title</th>
                                                    <th>Service Description</th>

                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($getRecord as $value)
                                                <tr>
                                                    <td>{{$value->id}}</td>
                                                    <td>{{$value->title}}</td>
                                                    <td>{{$value->spantitle}}</td>
                                                    <td>{{ strlen($value->content) > 50 ? substr($value->content, 0, 50) . '...' : $value->content }}</td>

                                                    <td><img src="{{ asset('public/images/' . $value->image) }}" style="width:100px;height:60px;" alt="Image"></td>
                                                    <td></td>
                                                    <td>{{$value->servicetitle}}</td>
                                                    <td>{{ strlen($value->servicedescription) > 50 ? substr($value->servicedescription, 0, 50) . '...' : $value->servicedescription }}</td>

                                                    <td>
                                                        <a href="#" class="btn btn-info edit-btn1" data-id="{{ $value->id }}" data-toggle="modal" data-target="#editModal1"><i class="fas fa-edit"></i></a>

                                                        <a onclick="return confirm('Are you sure you want to delete?')" href="{{url('admin/addclient/deleteclient/'.$value->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>


                                    </div>
                                    <!-- End Table with stripped rows 

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <section class="section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Our Gallery</h5>

                                    <!-- Table with stripped rows -->
                                    <div class="table-responsive">
                                        <table class="table table-striped datatable">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                            
                                                    <th>photo</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($getRecord1 as $value)
                                                <tr>
                                                    <td>{{$value->id}}</td>
                                                   
                                                    <td><img src="{{ asset('public/images/' . $value->machineimage) }}" style="width:100px;height:60px;" alt="Image"></td>

                                                    <td>


                                                        <a onclick="return confirm('Are you sure you want to delete?')" href="{{url('admin/gallery/delete/'.$value->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                        <a href="#" class="btn btn-info edit-btn" data-id="{{ $value->id }}" data-toggle="modal" data-target="#editModal"><i class="fas fa-edit"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>

                                        </table>
                                        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editModalLabel">Edit Record</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="editForm" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            
                                                            <div class="form-group">
                                                                <label for="message-text" class="col-form-label">photo:</label>

                                                                <input type="file" class="form-control" id="" name="machineimage">
                                                            </div>
                                                            <img src="" alt="Image" id="7" width="100px" height="100px">
                                                            <!-- Add more input fields for other data if needed -->
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary" id="updateRecord">Save changes</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Table with stripped rows -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @include('admin.layouts.message')

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="text-center mt-1 mb-2">


                        </div>





                        <style>
                            /* The switch - the box around the slider */
                            .switch {
                                position: relative;
                                display: inline-block;
                                width: 60px;
                                height: 34px;
                            }

                            /* Hide default HTML checkbox */
                            .switch input {
                                opacity: 0;
                                width: 0;
                                height: 0;
                            }

                            /* The slider - the moving part */
                            .slider {
                                position: absolute;
                                cursor: pointer;
                                top: 0;
                                left: 0;
                                right: 0;
                                bottom: 0;
                                background-color: #ccc;
                                -webkit-transition: .4s;
                                transition: .4s;
                            }

                            .slider:before {
                                position: absolute;
                                content: "";
                                height: 26px;
                                width: 26px;
                                left: 4px;
                                bottom: 4px;
                                background-color: white;
                                -webkit-transition: .4s;
                                transition: .4s;
                            }

                            input:checked+.slider {
                                background-color: #2196F3;
                            }

                            input:focus+.slider {
                                box-shadow: 0 0 1px #2196F3;
                            }

                            input:checked+.slider:before {
                                -webkit-transform: translateX(26px);
                                -ms-transform: translateX(26px);
                                transform: translateX(26px);
                            }

                            /* Rounded sliders */
                            .slider.round {
                                border-radius: 34px;
                            }

                            .slider.round:before {
                                border-radius: 50%;
                            }
                        </style>

                        {{-- <label class="switch">
    <input type="checkbox">
    <span class="slider rectangle"></span>
</label> --}}

                        {{-- its toggle button html script --}}















                        {{-- End - Content comes here --}}
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
    </section>
</main>
@endsection
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.datatable').DataTable();

    });
    $('.datatable').DataTable({
        searching: false

    });
</script>

<script>
    $(document).ready(function() {
        $('.edit-btn').on('click', function() {
            var id = $(this).data('id');
            $('#editForm').attr('action', "{{ route('updategallery', '') }}" + '/' + id);
            $.ajax({
                type: "GET",
                url: "{{ url('admin/gallery/edit') }}" + '/' + id,
                success: function(response) {
                    $('#7').attr('src', "{{ asset('public/images/') }}" + '/' + response.machineimage);
                    // $('#5').val(response.machinetitle);
                    // $('#6').val(response.description);

                    // Update other input fields as needed
                }
            });
        });

        $('#updateRecord').on('click', function() {
            $('#editForm').submit();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.edit-btn1').on('click', function() {
            var id = $(this).data('id');
            $('#editForm1').attr('action', "{{ route('updateclient1', '') }}" + '/' + id);
            $.ajax({
                type: "GET",
                url: "{{ url('admin/service1/edit') }}" + '/' + id,
                success: function(response) {
                    $('#4').attr('src', "{{ asset('public/images/') }}" + '/' + response.image);
                    $('#1').val(response.title);
                    $('#2').val(response.spantitle);
                    $('#3').val(response.content);
                    $('#servicedescription').val(response.servicedescription);
                    $('#servicetitle').val(response.servicetitle);
                    // Update other input fields as needed
                }
            });
        });

        $('#updateRecord1').on('click', function() {
            $('#editForm1').submit();
        });
    });
</script>

<script>
    // Check if there are validation errors, and if so, show the modal
    @if ($errors->any())
        $(document).ready(function() {
            $('#test').modal('show');
        });
    @endif
</script>



@section('style')




@endsection