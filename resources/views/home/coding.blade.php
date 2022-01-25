@extends('layouts.app')

@section('content')
    <div class="section_1">
        {!! $data['top']['content'] !!}
        <button>
            <a class="support-btn" href="{{ route('contact') }}">Get Support Today</a>
        </button>
    </div>

    <div class="section_2">
        <section>
            {!! $data['middle']['content'] !!}
        </section>
    </div>


    <div class="section_3">
        <section class="section_3_1">
            {!! $data['middle_1']['content'] !!}
        </section>
        <section class="section_3_2">
            {!! $data['middle_2']['content'] !!}
        </section>
        <section class="section_3_3">
            {!! $data['middle_3']['content'] !!}
        </section>
    </div>

    <div class="login_section">
        <section class="login_text">
            {!! $data['bottom']['content'] !!}
        </section>
        <section class="login_form">
            <div>
                <form class="register-form" action="">
                    <input type="text" id="" name="" placeholder="Name*">
                    <br><br>
                    <input type="email" id="" name="" placeholder="Email*">
                    <br><br>
                    <p>Select Agency Type</p>
                    <br>
                    <input type="checkbox" id="" name="" value="Home Care">
                    <label for="">Home Care</label>
                    <input type="checkbox" id="" name="" value="Hospice">
                    <label for="">Hospice</label> <br><br>
                    <button class="schedule">Schedule</button>
                </form>
            </div>
        </section>
    </div>
@endsection