@extends('layout.app')

@section('content')

<div class="p-6">
    <div class="flex items-center mb-4 border-b border-gray-300 pb-4">
        <!-- title -->
        <h1 class="inline-block text-xl font-semibold leading-6">Add New vendor</h1>
    </div>

    <div class="mb-8 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-2 lg:grid-cols-4">
        <div class="mb-lg-0 col-span-1">
            <h4 class="mb-1">Basic Information</h4>
        </div>
        <!-- card -->
        <div class="card shadow col-span-3">
            <!-- card body -->
            <div class="card-body">
            <!-- col -->
            <div>
                <form method="POST" action="{{ route('vendors.store') }}">
                    @csrf
                    <!-- Code -->
                    <div class="mb-6 inline-flex md:flex md:items-center gap-3 flex-col md:flex-row w-full">
                        <label for="code" class="flex-1 text-gray-800 font-semibold">vendor Code</label>
                        <div class="flex-[3] w-full">
                        <input type="text"
                            class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="vendor Code" id="code" required="" name="code" />
                        </div>
                    </div>
                    <!-- Name -->
                    <div class="mb-6 inline-flex md:flex md:items-center gap-3 flex-col md:flex-row w-full">
                        <label for="name" class="flex-1 text-gray-800 font-semibold">vendor Name</label>
                        <div class="flex-[3] w-full">
                        <input type="text"
                            class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="vendor Name" id="name" required="" name="name" />
                        </div>
                    </div>
                    <!-- Tax ID -->
                    <div class="mb-6 inline-flex md:flex md:items-center gap-3 flex-col md:flex-row w-full">
                        <label for="tax_id" class="flex-1 text-gray-800 font-semibold">
                        Tax id
                        </label>
                        <div class="flex-[3] w-full">
                        <input type="text"
                            class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="Tax ID" id="taxid" required="" name="tax_id"/>
                        </div>
                    </div>
                    <!-- vendor Type -->
                    <div class="mb-6 inline-flex md:flex md:items-center gap-3 flex-col md:flex-row w-full">
                        <label for="type" class="flex-1 text-gray-800 font-semibold">Type</label>

                        <div class="flex-[3] w-full">
                        <select name="type"
                            class="text-base border border-gray-300 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                            id="type">
                            <option selected="">Select vendor Type</option>
                            <option value="1">India</option>
                            <option value="2">UK</option>
                            <option value="3">USA</option>
                        </select>
                        </div>
                    </div>
                    <!-- PIC Name -->
                    <div class="mb-6 inline-flex md:flex md:items-center gap-3 flex-col md:flex-row w-full">
                        <label for="pic" class="flex-1 text-gray-800 font-semibold">Person In Charge
                        </label>

                        <div class="flex-[3] w-full">
                        <input type="text"
                            class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="Persin in Charge" id="pic" required="" name="pic"/>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="mb-6 inline-flex md:flex md:items-center gap-3 flex-col md:flex-row w-full">
                        <label for="email" class="flex-1 text-gray-800 font-semibold">Email</label>
                        <div class="flex-[3] w-full">
                        <input type="email"
                            class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="Email" id="email" required="" name="email" />
                        </div>
                    </div>
                    <!-- Phone -->
                    <div class="mb-6 inline-flex md:flex md:items-center gap-3 flex-col md:flex-row w-full">
                        <label for="phone" class="flex-1 text-gray-800 font-semibold">Phone Number</label>

                        <div class="flex-[3]">
                        <input type="number"
                            class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="Phone Number" id="phone" required="" name="phone" />
                        </div>
                    </div>
                    <div class="mb-6 inline-flex md:flex md:items-center gap-3 flex-col md:flex-row w-full">
                        <label for="address" class="flex-1 text-gray-800 font-semibold">Address</label>

                        <div class="flex-[3]">
                            <textarea 
                                name="address"
                                rows="5"
                                class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Address" id="address" required="" name="address">
                            </textarea>
                        </div>
                    </div>
                    <div class="mb-6 inline-flex md:flex md:items-center gap-3 flex-col md:flex-row w-full">
                        <div class="flex-1 text-gray-800 font-semibold"></div>
                        <div class="flex-[3]">
                        <button type="submit"
                            class="btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300">
                            Save
                        </button>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection