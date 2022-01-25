<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <title>{{ config('app.name', 'LMNS') }}</title>
        <link rel="icon" href="{{ BaseHelper::favicon() }}">
    </head>
    <body>
        <header>
            <section class="logo">
                <a href="{{ route('home') }}">
                    <img class="logo_img" src="{{ BaseHelper::logo() }}">
                </a>
            </section>
            <section class="form_and_tell">
                <a href="tel:{{ $settings->phone }}">{{ $settings->phone }}</a>
            </section>
        </header>

        <nav class="menu_list">
            <ul>
            <li class="{{ Request::route()->getName() === 'billing' ? 'active' : '' }}">
                    <a href="{{ route('billing') }}">BILLING AND FINANCIAL</a>
                </li>
                <li class="{{ Request::route()->getName() === 'coding' ? 'active' : '' }}">
                    <a href="{{ route('coding') }}">CODING AND OASIS</a>
                </li>
                <li class="{{ Request::route()->getName() === 'about' ? 'active' : '' }}">
                    <a href="{{ route('about') }}">ABOUT</a>
                </li>
                <li class="{{ Request::route()->getName() === 'contact' ? 'active' : '' }}">
                    <a href="{{ route('contact') }}">CONTACT US</a>
                </li>
            </ul>
        </nav>

        @yield('content')

         <footer>
            <section class="contact_information">
                <a href="{{ route('home') }}">
                    <img src="{{ BaseHelper::footer() }}" width="300px">
                </a>
                <p>Empowering Home Care & Hospice Agencies to Achieve Success</p>
                <ul>
                    <li class="email">
                        <a href="mailto:">
                            {{ $settings->email }}
                        </a>
                    </li>
                    <li class="telephone">
                        <a href="tel:{{ $settings->phone }}">
                            {{ $settings->phone }}
                        </a>
                    </li>
                    <!-- <li class="address">
                        <a href="#">
                            {{ $settings->address }}
                        </a>
                    </li> -->
                </ul>
            </section>
            <section class="footer_nav_menu">
                <h3>Useful Links</h3>
                <ul>
                    <li>
                        <a href="{{ route('about') }}">About LMNS</a>
                    </li>
                    <li>
                        <a href="{{ route('support') }}">Client Support</a>
                    </li>
                </ul>
            </section>
            <section class="footer_form">
                <form action="">
                    <label for="">Subscribe to the LMNS Newsletter</label>
                    <div class="input_and_button">
                        <section class="subscribe_email_div">
                            <input type="email" id="email" name="" placeholder="Email*">
                        </section>
                        <section class="subscribe_button_div">
                            <button class="subscribe_button">Subscribe</button>
                        </section>
                    </div>
                </form>
                <section class="pages_links">
                    <a href="{{ $settings->facebook }}" target="_blank">
                        <img src="{{ asset('images/fb_icon.png') }}" width="38px">
                    </a>
                    <a href="{{ $settings->linkedin }}" target="_blank">
                        <img src="{{ asset('images/in_icon.png') }}" width="40px">
                    </a>
                    <a href="{{ $settings->twitter }}" target="_blank">
                        <img src="{{ asset('images/tw_icon.png') }}" width="40px">
                    </a>
                </section>
            </section>
        </footer>
        
        <div class="copyright">
            <section class="copyright_section">
                <p>COPYRIGHT © {{ date('Y') }}</p>
            </section>
        </div> 
    </body>
</html>
