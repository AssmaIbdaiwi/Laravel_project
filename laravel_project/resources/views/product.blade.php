@extends('master') 
@section('content')  
<section style="overflow: hidden">
<div style="height: 100px; width:100vw; background:#17a2b8;"></div>
<form action="/product/add/{{ $product->id; }}">
<div class="row">
    <div class="col-10">
        <div class="row">
            <div class="col-7 ftco-animate mt-3">
                <div class="cause-entry">
                <a class="img" style="background-image: url('{{ asset('images/' .$product->item_image) }}');"></a>
                <div class="text p-3 p-md-4">
                    <h3>{{ $product->item_name }}</h3>
                    <span class="donation-time mb-3 d-block"></span>
                    <p>{{ $product->item_description }}</p>
                </div>
                </div>
            </div>
            <div class="col-5" style="display: flex; justify;align-items: center;justify-content: center;flex-direction: column;">
                <div><label for="name">Name of the Order</label><br><input  type="text" name="name"></div>
                <div><label for="description">Description of the Order</label><br><input type="text" name="description"></div>
                <span class="fund-raised d-block d-flex justify-content-center" style="margin-top: 4%"><button type="submit" class="btn btn-info">Request</button></span>
            </div>
            <div class="col-2"></div>
            </div>
        </div>
</div>
</form>
</section>
@endsection