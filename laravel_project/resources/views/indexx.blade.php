
   @extends('master') 
   @section('content')

    <div class="hero-wrap" style="background-image: url('https://jbmedical.com.au/wp-content/uploads/2021/07/mobility-aids2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Doing nothing is not an option of our life</h1>
            <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> <a href="#"></a></p>

            {{-- <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="https://vimeo.com/45830194" class="btn btn-white btn-outline-white px-4 py-3 popup-vimeo"><span class="icon-play mr-2"></span>Watch Video</a></p> --}}
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-counter ftco-intro" id="section-counter">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-1 align-items-stretch">
              <div class="text">
              	<span>Served Over</span>
                <strong class="number" data-number="12805">0</strong>
                <span>Person in the country</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-2 align-items-stretch">
              <div class="text">
              	<h3 class="mb-4">Donate</h3>
              	<p>By donating a medical equiment you can change someone's life.</p>
              	<p><a href="{{url('addprofile')}}" class="btn btn-white px-3 py-2 mt-2">Donate Now</a></p>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-3 align-items-stretch">
              <div class="text">
              	<h3 class="mb-4">Be a Volunteer</h3>
              	<p>Register in delivery volunteering , a small gesture can work wonders.</p>
              	<p><a href="{{url('delivery')}}" class="btn btn-white px-3 py-2 mt-2">Be A Volunteer</a></p>
              </div>
            </div>
          </div>
    		</div>
    	</div>
    </section>
{{--  --}}
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
				<h2 class="mb-4">Donation categories</h2>
			</div>
		</div>
	
		<div class="row d-flex">
			@foreach ($categories as $category)
			<div class="col-md-3 d-flex ftco-animate">
				<div class="blog-entry align-self-stretch"   >
					<a href="blog-single.html" class="block-20" style="background-image: url('{{asset('public/adminImage/'.$category->category_image);}}'); ">
					</a>
					<div class="text p-4 d-block">
						<div class="meta mb-3" >
							<div><a style="color:white" href="#">*********************************</a>
							</div>
					
							<div><a href="#" class="meta-chat"><span class=""></span> </a>
							</div>
						</div>
						<h1 class="heading mt-3"><a href="#">

								{{ $category->category_name }}</a></h1>
						<p>

							{{ $category->category_description }}

						</p>

					</div>
				
				</div>
			
			</div>
			

		@endforeach
	</div>
</section>
{{--  --}}
<section class="ftco-gallery">
	<div class="d-md-flex">
		<a href="https://athomeseniorservices.com/wp-content/uploads/2019/06/DME.png" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url('https://athomeseniorservices.com/wp-content/uploads/2019/06/DME.png');">
			<div class="icon d-flex justify-content-center align-items-center">
				<span class="icon-search"></span>
			</div>
		</a>
		<a href="https://www.healthcareitnews.com/sites/hitn/files/medical-devices-bp-gettystocks-712.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url('https://www.healthcareitnews.com/sites/hitn/files/medical-devices-bp-gettystocks-712.jpg');">
			<div class="icon d-flex justify-content-center align-items-center">
				<span class="icon-search"></span>
			</div>
		</a>
		<a href="https://www.ubuy.com.jo/productimg/?image=aHR0cHM6Ly9tLm1lZGlhLWFtYXpvbi5jb20vaW1hZ2VzL0kvOTFmTFcwWG1TMlMuX1NMMTUwMF8uanBn.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url('https://www.ubuy.com.jo/productimg/?image=aHR0cHM6Ly9tLm1lZGlhLWFtYXpvbi5jb20vaW1hZ2VzL0kvOTFmTFcwWG1TMlMuX1NMMTUwMF8uanBn.jpg');">
			<div class="icon d-flex justify-content-center align-items-center">
				<span class="icon-search"></span>
			</div>
		</a>
		<a href="http://sc04.alicdn.com/kf/Hb9cfd367ad3e4c19a4e743e6353b1252f.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url('http://sc04.alicdn.com/kf/Hb9cfd367ad3e4c19a4e743e6353b1252f.jpg');">
			<div class="icon d-flex justify-content-center align-items-center">
				<span class="icon-search"></span>
			</div>
		</a>
	</div>
</section>

{{--  --}}
<section class="ftco-section">
	<div class="container">
		<div class="row">
	  <div class="col-md-4 d-flex align-self-stretch ftco-animate">
		<div class="media block-6 d-flex services p-3 py-4 d-block">
		  <div class="icon d-flex mb-3"><span class="flaticon-donation-1"></span></div>
		  <div class="media-body pl-4">
			<h3 class="heading">Make Donation</h3>
			<p>The donations can be used to help someone in need, promoting recyclable products to save a life.</p>
		  </div>
		</div>      
	  </div>
	  <div class="col-md-4 d-flex align-self-stretch ftco-animate">
		<div class="media block-6 d-flex services p-3 py-4 d-block">
		  <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
		  <div class="media-body pl-4">
			<h3 class="heading">Become A Volunteer</h3>
			<p>Make a difference by try something new and build a real sense of achievement.</p>
		  </div>
		</div>      
	  </div>
	  <div class="col-md-4 d-flex align-self-stretch ftco-animate">
		<div class="media block-6 d-flex services p-3 py-4 d-block">
		  <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
		  <div class="media-body pl-4">
			<h3 class="heading">Credibility</h3>
			<p>Every product is checked before add it in our webpage</p>
		  </div>
		</div>    
	  </div>
	</div>
	</div>
</section>
{{--  --}}

{{-- 
    <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Latest Donations</h2>
          </div>
        </div>
		<div class="container">
			<div class="row">
				@foreach ($users as $user)
				<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
					<div class="staff">
						<div class="d-flex mb-4">
							<div class="img" style="background-image: url(images/person_1.jpg);"></div>
							<div class="info ml-4">
								<h3><a href="teacher-single.html">{{ $user->name }}</a></h3>
								<span class="position">Donated Just now</span>
								<div class="text">
									<p>Donated <span>$300</span> for <a href="#">Children Needs Food</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		  </div>
    </section> --}}

    <section class="ftco-section bg-light">
<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
				<h2 class="mb-4">Latest Donations</h2>
			</div>
		</div>
		
		<div class="row">
			@foreach ($data as $product)
			<div class="col-md-3 d-flex ftco-animate">
				<div class="blog-entry align-self-stretch">
					<a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('public/adminImage/' .$product->item_image) }}');">
					</a>
					<div class="text p-4 d-block">
						<div class="meta mb-3">
							<div><a style="color:white" href="#" >**********************</a></div>
							<div><a href="#"></a></div>
							<div><a href="#" class="meta-chat"><span class=""></span> </a></div>
						</div>
						<h3 class="heading mb-4"><a href="#">{{ $product->item_name}}</a></h3>
						<p class="time-loc"><span class="mr-2"></i> {{$product->category_name}}</span></p>
						<p>{{ $product->item_description }}</p>
						<p><a href="/Causes-product/{{$product->id}}">See more <i class="ion-ios-arrow-forward"></i></a></p>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	
		
	</div>
</div> 
    </section>
		
	

    @endsection

