@extends('layouts.app')
@section('content')

    <div>
        <div class="owl-carousel h-min">
            <div>
                {{-- <a href="#"><img src="{{ asset('images/img1.jpg') }}" alt=""></a> --}}
                {{-- <a href="#"><img src="{{ asset('images/img2.jpg') }}" alt=""></a>
                <a href="#"><img src="{{ asset('images/img3.jpg') }}" alt=""></a> --}}
            </div>
        </div>
    </div>

        {{-- Product List start --}}
    <section class=" px-6 md:px-20 mt-6">
        <h3 class=" text-zinc-800 font-medium mb-2">Flash Sale</h3>
        <div class=" grid grid-cols-1 md:grid-cols-4 gap-6">
            @foreach (range(1, 4) as $item)
            <a href="{{ route('deatil') }}" class=" bg-white rounded-lg shadow-lg p-3 relative">
                <img src="{{ asset('images/'.$loop->iteration.'.jpg') }}" class="mx-auto" alt="">

                <div class=" flex justify-between gap-3 my-3">
                    <p class=" text-gray-800 font-medium">Man's Jacket <br> <span class="text-gray-400">Solid Denim Jacket</span></p>
                    <div class=" flex flex-col items-end">
                        <strong class=" text-violet-600">$26.00</strong>
                        <strike class=" text-gray-400">$35.00</strike>
                    </div>
                </div>

                <div class=" flex justify-between items-center mb-2">
                    <div class=" flex gap-1">
                        <span class=" bg-zinc-600 w-5 h-5 rounded-full">&nbsp;</span>
                        <span class=" bg-amber-600 w-5 h-5 rounded-full">&nbsp;</span>
                        <span class=" bg-blue-600 w-5 h-5 rounded-full">&nbsp;</span>
                    </div>

                    <div class=" flex gap-1 text-gray-400 text-sm">
                        <span class=" flex justify-center items-center w-5 h-5 rounded-full border border-gray-400">S</span>
                        <span class=" flex justify-center items-center w-5 h-5 rounded-full border border-gray-400">M</span>
                        <span class=" flex justify-center items-center w-5 h-5 rounded-full border border-gray-400">L</span>
                    </div>
                </div>
                <div class=" flex justify-between items-center">
                    <span class=" text-gray-500"><i class="bx bx-star"></i> 5.5</span>
                    <span class=" text-violet-600 flex items-center font-bold"><i class="bx bx-cart-add"></i> Add to Cart</span>
                </div>
                <div class=" absolute top-2 left-3 right-3 flex justify-between items-center">
                    <span class=" bg-red-500 text-white rounded px-2">-25%</span>
                    <span class=" bg-white shadow-md rounded-full w-7 h-7 flex items-center justify-center">
                        <i class="bx bx-heart text-xl"></i>
                    </span>
                </div>
            </a>
            @endforeach
        </div>
    </section>
        {{-- Product List end --}}

    {{-- <section class=" px-6 md:px-20 mt-10 my-6">
        <div class=" flex flex-wrap gap-6">
            @foreach (range(1, 7) as $item)
            <div class=" bg-white rounded-md shadow flex justify-between items-center gap-3">
                <div class=" flex flex-col pl-3 py-1">
                    <span class=" text-gray-400">First Order</span>
                    <span class=" text-orange-500">#FIRST</span>
                </div>
                <div class=" bg-violet-600 font-medium text-white w-12 p-3 rounded-r-md">
                    20% Off
                </div>
            </div>
            @endforeach
        </div>
    </section> --}}

    <section class=" px-6 md:px-20 mt-8">
        <div class=" flex justify-between items-center">
            <div class=" flex gap-2">
                <h3 class=" text-zinc-800 font-medium underline mb-2">Best Seller</h3>
                <h3 class=" text-zinc-800 font-medium mb-2">New Product</h3>
            </div>
            <h3 class=" text-violet-600 font-medium mb-2">All Product</h3>
        </div>
        <div class=" grid grid-cols-1 md:grid-cols-4 gap-6">
            @foreach (range(1, 8) as $item)
            <div class=" bg-white rounded-lg shadow-lg p-3 relative">
                <img src="{{ asset('images/'.$loop->iteration.'.jpg') }}" class="mx-auto" alt="">

                <div class=" flex justify-between gap-3 my-3">
                    <p class=" text-gray-800 font-medium">Wonder Woman <br> <span class="text-gray-400">Woman Gray Round T-shirt</span></p>
                    <div class=" flex flex-col items-end">
                        <strong class=" text-violet-600">$45.00</strong>
                        <strike class=" text-gray-400">$52.00</strike>
                    </div>
                </div>

                <div class=" flex justify-between items-center mb-2">
                    <div class=" flex gap-1">
                        <span class=" bg-zinc-400 w-5 h-5 rounded-full">&nbsp;</span>
                        <span class=" bg-pink-400 w-5 h-5 rounded-full">&nbsp;</span>
                        <span class=" bg-violet-400 w-5 h-5 rounded-full">&nbsp;</span>
                    </div>

                    <div class=" flex gap-1 text-gray-400 text-sm">
                        <span class=" flex justify-center items-center w-5 h-5 rounded-full border border-gray-400">S</span>
                        <span class=" flex justify-center items-center w-5 h-5 rounded-full border border-gray-400">M</span>
                        <span class=" flex justify-center items-center w-5 h-5 rounded-full border border-gray-400">L</span>
                    </div>
                </div>
                <div class=" flex justify-between items-center">
                    <span class=" text-gray-500"><i class="bx bx-star"></i> 5.5</span>
                    <span class=" text-violet-600 flex items-center font-bold"><i class="bx bx-cart-add"></i> Add to Cart</span>
                </div>
                <div class=" absolute top-2 left-3 right-3 flex justify-between items-center">
                    <span class=" bg-red-500 text-white rounded px-2">-25%</span>
                    <span class=" bg-white shadow-md rounded-full m-7 h-7 items-center justify-center">
                        <i class="bx bx-heart text-xl"></i>
                    </span>
                </div>
            </div>
            @endforeach
        </div>
    </section>

@endsection
