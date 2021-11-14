@extends('layouts.app')

@section('content')
    <!--about leadership team -->
    <div class="leadership_team">
        <section class="leadership_title">
            <h1>The Leadership Team</h1>
        </section>

        <section class="members_list">
            @foreach($team as $person)
                <div>
                    <section class = "member_description">
                        <img src ="{{ asset(BaseHelper::TEAM_IMG . $person->image) }}" width="250px">
                        <h3>{{ $person->first_name . ' ' . $person->last_name }}</h3>
                        <p>{{ $person->position }}</p>
                        <!-- <a href= "#">view bio</a> -->
                    </section>

                    <section class="social_network_links">
                        <a href="{{ $person->social_link }}">
                            <!-- {{ $person->social_link }} -->
                            <img  src="" alt= "fbicon">
                        </a>
                    </section>
                </div>
        @endforeach
        </section>
    </div>

    <!-- vision and mission -->
    <div class = "vision_and_mission">
        <section class="vision">
            {!! $vision->content !!}
        </section>

        <section class="mission">
            {!! $mission->content !!}
        </section>
    </div>
@endsection