
     @extends('master') 
     @section('content')  
    <div class="hero-wrap" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
              <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Causes</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Causes</h1>
          </div>
        </div>
      </div>
    </div>

    
    <section class="ftco-section">
      <div class="container">
          <div class="row">
            @if (!isset($_GET["page"]))
            @foreach ( $pages[0] as $product )
            <div class="col-md-4 ftco-animate">
              <div class="cause-entry">
                <a class="img" style="background-image: url(images/{{ $product->item_image }});"></a>
                <div class="text p-3 p-md-4">
                  <h3>{{ $product->item_name }}</h3>
                  <p>{{ $product->item_description }}</p>
                  <span class="donation-time mb-3 d-block"></span>
                  <span class="fund-raised d-block d-flex justify-content-center"><a href=""><button type="button" class="btn btn-info">Info</button></a></span>
                </div>
              </div>
            </div>
          @endforeach
          @else
          @foreach ($pages[$_GET["page"] - 1] as $product)
          <div class="col-md-4 ftco-animate">
              <div class="cause-entry">
                <a class="img" style="background-image: url(images/{{ $product->item_image }});"></a>
                <div class="text p-3 p-md-4">
                  <h3>{{ $product->item_name }}</h3>
                  <p>{{ $product->item_description }}</p>
                  <span class="donation-time mb-3 d-block"></span>
                  <span class="fund-raised d-block d-flex justify-content-center"><a href=""><button type="button" class="btn btn-info">Info</button></a></span>
                </div>
              </div>
            </div>
          @endforeach
          @endif
        </div>

        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li style="display:none;"><a href=""></a></li>
                <li><a href="/causes?page=@if($_GET["page"] - 1 == 0)1
                @else{{$_GET["page"]-1}}@endif">&lt;</a></li>
                @for ($i = 1; $i <= $pages_number; $i++)
                <li><span><a href="/causes?page={{ $i }}">{{ $i }}</a></span></li>
                @endfor
                <li><a href="/causes?page=@if($_GET["page"] + 1 == $pages_number + 1){{$pages_number}}
                  @else{{$_GET["page"]+1}}@endif">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
		

    @endsection