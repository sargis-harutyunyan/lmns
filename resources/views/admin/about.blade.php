@extends('layouts.admin')

@section('content')
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">About Page</h6>
            </div>
            <div class="card-body">
                <div style="" class="col-md-12">
                    <div class="table-responsive">

                            <table class="table align-items-center table-flush">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Position</th>
                                        <th>Social Link</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($team as $person)
                                        <tr>
                                            <td class="f_name">{{ $person->first_name }}</td>
                                            <td class="l_name">{{ $person->last_name }}</td>
                                            <td class="position">{{ $person->position }}</td>
                                            <td class="s_link">{{ $person->social_link }}</td>
                                            <td>
                                                <img style="height: 50px" class="image" src="{{ asset(BaseHelper::TEAM_IMG . $person->image) }}">
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-success btn-sm edit-person" data-id="{{ $person->id }}">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>

                    </div>
                </div>


                <form method="POST" action="{{ route('pages.about.vision') }}">
                    @csrf
                    <div style="margin-top: 25px" class="col-md-12">
                        <h3>Vision</h3>
                        <div class="row">

                        <textarea name="vision" class="form-control" id="vision">
                            {{ $vision->content }}
                        </textarea>

                        </div>
                    </div>
                    <div style="margin-top: 15px">
                        <button class="btn btn-sm btn-success">Save</button>
                        <button type="button" class="btn btn-sm btn-primary">Cancel</button>
                    </div>
                </form>

                <form method="POST" action="{{ route('pages.about.mission') }}">
                    @csrf
                    <div style="margin-top: 50px" class="col-md-12">
                        <h3>Mission</h3>
                        <div class="row">
                            <textarea name="mission" class="form-control" id="mission">
                                {{ $mission->content }}
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
                selector: 'textarea#vision',
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
                selector: 'textarea#mission',
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