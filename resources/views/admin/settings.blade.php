@extends('layouts.admin')

@section('content')
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Site Settings</h6>
            </div>
            <div class="card-body">
                <div style="" class="col-md-6">
                    <div class="row">

                            <div class="col-md-4" style="min-height: 225px">
                                <form method="POST" action="" enctype="multipart/form-data">
                                    @csrf
                                    <div style="background-color: #8A0000; width: 160px; height: 160px; margin-bottom: 15px">
                                        <img width="160px" class="logo-img" src="{{ BaseHelper::logo() }}">
                                    </div>
                                    <label style="width: 160px" for="logo" class="btn btn-primary logo-btn">Logo</label>
                                    <input hidden name="logo" type="file" class="form-control logo-inp" id="logo" placeholder="Site Logo">
                                    <div class="invalid-feedback logo-inv"></div>
                                </form>
                            </div>


                            <div class="col-md-4" style="min-height: 225px">
                                <form method="POST" action="{{ route('settings.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div style="background-color: #8A0000; width: 160px; height: 160px; margin-bottom: 15px">
                                        <img width="160" class="favicon-img" src="{{ BaseHelper::favicon() }}">
                                    </div>
                                    <label style="width: 160px" for="fav" class="btn btn-primary fav-btn">Favicon</label>
                                    <input hidden name="favicon" type="file" class="form-control fav-inp" id="fav">
                                    <div class="invalid-feedback fav-inv"></div>
                                </form>
                            </div>


                            <div class="col-md-4" style="min-height: 225px">
                                <form method="POST" action="{{ route('settings.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div style="background-color: #8A0000; width: 160px; height: 160px; margin-bottom: 15px">
                                        <img width="160px" class="foot-img" src="{{ BaseHelper::footer() }}">
                                    </div>
                                    <label style="width: 160px" for="footer-img" class="btn btn-primary foot-btn">Footer Image</label>
                                    <input hidden name="footer-img" type="file" class="form-control foot-inp" id="footer-img" placeholder="Site Logo">
                                    <div class="invalid-feedback foot-inv"></div>
                                </form>
                            </div>

                    </div>
                </div>
                <form method="POST" action="{{ route('settings.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                               placeholder="Email Address"
                               value="{{ old('email', $settings->email) }}" required>
                        @error('email')
                            {{--<div class="alert alert-danger">{{ $message }}</div>--}}
                            <div class="invalid-feedback logo-inv">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input name="phone" type="text" class="form-control @error('phone') is-invalid @enderror" id="phone"
                               placeholder="Phone Number"
                               value="{{ old('phone', $settings->phone) }}" required>
                        @error('phone')
                            {{--<div class="alert alert-danger">{{ $message }}</div>--}}
                            <div class="invalid-feedback logo-inv">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input name="address" type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                               placeholder="Address"
                               value="{{ old('address', $settings->address) }}" required>
                        @error('address')
                            {{--<div class="alert alert-danger">{{ $message }}</div>--}}
                            <div class="invalid-feedback logo-inv">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="fb">Facebook</label>
                        <input name="facebook" type="text" class="form-control @error('facebook') is-invalid @enderror" id="fb"
                               placeholder="Facebook Profile"
                               value="{{ old('facebook', $settings->facebook) }}" required>
                        @error('facebook')
                            {{--<div class="alert alert-danger">{{ $message }}</div>--}}
                            <div class="invalid-feedback logo-inv">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="tw">Twitter</label>
                        <input name="twitter" type="text" class="form-control @error('twitter') is-invalid @enderror" id="tw"
                               placeholder="Twitter Profile"
                               value="{{ old('twitter', $settings->twitter) }}" required>
                        @error('twitter')
                            {{--<div class="alert alert-danger">{{ $message }}</div>--}}
                            <div class="invalid-feedback logo-inv">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="ln">Linkedin</label>
                        <input name="linkedin" type="text" class="form-control @error('linkedin') is-invalid @enderror" id="ln"
                               placeholder="Linkedin Profile"
                               value="{{ old('linkedin', $settings->linkedin) }}" required>
                        @error('linkedin')
                            {{--<div class="alert alert-danger">{{ $message }}</div>--}}
                            <div class="invalid-feedback logo-inv">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('.fav-inp').on('change', function(event){
                console.log(2313);
                $.ajax({
                    url:"{{ route('settings.favicon') }}",
                    method: "POST",
                    data: new FormData(this.closest('form')),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success:function(data)
                    {
                        if (data.success) {
                            $('.favicon-img').attr('src', '{{ asset('') }}' + data.image)
                        } else {

                            $('.fav-btn').addClass('form-control is-invalid');
                            $('.fav-inv').html(data.message)
                        }
                    }
                })
            });

            $('.logo-inp').on('change', function(event){
                console.log(2313);
                $.ajax({
                    url:"{{ route('settings.logo') }}",
                    method: "POST",
                    data: new FormData(this.closest('form')),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success:function(data)
                    {
                        if (data.success) {
                            $('.logo-img').attr('src', '{{ asset('') }}' + data.image)
                        } else {

                            $('.logo-btn').addClass('form-control is-invalid');
                            $('.logo-inv').html(data.message)
                        }
                    }
                })
            });


            $('.foot-inp').on('change', function(event){
                console.log(2313);
                $.ajax({
                    url:"{{ route('settings.footer') }}",
                    method: "POST",
                    data: new FormData(this.closest('form')),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success:function(data)
                    {
                        if (data.success) {
                            $('.foot-img').attr('src', '{{ asset('') }}' + data.image)
                        } else {

                            $('.foot-btn').addClass('form-control is-invalid');
                            $('.foot-inv').html(data.message)
                        }
                    }
                })
            });

        });
    </script>
@endsection