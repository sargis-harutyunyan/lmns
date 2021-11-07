@extends('layouts.admin')

@section('content')
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Home Page</h6>
            </div>
            <div class="card-body">


                <form method="POST" action="{{ route('pages.home.top') }}">
                    @csrf
                    <div style="margin-top: 25px" class="col-md-12">
                        <h3>Header</h3>
                        <div class="row">

                        <textarea name="vision" class="form-control" id="header">
                            {{ $data['top']['content'] }}
                        </textarea>

                        </div>
                    </div>
                    <div style="margin-top: 15px">
                        <button class="btn btn-sm btn-success">Save</button>
                        <button type="button" class="btn btn-sm btn-primary">Cancel</button>
                    </div>
                </form>


                <form method="POST" action="{{ route('pages.home.middle') }}">
                    @csrf
                    <div style="margin-top: 25px" class="col-md-12">
                        <h3>Middle</h3>
                        <div class="row">

                        <textarea name="vision" class="form-control" id="middle">
                            {{ $data['middle']['content'] }}
                        </textarea>

                        </div>
                    </div>
                    <div style="margin-top: 15px">
                        <button class="btn btn-sm btn-success">Save</button>
                        <button type="button" class="btn btn-sm btn-primary">Cancel</button>
                    </div>
                </form>

                <form method="POST" action="{{ route('pages.home.middle-1') }}">
                    @csrf
                    <div style="margin-top: 25px" class="col-md-12">
                        <h3>Middle Section 1</h3>
                        <div class="row">

                        <textarea name="vision" class="form-control" id="middle_s_1">
                            {{ $data['middle_1']['content'] }}
                        </textarea>

                        </div>
                    </div>
                    <div style="margin-top: 15px">
                        <button class="btn btn-sm btn-success">Save</button>
                        <button type="button" class="btn btn-sm btn-primary">Cancel</button>
                    </div>
                </form>

                <form method="POST" action="{{ route('pages.home.middle-2') }}">
                    @csrf
                    <div style="margin-top: 25px" class="col-md-12">
                        <h3>Middle Section 2</h3>
                        <div class="row">

                        <textarea name="vision" class="form-control" id="middle_s_2">
                            {{ $data['middle_2']['content'] }}
                        </textarea>

                        </div>
                    </div>
                    <div style="margin-top: 15px">
                        <button class="btn btn-sm btn-success">Save</button>
                        <button type="button" class="btn btn-sm btn-primary">Cancel</button>
                    </div>
                </form>

                <form method="POST" action="{{ route('pages.home.middle-3') }}">
                    @csrf
                    <div style="margin-top: 25px" class="col-md-12">
                        <h3>Middle Section 3</h3>
                        <div class="row">

                        <textarea name="vision" class="form-control" id="middle_s_3">
                            {{ $data['middle_3']['content'] }}
                        </textarea>

                        </div>
                    </div>
                    <div style="margin-top: 15px">
                        <button class="btn btn-sm btn-success">Save</button>
                        <button type="button" class="btn btn-sm btn-primary">Cancel</button>
                    </div>
                </form>

                <form method="POST" action="{{ route('pages.home.bottom') }}">
                    @csrf
                    <div style="margin-top: 25px" class="col-md-12">
                        <h3>Bottom</h3>
                        <div class="row">

                        <textarea name="vision" class="form-control" id="bottom">
                            {{ $data['bottom']['content'] }}
                        </textarea>

                        </div>
                    </div>
                    <div style="margin-top: 15px">
                        <button class="btn btn-sm btn-success">Save</button>
                        <button type="button" class="btn btn-sm btn-primary">Cancel</button>
                    </div>
                </form>

            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="{{ route('pages.about.team') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="">
                                <div class="card-body">
                                    <input type="hidden" name="id" value="" id="id_inp">
                                    <div class="form-group row">
                                        <label for="f_name" class="col-sm-3 col-form-label">First Name</label>
                                        <div class="col-sm-9">
                                            <input required type="text" name="first_name" class="form-control" id="f_name" placeholder="First Name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="l_name" class="col-sm-3 col-form-label">Last Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="last_name" class="form-control" id="l_name" placeholder="Last Name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label required for="position" class="col-sm-3 col-form-label">Position</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="position" class="form-control" id="position" placeholder="Position">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="s_link" class="col-sm-3 col-form-label">Social Link</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="social_link" class="form-control" id="s_link" placeholder="Social Link">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Image</label>
                                        <div class="col-sm-2">
                                            <img style="height: 40px" id="image_s" src="">
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="file" name="image" class="custom-file-input" id="image">
                                                <label class="custom-file-label" for="image">Choose file</label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            tinymce.init({
                selector: 'textarea#header',
                height: 200,
                menubar: false,
                branding: false,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table paste code help wordcount'
                ],
                toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
            });

        });

        $(document).ready(function(){
            tinymce.init({
                selector: 'textarea#middle',
                height: 200,
                menubar: false,
                branding: false,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table paste code help wordcount'
                ],
                toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
            });

        });$(document).ready(function(){
            tinymce.init({
                selector: 'textarea#middle',
                height: 200,
                menubar: false,
                branding: false,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table paste code help wordcount'
                ],
                toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
            });

        });

        $(document).ready(function(){
            tinymce.init({
                selector: 'textarea#middle_s_1',
                height: 200,
                menubar: false,
                branding: false,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table paste code help wordcount'
                ],
                toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
            });

        });

        $(document).ready(function(){
            tinymce.init({
                selector: 'textarea#middle_s_2',
                height: 200,
                menubar: false,
                branding: false,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table paste code help wordcount'
                ],
                toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
            });

        });

        $(document).ready(function(){
            tinymce.init({
                selector: 'textarea#middle_s_3',
                height: 200,
                menubar: false,
                branding: false,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table paste code help wordcount'
                ],
                toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
            });

        });

        $(document).ready(function(){
            tinymce.init({
                selector: 'textarea#bottom',
                height: 200,
                menubar: false,
                branding: false,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table paste code help wordcount'
                ],
                toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
            });

        });

        $(document).on('click', '.edit-person', function () {
            var parentRaw = $(this).closest('tr');

            $('#id_inp').val($(this).data('id'));
            $('#f_name').val(parentRaw.find('.f_name').text());
            $('#l_name').val(parentRaw.find('.l_name').text());
            $('#position').val(parentRaw.find('.position').text());
            $('#s_link').val(parentRaw.find('.s_link').text());
            $('#image_s').attr('src' ,parentRaw.find('img').attr('src'));

            $('#exampleModal').modal('show')
        })
    </script>

@endsection