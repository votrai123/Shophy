@extends('index')
@section('content')
<div class="page-title parallax parallax1">
<section class="flat-row flat-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-section margin_bottom_17">
                            <h2 class="title">
                                Send Email
                            </h2>
                        </div><!-- /.title-section -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="wrap-contact style2">
                        <form novalidate="" class="contact-form" id="contactform" method="post" action="#">
                            <div class="form-text-wrap clearfix">
                                <div class="contact-name">
                                    <label></label>                                  
                                    <input type="text" placeholder="Name" aria-required="true" size="30" value="" name="author" id="author">
                                </div>
                                <div class="contact-email"> 
                                    <label></label>                                       
                                    <input type="email" size="30" placeholder="Email" value="" name="email" id="email">
                                </div>
                                <div class="contact-subject">
                                    <label></label>                                    
                                    <input type="text" placeholder="Address" aria-required="true" size="30" value="" name="subject" id="subject">
                                </div>
                            </div>                                
                            <div class="contact-message clearfix">
                                <label></label> 
                                <textarea class="" tabindex="4" placeholder="Message"  name="message" required></textarea>                                      
                            </div>                                                     
                            <div class="form-submit">                 
                                <button class="contact-submit">Order</button>
                            </div>
                        </form>
                    </div><!-- /.wrap-contact -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.flat-row -->
        </div>
@endsection