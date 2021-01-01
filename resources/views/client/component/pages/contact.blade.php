@extends('client.master')
@section('content')

<div class="breadcrumb-area bg-gray-2 section-padding-1 pt-200 pb-120">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <div class="breadcrumb-title">
                <h2>Contact us</h2>
            </div>
            <ul>
                <li>
                    <a href="index.html">Home </a>
                </li>
                <li><span> > </span></li>
                <li class="active">Contact us</li>
            </ul>
        </div>
    </div>
</div>
<!-- cart start -->
<div class="contact-us-area pt-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 ml-auto mr-auto">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 col-md-7">
                        <div class="contact-form-area">
                            <h2>Get a quote</h2>
                            <form id="contact-form" action="http://whizthemes.com/mail-php/contact/mail.php" method="post">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <input name="first_name" type="text" placeholder="Your Name... *">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <input name="email_address" type="email" placeholder="Your Email... *">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <input name="phone" type="text" placeholder="Enter your phone...">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <select name="contact_subject">
                                            <option value="Inquiry Type">Inquiry Type</option>
                                            <option value="Inquiry 1">Inquiry 2</option>
                                            <option value="Inquiry 2">Inquiry 2</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <textarea name="message" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <button class="submit" type="submit">Send</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-5">
                        <div class="contact-info-area">
                            <h2>Get Info</h2>
                            <div class="contact-info-top">
                                <div class="sin-contact-info-wrap mb-25">
                                    <div class="contact-address">
                                        <i class="ti-home"></i>
                                        <span>Payna Headquarter</span>
                                    </div>
                                    <p>PO Box 16122 Collins Street West Victoria 8007 Australia</p>
                                </div>
                                <div class="sin-contact-info-wrap">
                                    <div class="contact-address">
                                        <i class="ti-home"></i>
                                        <span>Payna California</span>
                                    </div>
                                    <p>8131 Budd Rd Terre Haute, IN 47805</p>
                                </div>
                            </div>
                            <div class="contact-info-bottom">
                                <ul>
                                    <li><i class=" ti-email "></i>info@la-studioweb.com</li>
                                    <li><i class="ti-mobile"></i>+812-466-7130</li>
                                </ul>
                                <div class="contact-info-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-page-map pt-100">
        <div id="contact-2"></div>
    </div>
</div>
@endsection
