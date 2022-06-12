@extends('master')
@section('content')
<style>
    body {
        color: #000;
        overflow-x: hidden;
        height: 100%;
        background-image:
            url("https://i.imgur.com/GMmCQHC.png");
        background-repeat: no-repeat;
        background-size: 100% 100%
    }

    .card {
        padding: 30px 40px;
        margin-top: 60px;
        margin-bottom: 60px;
        border: none !important;
        box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2)
    }

    .blue-text {
        color: #00BCD4
    }

    .form-control-label {
        margin-bottom: 0
    }

    input,
    textarea,
    button {
        padding: 8px 15px;
        border-radius: 5px !important;
        margin: 5px 0px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        font-size: 18px !important;
        font-weight: 300
    }

    input:focus,
    textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #00BCD4;
        outline-width: 0;
        font-weight:
            400
    }

    .btn-block {
        text-transform: uppercase;
        font-size: 15px !important;
        font-weight: 400;
        height: 43px;
        cursor:
            pointer
    }

    .btn-block:hover {
        color: #fff !important
    }

    button:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        outline-width: 0
    }
</style>
<script>
    function validate(val) {
    // v1 = document.getElementById("fname");
    v2 = document.getElementById("lname");
    // v3 = document.getElementById("email");
    v4 = document.getElementById("mob");
    v5 = document.getElementById("job");
    v6 = document.getElementById("ans");

    flag2 = true;
    flag4 = true;
    flag5 = true;
    flag6 = true;

    if(val>=2 || val==0) {
        if(v2.value == "") {
            v2.style.borderColor = "red";
            flag2 = false;
        }
        else {
            v2.style.borderColor = "green";
            flag2 = true;
        }
    }
    if(val>=4 || val==0) {
        if(v4.value == "") {
            v4.style.borderColor = "red";
            flag4 = false;
        }
        else {
            v4.style.borderColor = "green";
            flag4 = true;
        }
    }
    if(val>=5 || val==0) {
        if(v5.value == "") {
            v5.style.borderColor = "red";
            flag5 = false;
        }
        else {
            v5.style.borderColor = "green";
            flag5 = true;
        }
    }
    if(val>=6 || val==0) {
        if(v6.value == "") {
            v6.style.borderColor = "red";
            flag6 = false;
        }
        else {
            v6.style.borderColor = "green";
            flag6 = true;
        }
    }

    flag = flag1 && flag2 && flag3 && flag4 && flag5 && flag6;

    return flag;
}


</script>




<div class="hero-wrap"
    style="background-image: url('https://i.kinja-img.com/gawker-media/image/upload/c_fill,f_auto,fl_progressive,g_center,h_675,pg_1,q_80,w_1200/cf35e7773ffb0d33a1362e51e4b0bc2f.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                {{-- <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                        class="mr-2"><a href="index.html">Home</a></span> <span>Event</span></p> --}}
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Delivery
                    Volunteering</h1>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h1 style="color:#2F8F9D">Be a volunteer</h1>
                <div class="card">
                    <h5 class="text-center mb-4" style="color:#2F8F9D">Registration form</h5>
                    <form class="form-card"  method="POST" action="{{route('delivery.store')}}">
                        @csrf
                        <div class="row justify-content-between text-left">

                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3"
                                    style="color:#2F8F9D">First name<span class="text-danger"> </span></label> <input
                                    type="text" id="fname" name="delivery_name" @foreach($data as $dates) placeholder="  {{ Auth::user()->name }}" @endforeach
                                    onblur="validate(1)" disabled> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3"
                                    style="color:#2F8F9D">Last name<span class="text-danger"> *</span></label> <input
                                    type="text" id="lname" name="delivery_lname" placeholder="Enter your last name"
                                    onblur="validate(2)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3"
                                    style="color:#2F8F9D">Email<span class="text-danger"> </span></label> <input
                                    type="text" id="email" name="delivery_email"@foreach($data as $users) placeholder="{{ $users->email}}" @endforeach onblur="validate(3)" disabled>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3"
                                    style="color:#2F8F9D">Phone number<span class="text-danger"> *</span></label> <input
                                    type="text" id="mob" name="delivery_mobile" placeholder="" onblur="validate(4)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3"
                                    style="color:#2F8F9D">Address<span class="text-danger"> *</span></label> <input
                                    type="text" id="job" name="delivery_address" placeholder="" onblur="validate(5)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3"
                                    style="color:#2F8F9D">Why do you want to be with us?<span class="text-danger">
                                        *</span></label> <input type="text" id="ans" name="delivery_message" placeholder=""
                                    onblur="validate(6)"> </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary"
                                    style="color:white">Submit</button> </div>
                        </div>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
</section>



<section class="ftco-section bg-light">
    <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4"  style="color:#2F8F9D">Voluntary medical equipment delivery</h2>
                </div>
            </div>
            
            <div class="row">
                @foreach ($orders as $order)
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/event-1.jpg');">
                        </a>
                        <div class="text p-4 d-block">
                            <h3 class="heading mb-4"><a href="#">{{ $order->item_name }}</a></h3>
                            <p>{{ $order->item_description }}</p>
                            <p>         
                             <form action="{{ route('delivery.destroy',$order->id) }}" method="Post">
                                @csrf
                                @method('DELETE')
                                <button type="submit"  class="btn-block btn-primary" style="color:white">Deliver</button>
                                </form>
                            
                            </p>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        

        </div>
    </div> 
        </section>
@endsection