@extends('master') 
@section('content')  
<section style="overflow: hidden">
<form action="/Causes-product/add/{{ $product->id; }}" style="margin:10% 0; ">
<div class="row">
    <div class="col-10">
        <div class="row">
            <div class="col-7 ftco-animate mt-3">
                <div class="cause-entry">
                <a class="img" style="background-image: url('{{ asset('images/' .$product->item_image) }}');"></a>

                </div>
            </div>
            <div class="col-5" style="display: flex; justify;align-items: flex-start;justify-content: center;flex-direction: column;">
                <div><h3>{{ $product->item_name }}</h3></div>
                <div><p>{{ $product->item_description }}</p></div>
                @if ($flag)
                <button type="button" class="btn" disabled style="pointer-events: none">Pending</button>
                @else
                <span class="fund-raised d-block d-flex justify-content-center" style="margin-top: 4%"><button type="submit" class="btn btn-info">Request</button></span>
                @endif
            </div>
            <div class="col-2"></div>
            </div>
        </div>
</div>
</form>
</section>
@endsection