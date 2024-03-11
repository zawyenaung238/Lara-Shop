@extends('layouts.app')
@section('content')
    <section class="px-6 md:px-20 mt-6">

        <section class=" mt-6 grid grid-cols-1 md:grid-cols-5 gap-6">
            <div>
                <div class=" w-full md:w-auto p-3 rounded border border-slate-300">
                    <h3 class=" text-2xl font-medium text-violet-600 uppercase">Filters</h3>

                    <div>
                        <h4 class=" text-zinc-800 font-medium mb-1">Price</h4>
                        <div class=" flex justify-between items-center gap-4 text-xs">
                            <div class=" bg-gray-200 rounded p-2 flex justify-between items-center gap-2">
                                <span class=" text-gray-400">From</span>
                                <div class=" flex">
                                    <input type="text" class=" w-8 bg-transparent focus:outline-none text-right mr-1" placeholder="0">
                                    <span class=" text-gray-800">$</span>
                                </div>
                            </div>
                            <div class=" bg-gray-200 rounded p-2 flex justify-between items-center gap-3">
                                <span class=" text-gray-400">Up to</span>
                                <div class=" flex">
                                    <input type="text" class=" w-8 bg-transparent focus:outline-none text-right mr-1" placeholder="0">
                                    <span class=" text-gray-800">$</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class=" mt-3">
                    <div>
                        <h4 class=" text-zinc-800 font-medium mb-1">Size</h4>
                        <ul class=" text-gray-400 text-sm">
                            <li class=" flex gap-2"><input type="checkbox">Small</li>
                            <li class=" flex gap-2"><input type="checkbox">Medium</li>
                            <li class=" flex gap-2"><input type="checkbox">Large</li>
                        </ul>
                    </div>
                    <hr class=" mt-3">
                    <div>
                        <h4 class=" text-zinc-800 font-medium mb-1">Color</h4>
                        <ul class=" text-gray-400 text-sm flex flex-col gap-1">
                            <li class=" flex gap-2">
                                <input type="checkbox">
                                <span class=" bg-zinc-400 w-4 h-4 flex rounded-full">&nbsp;</span>
                            </li>
                            <li class=" flex gap-2">
                                <input type="checkbox">
                                <span class=" bg-pink-400 w-4 h-4 flex rounded-full">&nbsp;</span>
                            </li>
                            <li class=" flex gap-2">
                                <input type="checkbox">
                                <span class=" bg-violet-400 w-4 h-4 flex rounded-full">&nbsp;</span>
                            </li>
                        </ul>
                    </div>
                    <hr class=" my-3">
                    <div class=" flex justify-between items-center">
                        <button class=" border bg-violet-600 rounded-md text-center drop-shadow text-white py-0.5 px-4 uppercase">Apply Filter</button>
                        <span class=" flex justify-center items-center w-7 h-7 rounded-md border border-gray-400 text-gray-400"><i class="bx bx-filter-alt"></i></span>
                    </div>
                </div>
            </div>
            <div class=" md:col-span-4 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class=" md:col-span-2 flex items-center px-1.5 text-sm rounded border border-slate-300">
                    <span class=" w-6 border-r border-slate-300">
                        <i class="bx bx-search text-gray-400 text-xl"></i>
                    </span>
                    <input type="search" placeholder="Search Products" class=" py-1 pl-1.5 w-full bg-transparent focus:outline-none">
                </div>
                <div class=" flex items-center px-1.5 text-sm rounded border border-slate-300">
                    <span class=" w-6 border-r border-slate-300">
                        <i class="bx bx-filter text-gray-400 text-xl"></i>
                    </span>
                    <select class="py-1 pl-1.5 w-full bg-transparent focus:outline-none">
                        <option>Popular</option>
                    </select>
                </div>
                @foreach (range(1, 8) as $item)
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
