@extends('layouts.app')

@section('content')
    <div class="section_1">
        <h1>Lorem ipsum dolor sit amet.</h1>
        <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem, blanditiis.</h3>
        <button>{{ route('contact') }}</button>
    </div>
    <div class="section_2">
        <section>
            <h1>Lorem ipsum dolor sit, amet consectetur adipisicing</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt harum sint culpa aliquam nobis, quasi modi impedit aliquid atque alias repellendus minus nostrum delectus dolore voluptate quae vel molestias! Tempore laborum, maxime est soluta fugiat similique. Iusto voluptatem nam officiis dolores aliquam? Et blanditiis amet molestiae impedit quam porro natus hic eaque doloribus, harum magnam sint qui animi. Placeat, deserunt!</p>
        </section>
    </div>
    <div class="section_3">
        <section class="section_3_1">
            <img src="{{ asset('images/home-services-financial.png') }}">
            <h2>Lorem & dolor.</h2>
            <p>Lorem Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate odit amet minus facere ut! Minus vitae consectetur ipsum vel voluptas?ipsum dolor sit amet consectetur adipisicing elit. Eos quaerat minima repellendus ad velit repellat unde, provident facere modi quidem animi rerum consequatur, quibusdam soluta! Vero dolor cum pariatur cumque.</p>
            <button class="section_3_button">Lorem, ipsum dolor.</button>
        </section>
        <section class="section_3_2">
            <img src="{{ asset('images/home-services-coding-oasis.png') }}">
            <h2>Lorem & dolor.</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere doloremque obcaecati delectus iure aspernatur est beatae officia. Provident tenetur quae reiciendis nemo accusamus iste magni commodi! Neque culpa suscipit aperiam, consequatur eius ad temporibus incidunt, aliquam modi consectetur eaque repudiandae rem, quisquam soluta iste quidem delectus. Ipsum placeat modi suscipit.</p>
            <button class="section_3_button">Lorem, ipsum.</button>
        </section>
        <section class="section_3_3">
            <img src="{{ asset('images/home-services-clinical.png') }}">
            <h2>Lorem & dolor.</h2>
            <p>elit. Laboriosam, numquam?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias explicabo cum, vero sunt reiciendis modi aut quis non aliquam nobis quod doloribus perferendis cumque? Ducimus amet itaque, nesciunt commodi blanditiis quo natus rem non numquam eligendi consectetur dicta dolorum ea repudiandae error voluptas iste! Asperiores eveniet iure ab soluta voluptate!</p>
            <button class="section_3_button">Lorem, ipsum.</button>
        </section>
    </div>
    <div class="login_section">
        <section class="login_text">
            <h1>Schedule A Meeting with Healthcare Provider Solutions</h1>
            <p>Our team of dedicated professionals is standing by to assist you. With our combined experience and easy-to-use online resources, we have many ways to help your agency regardless of your location.
                <br><br> How can we help your agency succeed? Submit the form to schedule a meeting to speak with us one-on-one.</p>
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