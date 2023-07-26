@extends("layouts.app")

@section("content")

    <!-- Contact Form In start -->
    <section class="contact-form">
        <div class="overlay pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-header text-center">
                            <h2 class="title">Get in touch with us for more information</h2>
                            <p>If you need help or have a question, we’re here for you</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="form-area">
                            <form action="#">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="single-input d-flex align-items-center">
                                            <input type="text" placeholder="Name">
                                            <img src="assets/img/contact-user-icon.png" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="single-input d-flex align-items-center">
                                            <input type="email" placeholder="Email">
                                            <img src="assets/img/contact-email-icon.png" alt="image">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="single-input d-flex align-items-center">
                                            <input type="text" placeholder="Phone">
                                            <img src="assets/img/contact-phone-icon.png" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="single-input d-flex align-items-center">
                                            <input type="text" placeholder="Company">
                                            <img src="assets/img/contact-com-icon.png" alt="image">
                                        </div>
                                    </div>
                                </div>
                                <div class="single-input d-flex align-items-center">
                                    <input type="text" placeholder="How can we help you?">
                                </div>
                                <div class="single-input d-flex align-items-center">
                                    <textarea placeholder="What’s your message?" cols="30" rows="10"></textarea>
                                </div>
                                <div class="btn-area text-center">
                                    <button class="cmn-btn">Send message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form In end -->
    
@endsection