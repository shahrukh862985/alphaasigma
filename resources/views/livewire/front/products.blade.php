<section id="products" class="features approach  animate slow-mo even fadeIn no-padding-bottom xs-onepage-section" data-anim-type="fadeIn" data-anim-delay="200">
    <!-- slider --> 
    <div id="myCarousel3" class="carousel slide carousel-slide"> 
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-md-12 text-center">
                    <h3 class="section-title no-padding-bottom">Our Products</h3>
                </div>
                <!-- end section title -->
            </div>
            <div class="carousel-inner margin-seven no-margin-bottom">
                @php
                    $collection = array_chunk($products->toArray(),3);
                @endphp
                @foreach ($collection as $key =>$item)
                <div class="item {{$key ==0?'active':''}}"> 
                    <div class="row">
                        @foreach ($collection[$key] as $product)
                            <!-- features item -->
                        <div class="col-md-4 col-sm-6 text-center margin-four no-margin-top sm-margin-bottom-ten p-2">
                            <div class="border product-card">
                                <img src="{{asset('products/'.$product["image_name"])}}" class="img-fluid" alt="{{$product["title"]}}" srcset="">
                                <h2>{{$product["title"]}}</h2>
                            </div>
                        </div>
                        <!-- end features item -->
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- slider controls --> 
        <a class="left carousel-control" href="#myCarousel3" data-slide="prev"> <img src="{{asset('site-asset/images/arrow-pre.png')}}" alt=""/> </a> <a class="right carousel-control" href="#myCarousel3" data-slide="next"> <img src="{{asset('site-asset/images/arrow-next.png')}}" alt=""/> </a>
        <!-- end slider controls --> 
    </div>
    <!-- end slider --> 
</section>