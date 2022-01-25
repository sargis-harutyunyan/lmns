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

@endsection