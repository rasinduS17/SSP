

<div class="bg-gray-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
            <h2 class="text-2xl font-bold text-gray-900">Featured Products</h2>
            <div class="mt-6 space-y-12 lg:grid lg:grid-cols-2 lg:gap-x-6 lg:space-y-0">
                @foreach($products as $product)


                    <!-- Product Item 1 -->
                    <div class="group relative">
                        <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                            <img src="{{ asset('product/' . $product->image) }}" alt="">
                        </div>
                        <h3 class="mt-6 text-sm text-gray-500">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                {{$product->title}}
                            </a>
                        </h3>

                        @if($product->discount_price!=null)

                        <h4 style="color: red">
                            Discount Price
                            <br>
                            ${{$product->discount_price}}
                        </h4>

                            <h4 style="text-decoration: line-through; color: blue">
                                Price
                                <br>
                                ${{$product->price}}</h4>

                        @else

                            <h4 style="color: blue">
                                Price
                                <br>
                                ${{$product->price}}
                            </h4>

                        @endif


                        <p class="text-base font-semibold text-gray-900">{{$product->description}}</p>
                    </div>

                    <form action="{{url('add_cart',$product->id)}}" method="post">

                    @csrf

                    <div class="row">

                        <div class="col-md-4">

                            <input type="number" name="quantity" value="1" min="1">

                        </div>

                        <div class="col-md-4">

                            <input class="bg-blue-500 text-white px-6 my-3 py-2" type="submit" value="Add to Cart">

                        </div>





                    </div>

                    </form>


                    @endforeach
                </div>
                </div>
        </div>
    </div>
</div>


