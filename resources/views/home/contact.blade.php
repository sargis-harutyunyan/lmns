@extends('layouts.app')

@section('content')
    <div class= "contactUs_img">
        <!-- <h1>Contact Us</h1> -->
    </div>

    <div class= "contactUs_form">
        <form action="">
            <section>
                <label for="firstName">First Name*</label><br>
                <input type = "text" name="firstName" id="firstName" required><br>

                <label for="lastName">Last Name*</label><br>
                <input type = "text" name="lastName" id="lastName" required><br>

                <label for="phone">Phone*</label><br>
                <input type = "tel" name="phone" id="phone" required><br>

            </section>

            <section>
                <label for="email">Email*</label><br>
                <input type = "email" name="email" id="email" required><br>

                <label for="companyName">Company Name</label><br>
                <input type = "text" name="companyName" id="companyName">

                <label for="address">Address</label><br>
                <input type = "text" name="address" id="address">

                <input type="submit" id="submit">
            </section>
            <section>
                <br><label for="message">Message</label>
                <textarea name="message" id="message"></textarea>
            </section>
        </form>
    </div>
@endsection