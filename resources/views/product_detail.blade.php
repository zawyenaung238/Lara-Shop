@extends('layouts.app')
@section('content')
    <section class="px-6 md:px-20 mt-6">
        <div class=" flex flex-wrap md:flex-nowrap gap-6">
            {{-- Left Start --}}
            <div class=" shrink-0 w-full md:w-auto flex flex-col-reverse md:flex-row gap-4">
                <div class=" flex md:flex-col gap-3 pb-1 md:pb-0 max-h-96 overflow-y-auto">
                    @foreach (range(1,5) as $item)
                    <div class=" bg-white rounded-md shadow p-1">
                        <img class="w-20" src="{{ asset('images/0'.$loop->iteration.'.jpg') }}" alt="">
                    </div>
                    @endforeach
                </div>
                <div class=" h-96 mx-auto relative bg-white rounded-md shadow p-3">
                    <img class=" h-full" src="{{ asset('images/01.jpg') }}" alt="">

                    <span class=" absolute top-1/2 left-4 bg-white w-6 h-6 rounded-full shadow flex items-center justify-center">
                        <i class="bx bx-chevron-left text-2xl text-gray-400 hover:text-violet-600 duration-200 cursor-pointer"></i>
                    </span>
                    <span class=" absolute top-1/2 right-4 bg-white w-6 h-6 rounded-full shadow flex items-center justify-center">
                        <i class="bx bx-chevron-right text-2xl text-gray-400 hover:text-violet-600 duration-200 cursor-pointer"></i>
                    </span>
                </div>
            </div>
            {{-- Left End --}}

            {{-- Right Start --}}
            <div class=" w-full flex flex-col gap-4">
                <div class=" flex gap-3">
                    <span class=" bg-red-500 text-white rounded px-2">-25%</span>
                    <span class=" text-gray-400"><i class="bx bx-star"></i> 5.5</span>
                </div>
                <h2 class=" text-lg font-medium text-gray-800">Man's Jacket</h2>
                <div class=" text-sm text-gray-800">
                    <p><span class=" text-gray-400">SKU:</span> FU-001</p>
                    <p><span class=" text-gray-400">Brand:</span> Pixelstrap</p>
                </div>
                <div>
                    <span class=" text-teal-500 font-bold text-xl">$26.00</span>
                    <sub class=" text-gray-400"><strike>$35.00</strike></sub>
                </div>
                <div>
                    <p class="text-gray-400">Color:</p>
                    <div class=" flex gap-1">
                        <span class=" bg-zinc-600 w-5 h-5 rounded-full">&nbsp;</span>
                        <span class=" bg-amber-600 w-5 h-5 rounded-full">&nbsp;</span>
                        <span class=" bg-blue-600 w-5 h-5 rounded-full">&nbsp;</span>
                    </div>
                </div>
                <div>
                    <p class="text-gray-400">Size:</p>
                    <div class=" flex gap-1 text-gray-400 text-sm">
                        <span class=" flex justify-center items-center w-5 h-5 rounded-full border border-gray-400">S</span>
                        <span class=" flex justify-center items-center w-5 h-5 rounded-full border border-gray-400">M</span>
                        <span class=" flex justify-center items-center w-5 h-5 rounded-full border border-gray-400">L</span>
                    </div>
                </div>
                <div>
                    <p class="text-gray-400">Quantity:</p>
                    <div class=" flex items-center gap-2">
                        <button class=" rounded border border-gray-300 w-7 h-7"><i class=" text-xl bx bx-minus"></i></button>
                        <input type="text" class=" bg-slate-200 border border-gray-300 rounded focus:outline-none px-2 text-lg font-medium w-20 text-center" readonly value="1">
                        <button class=" rounded border border-gray-300 w-7 h-7"><i class=" text-xl bx bx-plus"></i></button>
                    </div>
                </div>
                <div class=" flex items-center gap-4">
                    <span class=" bg-white shadow-md rounded-full w-8 h-8 flex items-center justify-center">
                        <i class="bx bx-heart text-2xl text-gray-500"></i>
                    </span>
                    <a href="{{ route('cart') }}" class=" w-28 border border-violet-600 rounded text-center drop-shadow font-bold text-violet-600 py-0.5">Add to Cart</a>
                    <button class=" w-28 border bg-violet-600 rounded text-center drop-shadow font-bold text-white py-0.5">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="">
            <h3 class=" text-lg text-gray-400 font-medium my-6">Product Description</h3>
            <div>
                <p class="text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam repellat pariatur veniam placeat sint necessitatibus quo deserunt! Consectetur architecto et, veritatis officiis alias minus quae inventore aspernatur consequatur magni dignissimos pariatur assumenda ad atque. Eveniet maxime atque sequi recusandae voluptatibus, eius nostrum assumenda consequuntur, totam iusto dicta officiis perspiciatis ducimus voluptatem facilis tempore quia aut labore beatae voluptates reprehenderit rem.
                </p>
            </div>
        </div>
        <section class=" mt-6">
            <h3 class=" text-zinc-800 font-medium mb-2">Products</h3>
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
    </section>
@endsection
{{-- @section('scripts')
    <script>
        let curretImage = 0;
        const showImage = (e, index) => {
            document.getElementById('mainImage').src = e.querySelector('img').src;
        }
    </script>
@endsection --}}
