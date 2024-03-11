@extends('layouts.app')
@section('content')
    <section class="px-6 md:px-20 mt-6 min-h-screen">
        <h1 class=" text-5xl font-bold text-center drop-shadow-md text-black py-12">Shopping Cart</h1>

        <div class=" grid grid-cols-1 md:grid-cols-3 gap-6">

            {{-- left Start --}}
            <div class=" md:col-span-2">
                <h3 class=" text-gray-500 text-lg font-medium">Delivery Address</h3>
                <div class=" flex gap-4">
                    <div class=" flex items-center gap-4 pt-2 mb-2">
                        <label for="address" class=" shrink-0 w-60 md:w-72 relative">
                            <input type="radio" name="address" id="address" class=" hidden peer">
                            <div class=" border border-slate-300 peer-checked:border-violet-600 rounded-lg p-2">
                                <div class=" flex justify-between items-center">
                                    <span class=" text-black font-bold">Royal Express</span>
                                    <span class=" text-gray-400 cursor-pointer"><i class=" bx bx-pencil text-sm"></i>
                                        Edit</span>
                                </div>
                                <p class=" text-gray-400 leading-4">Sanchaung,ThiriMingalar Street, <br>
                                    P-023,Yangon</p>
                                <p class=" text-gray-600">Mobile No: +95912345678</p>
                            </div>
                            <i
                                class="hidden peer-checked:block absolute -top-3 -right-2 bx bxs-check-circle text-xl text-violet-600 bg-white"></i>
                        </label>
                    </div>
                    <div
                        class=" bg-slate-200 text-gray-400 rounded-md px-2 md:px-4 flex flex-col items-center justify-center">
                        <i class="bx bxs-plus-circle text-lg"></i>
                        <span class=" text-sm">Add Address</span>
                    </div>
                </div>

                <div class=" grid grid-cols-1 md:grid-cols-2 gap-5 mt-4">
                    @foreach (range(1, 6) as $item)
                        <div class=" flex gap-4">
                            <div class=" ">
                                <img class=" w-28 bg-gray-100 rounded shadow p-2" src="{{ asset('images/01.jpg') }}"
                                    alt="">
                            </div>
                            <div class=" flex flex-col gap-0.5">
                                <h3 class=" text-lg font-medium text-gray-800">Man's Jacket</h3>
                                <div class=" text-gray-400 text-sm flex items-center gap-2">
                                    <p class=" flex items-center gap-1">Color:
                                        <span class=" bg-amber-600 w-4 h-4 rounded-full">&nbsp;</span>
                                    </p>
                                    <p>Size: M</p>
                                </div>
                                <p class=" text-black text-lg font-bold">$26.00
                                    <sub class=" text-sm font-normal text-red-500">$35.00
                                        <span class=" text-green-400">(25% off)</span>
                                    </sub>
                                </p>
                                <div class=" flex items-center gap-6">
                                    <div class=" flex items-center justify-center gap-1">
                                        <i class=" text-gray-400 bx bx-minus-circle text-xl"></i>
                                        <span class=" border border-gray-400 px-3 leading-none">01</span>
                                        <i class=" text-green-300 bx bx-plus-circle text-xl"></i>
                                    </div>
                                    <button class=" text-gray-400 uppercase">Remove</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- left End --}}
             {{-- Right Start --}}
             <div>
                <div class=" bg-white rounded-md shadow-md p-2">
                    <h3 class=" text-black font-medium uppercase mb-3">Order Detail</h3>
                    <div class=" relative mb-2 px-2 py-1.5 border border-slate-300 rounded-md">
                        <label class=" absolute -top-3.5 left-5 text-slate-300 bg-white px-1">Discount Code</label>
                        <div class=" flex justify-between">
                            <input type="text" class=" w-full focus:outline-none" placeholder="Enter Discount Code">
                            <button class=" text-violet-600 font-medium">Apply</button>
                        </div>
                    </div>
                    <div class=" flex justify-between items-center">
                        <span class=" text-gray-400">Sub Total</span>
                        <span class=" text-gray-800 font-bold">$700</span>
                    </div>
                    <div class=" flex justify-between items-center">
                        <span class=" text-gray-400">Delivery Fee</span>
                        <span class=" text-gray-800 font-bold">$0</span>
                    </div>
                    <div class=" flex justify-between items-center mb-2">
                        <span class=" text-gray-400">Discount (25%)</span>
                        <span class=" text-violet-600 font-bold">$175.00</span>
                    </div>
                    <div class=" flex justify-between items-center mb-1">
                        <span class=" text-gray-400">Total</span>
                        <span class=" text-gray-800 font-bold">$525.00</span>
                    </div>
                    <div class=" flex justify-between items-center mb-2 px-2 py-1 bg-green-100 rounded-md">
                        <span class=" text-green-500">Your total savings amount on <br> this order</span>
                        <span class=" text-green-500 font-bold">$175.00</span>
                    </div>
                    <button class=" bg-violet-600 text-white font-bold text-center w-full py-1 rounded shadow mt-5">Checkout</button>
                </div>
            </div>
            {{-- Right End --}}
        </div>

        <div class="mt-5">
            <h3 class=" text-gray-500 text-lg font-medium">Payment Method</h3>
            <div class=" flex items-center">
                <input type="radio" class="mr-3" checked>
                <img src="{{ asset('images/paypal.png') }}" class=" cursor-pointer" alt="">
            </div>
        </div>
    </section>
@endsection
