<div class="section">
    <div class="container-fluid  p-0" id="contact">
        <div class="row section-content">
            <div class="col-md-6">
                <div class="contact-image">
                    <div class="contact-us-icon">
                        <img class="img-fluid " src="{{asset('image/contact-us.png')}}" alt="contact-us">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mt-5">
                    <div class="section-title pt-5 pt-md-0">
                        <h2 class="title-1">Hello</h2>
                        <h2 class="title-2">let's work together <span class="point">.</span></h2>
                        <h2 class="title-3">Donnez vie à vos idées<span class="point"> !</span> </h2>
                    </div>
                    <div class="contact-form  overflow-auto"> 
                        @include('includes.contactForm')
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .contact-image{
        background-image: url('image/contact-form-background.jpg');
        background-size: cover;
        width: 100%;
        min-height: 100vh;
        position: relative;
    }
    .contact-us-icon{
        width: 40%;
        height: 40%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
    }
    .contact-form{
        margin-top: 20px;
        padding-right: 50px;
        height: 350px;
    }
    .contact-form .form-control,#messageObject,#guest{
        font-size: 13px;
        padding-right: 0!important;
        border: none;
        padding: .375rem .375rem .375rem 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.8)!important;
        border-radius: 0;
    }
    
    .contact-form .form-control:focus,
    #messageObject:focus,
    #guest:focus{
      border-bottom: 1px solid rgba(27, 27, 27, 0.2)!important;
    }
    .contact-form .form-label{
        font-weight: 500;
        font-size: 13px;
        text-transform: uppercase;
    }
    .contact-form .star{
        color: rgb(199, 49, 49);
        font-size: 17px;
    }
    .contact-form .btn-action{
        border-radius: 0;
        text-transform: uppercase;
        border: 1px solid #000;
        background-color: transparent;
        border-radius: 0; 
        height: 36px; 
        width: 150px;
        text-align: center;
        border: 1px solid #000;
        font-family: Montserrat,sans-serif; font-weight: 700; font-size: 12px;
        transition: all 0.3s;
    }
    .contact-form .btn-action#cancelMessage{
        color: #000;
    }
    .contact-form .btn-action#cancelMessage:hover{
        background: #000;
        color: #fff;
    }
    .contact-form #sendMessage{
        background: #000;
        margin-left: 30px;
        color: #fff;
    }
    .contact-form #sendMessage:hover{
        background: #fff;
        color: #000;
    }
    .contact-form .form-select{
        text-transform: uppercase;
    }
  
</style>