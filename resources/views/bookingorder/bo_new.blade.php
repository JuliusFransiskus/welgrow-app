@extends('layout.app')

@section('content')

    {{-- Main Content Area --}}
    <main class="p-4 space-y-4">
        <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden">
            {{-- Section Header --}}
            <div class="px-4 py-3 border-b border-slate-100 flex items-center justify-between">
                <h1 class="text-lg font-bold text-slate-800">Booking Order</h1>
                <div class="flex items-center space-x-3 text-slate-400">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="cursor-pointer hover:text-slate-600"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="cursor-pointer hover:text-slate-600"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                </div>
            </div>

            {{-- Form Grid --}}
            <div class="p-4 grid grid-cols-1 lg:grid-cols-2 gap-6">
                {{-- Left Column --}}
                <div class="space-y-1 bg-slate-100 p-2 rounded-md">
                    <div class="flex items-center">
                        <label class="w-36 text-sm text-slate-500">Job No.</label>
                        <input type="text" class="flex-1 h-6 px-3 text-sm bg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-blue-500 rounded-sm">
                    </div>

                    <div class="flex items-center">
                        <label class="w-36 text-sm text-slate-500">Customer</label>
                        <div class="flex items-center gap-2 flex-1 ">
                            <label class="inline-block px-2 border border-gray-600 text-sm ">
                                C001
                            </label>
                            <select name="customer_id"
                                class="flex-1 py-0.25 !py-0.25 h-6 px-3 text-sm border border-slate-300 focus:outline-none focus:ring-1 focus:ring-blue-500 rounded-sm"
                                id="customer_id">
                            </select>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <label class="w-36 text-sm text-slate-500">Agent</label>
                        <div class="flex items-center gap-2 flex-1 ">
                            <label class="inline-block px-2 border border-gray-600 text-sm">
                                A001
                            </label>
                            <select name="customer_id"
                                class="flex-1 py-0.25 !py-0.25 h-6 px-3 text-sm border border-slate-300 focus:outline-none focus:ring-1 focus:ring-blue-500 rounded-sm"
                                id="customer_id">
                            </select>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <label class="w-36 text-sm text-slate-500">Shipper</label>
                        <div class="flex items-center gap-2 flex-1 ">
                            <label class="inline-block px-2 border border-gray-600 text-sm">
                                C001
                            </label>
                            <select name="customer_id"
                                class="flex-1 py-0.25 !py-0.25 h-6 px-3 text-sm border border-slate-300 focus:outline-none focus:ring-1 focus:ring-blue-500 rounded-sm"
                                id="customer_id">
                            </select>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <label class="w-36 text-sm text-slate-500">Notify Party</label>
                        <div class="flex items-center gap-2">
                            <label class="inline-block px-2 border border-gray-600 text-sm">
                                C001
                            </label>
                            <select name="customer_id"
                                class="flex-1 py-0.25 !py-0.25 h-6 px-3 text-sm border border-slate-300 focus:outline-none focus:ring-1 focus:ring-blue-500 rounded-sm"
                                id="customer_id">
                            </select>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <label class="w-36 text-sm text-slate-500">Also Notify Party</label>
                        <div class="flex items-center gap-2 flex-1 ">
                            <label class="inline-block px-2 border border-gray-600 text-sm w-12 ">
                                C001
                            </label>
                            <select name="customer_id"
                                class="flex-1 py-0.25 !py-0.25 h-6 px-3 text-sm border border-slate-300 focus:outline-none focus:ring-1 focus:ring-blue-500 rounded-sm"
                                id="customer_id">
                            </select>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <label class="w-36 text-sm text-slate-500">Vol</label>
                        <div class="flex items-center gap-2">
                            <input type="text" class="h-6 w-12 !p-0 !pl-0 !pr-0 m-0 text-sm leading-none text-center border border-slate-300" >
                            <label class="inline-block w-6 px-2 border text-sm ml-auto">
                                20'
                            </label>
                            <select name="customer_id"
                                class="h-6 w-14 !p-0 !pl-0 !pr-0  m-0 text-sm leading-none text-center border border-slate-300"
                                id="customer_id">
                                <option selected="">-</option>
                                <option value="sd">SD</option>
                                <option value="gp">GP</option>                                
                                <option value="hq">HQ</option>
                                <option value="rf">RF</option>
                                <option value="rh">RH</option>                                
                                <option value="ot">OT</option>
                                <option value="fr">FR</option>
                                <option value="ft">FT</option>        
                            </select>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="text" class="h-6 w-12 !p-0 !pl-0 !pr-0  text-sm leading-none text-center border border-slate-300" >
                            <label class="inline-block w-6 px-2 border text-sm">
                                40'
                            </label>
                            <select name="customer_id"
                                class="h-6 w-14 !p-0 !pl-0 !pr-0 m-0 text-sm leading-none text-center border border-slate-300"
                                id="customer_id">
                                <option selected="">-</option>
                                <option value="sd">SD</option>
                                <option value="gp">GP</option>                                
                                <option value="hq">HQ</option>
                                <option value="rf">RF</option>
                                <option value="rh">RH</option>                                
                                <option value="ot">OT</option>
                                <option value="fr">FR</option>
                                <option value="ft">FT</option>        
                            </select>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <label class="w-36 text-sm text-slate-500">Terms of Payment</label>
                        <select name="terms"
                            class="w-36 py-0.25 !py-0.25 h-6 px-3 text-sm border border-slate-300 focus:outline-none focus:ring-1 focus:ring-blue-500 rounded-sm"
                            id="terms">
                            <option selected="">Select Terms</option>
                            <option value="jkt">Prepaid</option>
                            <option value="smg">Collect</option>
                        </select>
                    </div>
                    
                    <div class="flex items-center">
                        <label class="w-36 text-sm text-slate-500">Freight Prepaid at</label>
                        <input type="text" class="flex-1 h-6 px-3 text-sm bg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-blue-500 rounded-sm">
                    </div>

                    <div class="flex items-center">
                        <label class="w-36 text-sm text-slate-500">Shipper</label>
                        <select name="shipper"
                            class="w-36 py-0.25 !py-0.25 h-6 px-3 text-sm border border-slate-300 focus:outline-none focus:ring-1 focus:ring-blue-500 rounded-sm"
                            id="shipper">
                            <option selected="">Select Terms</option>
                            <option value="jkt">Prepaid</option>
                            <option value="smg">Collect</option>
                        </select>
                    </div>

            

                    <div class="flex items-center">
                        <label class="w-24 text-sm text-slate-500">Status</label>
                        <div class="flex-1 flex space-x-2">
                            <div class="flex-1 relative">
                                <input type="text" value="CY - CY" class="w-full bg-slate-50 border border-slate-200 rounded px-3 py-1.5 text-sm pr-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-2 top-2 w-4 h-4 text-slate-400"><path d="m6 9 6 6 6-6"/></svg>
                            </div>
                            <div class="flex items-center space-x-1">
                                <span class="text-sm text-slate-400">Freight</span>
                                <button class="px-2 py-1 bg-slate-100 rounded text-xs font-medium">PP.</button>
                                <span class="text-sm text-slate-400">AT</span>
                                <div class="relative w-24">
                                    <input type="text" value="SHI" class="w-full bg-slate-50 border border-slate-200 rounded px-2 py-1.5 text-sm pr-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-1.5 top-2 w-3 h-3 text-slate-400"><path d="m6 9 6 6 6-6"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <label class="w-24 text-sm text-slate-500">Customer</label>
                        <div class="flex-1 flex space-x-1">
                            <input type="text" value="TDC01" class="w-20 bg-slate-50 border border-slate-200 rounded px-2 py-1.5 text-sm">
                            <div class="flex-1 relative">
                                <input type="text" value="PT DCI INDONESIA TBK" class="w-full bg-slate-50 border border-slate-200 rounded px-3 py-1.5 text-sm pr-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-2 top-2 w-4 h-4 text-slate-400"><path d="m6 9 6 6 6-6"/></svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <label class="w-24 text-sm text-slate-500">Agent</label>
                        <div class="flex-1 flex space-x-1">
                            <input type="text" value="TCA001" class="w-20 bg-slate-50 border border-slate-200 rounded px-2 py-1.5 text-sm">
                            <div class="flex-1 relative">
                                <input type="text" value="C&D JIANGSU TECHNOLOGGIES CO.,LTD" class="w-full bg-slate-50 border border-slate-200 rounded px-3 py-1.5 text-sm pr-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-2 top-2 w-4 h-4 text-slate-400"><path d="m6 9 6 6 6-6"/></svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <label class="w-24 text-sm text-slate-500">Shipper</label>
                        <div class="flex-1 flex space-x-1">
                            <input type="text" value="OSAM01" class="w-20 bg-slate-50 border border-slate-200 rounded px-2 py-1.5 text-sm">
                            <input type="text" value="SAME AS CONSIGNEE" class="flex-1 bg-slate-50 border border-slate-200 rounded px-3 py-1.5 text-sm text-emerald-600 font-medium">
                        </div>
                    </div>

                    <div class="flex items-center">
                        <label class="w-24 text-sm text-slate-500">Also Notify</label>
                        <div class="flex-1 flex items-center space-x-2">
                            <div class="flex bg-slate-100 rounded p-0.5 text-xs font-medium">
                                <button class="px-2 py-1">Vol.</button>
                                <button class="px-2 py-1 bg-white shadow-sm rounded">10</button>
                                <button class="px-2 py-1 bg-blue-100 text-blue-600 rounded">20</button>
                                <button class="px-2 py-1">50</button>
                                <button class="px-2 py-1 bg-blue-500 text-white rounded">40</button>
                            </div>
                            <div class="flex items-center space-x-1 bg-slate-100 rounded p-0.5 text-xs">
                                <button class="px-2 py-1">50</button>
                                <button class="px-2 py-1 bg-blue-400 text-white rounded flex items-center">
                                    20 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1"><path d="m6 9 6 6 6-6"/></svg>
                                </button>
                            </div>
                            <div class="ml-auto flex items-center space-x-2">
                                <span class="text-xs text-slate-400">Total Pack</span>
                                <input type="text" value="100,00" class="w-20 bg-slate-50 border border-slate-200 rounded px-2 py-1 text-sm text-right">
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <label class="w-24 text-sm text-slate-500">Status</label>
                        <div class="flex-1 flex space-x-2">
                            <div class="flex-1 relative">
                                <input type="text" value="CY - CY" class="w-full bg-slate-50 border border-slate-200 rounded px-3 py-1.5 text-sm pr-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-2 top-2 w-4 h-4 text-slate-400"><path d="m6 9 6 6 6-6"/></svg>
                            </div>
                            <div class="flex items-center space-x-1">
                                <span class="text-sm text-slate-400">Freight</span>
                                <button class="px-2 py-1 bg-slate-100 rounded text-xs font-medium">PP.</button>
                                <span class="text-sm text-slate-400">AT</span>
                                <div class="relative w-24">
                                    <input type="text" value="SHI" class="w-full bg-slate-50 border border-slate-200 rounded px-2 py-1.5 text-sm pr-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-1.5 top-2 w-3 h-3 text-slate-400"><path d="m6 9 6 6 6-6"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <label class="w-24 text-sm text-slate-500">POL</label>
                        <div class="flex-1 flex space-x-1">
                            <span class="px-2 py-1 bg-emerald-100 text-emerald-700 rounded text-xs font-bold">SHI</span>
                            <div class="flex-1 relative">
                                <input type="text" value="SURABAYA, INDONESIA" class="w-full bg-slate-50 border border-slate-200 rounded px-3 py-1.5 text-sm pr-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-2 top-2 w-4 h-4 text-slate-400"><path d="m6 9 6 6 6-6"/></svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <label class="w-24 text-sm text-slate-500">POD</label>
                        <div class="flex-1 flex space-x-1">
                            <span class="px-2 py-1 bg-emerald-100 text-emerald-700 rounded text-xs font-bold">JKT</span>
                            <div class="flex-1 relative">
                                <input type="text" value="JAKARTA, INDONESIA" class="w-full bg-slate-50 border border-slate-200 rounded px-3 py-1.5 text-sm pr-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-2 top-2 w-4 h-4 text-slate-400"><path d="m6 9 6 6 6-6"/></svg>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right Column --}}
                <div class="space-y-3">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center">
                            <label class="w-24 text-sm text-slate-500">Approval</label>
                            <div class="flex-1 relative">
                                <input type="text" value="No" class="w-full bg-slate-50 border border-slate-200 rounded px-3 py-1.5 text-sm pr-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-2 top-2 w-4 h-4 text-slate-400"><path d="m6 9 6 6 6-6"/></svg>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <label class="w-24 text-sm text-slate-500 text-right mr-2">Date Create</label>
                            <div class="flex-1 relative">
                                <input type="text" value="05-01-2026" class="w-full bg-slate-50 border border-slate-200 rounded px-3 py-1.5 text-sm pr-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-2 top-2 w-4 h-4 text-slate-400"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center">
                            <label class="w-24 text-sm text-slate-500">Stripping Date</label>
                            <div class="flex-1 relative">
                                <input type="text" placeholder="" class="w-full bg-slate-50 border border-slate-200 rounded px-3 py-1.5 text-sm pr-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-2 top-2 w-4 h-4 text-slate-400"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <label class="w-24 text-sm text-slate-500 text-right mr-2">Commodity</label>
                            <input type="text" value="Credit Term" class="flex-1 bg-slate-50 border border-slate-200 rounded px-3 py-1.5 text-sm">
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center">
                            <label class="w-24 text-sm text-slate-500">Commodity</label>
                            <div class="flex-1 relative">
                                <input type="text" value="" class="w-full bg-slate-50 border border-slate-200 rounded px-3 py-1.5 text-sm pr-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-2 top-2 w-4 h-4 text-slate-400"><path d="m6 9 6 6 6-6"/></svg>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <label class="w-24 text-sm text-slate-500 text-right mr-2">EMKL/Trucking</label>
                            <div class="flex-1 relative">
                                <input type="text" value="" class="w-full bg-slate-50 border border-slate-200 rounded px-3 py-1.5 text-sm pr-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-2 top-2 w-4 h-4 text-slate-400"><path d="m6 9 6 6 6-6"/></svg>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center">
                            <label class="w-24 text-sm text-slate-500">Credit Term</label>
                            <div class="flex-1 relative">
                                <input type="text" value="" class="w-full bg-slate-50 border border-slate-200 rounded px-3 py-1.5 text-sm pr-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-2 top-2 w-4 h-4 text-slate-400"><path d="m6 9 6 6 6-6"/></svg>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <label class="w-24 text-sm text-slate-500 text-right mr-2">Shipping Lines</label>
                            <div class="flex-1 relative">
                                <input type="text" value="SBAH06" class="w-full bg-slate-50 border border-slate-200 rounded px-3 py-1.5 text-sm pr-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-2 top-2 w-4 h-4 text-slate-400"><path d="m6 9 6 6 6-6"/></svg>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4 border-t border-slate-100 pt-3">
                        <div class="flex items-center">
                            <label class="w-24 text-sm text-slate-500">Carriage</label>
                            <div class="flex-1 relative">
                                <input type="text" value="0295222" class="w-full bg-slate-50 border border-slate-200 rounded px-3 py-1.5 text-sm pr-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-2 top-2 w-4 h-4 text-slate-400"><path d="m6 9 6 6 6-6"/></svg>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <label class="w-24 text-sm text-slate-500 text-right mr-2">1st Conn.</label>
                            <div class="flex-1 relative">
                                <input type="text" value="SMA12632" class="w-full bg-slate-50 border border-slate-200 rounded px-3 py-1.5 text-sm pr-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-2 top-2 w-4 h-4 text-slate-400"><path d="m6 9 6 6 6-6"/></svg>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center">
                            <label class="w-24 text-sm text-slate-500">1st Conn.</label>
                            <div class="flex-1 relative">
                                <input type="text" value="ZHONG GU FU ZHOU" class="w-full bg-slate-50 border border-slate-200 rounded px-3 py-1.5 text-sm pr-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-2 top-2 w-4 h-4 text-slate-400"><path d="m6 9 6 6 6-6"/></svg>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <label class="w-24 text-sm text-slate-500 text-right mr-2">2nd Conn.</label>
                            <div class="flex-1 relative">
                                <input type="text" value="JKT" class="w-full bg-slate-50 border border-slate-200 rounded px-3 py-1.5 text-sm pr-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-2 top-2 w-4 h-4 text-slate-400"><path d="m6 9 6 6 6-6"/></svg>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center">
                            <label class="w-24 text-sm text-slate-500">2nd Conn.</label>
                            <div class="flex-1 flex space-x-1">
                                <div class="relative flex-1">
                                    <input type="text" value="SHI" class="w-full bg-slate-50 border border-slate-200 rounded px-3 py-1.5 text-sm pr-8">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-2 top-2 w-4 h-4 text-slate-400"><path d="m6 9 6 6 6-6"/></svg>
                                </div>
                                <span class="px-2 py-1 bg-blue-100 text-blue-600 rounded text-xs font-bold flex items-center">SHI</span>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <label class="w-24 text-sm text-slate-500 text-right mr-2">Kuwait</label>
                            <div class="flex-1 relative">
                                <input type="text" value="SHUWAIKH, KUWAIT" class="w-full bg-slate-50 border border-slate-200 rounded px-3 py-1.5 text-sm pr-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-2 top-2 w-4 h-4 text-slate-400"><path d="m6 9 6 6 6-6"/></svg>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center">
                            <label class="w-24 text-sm text-slate-500">H B/L No.</label>
                            <input type="text" value="221525126045" class="flex-1 bg-slate-50 border border-slate-200 rounded px-3 py-1.5 text-sm">
                        </div>
                        <div class="flex items-center">
                            <label class="w-24 text-sm text-slate-500 text-right mr-2">Master B/L</label>
                            <div class="flex-1 relative">
                                <input type="text" value="IMP 12832" class="w-full bg-slate-50 border border-slate-200 rounded px-3 py-1.5 text-sm pr-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-2 top-2 w-4 h-4 text-slate-400"><path d="m6 9 6 6 6-6"/></svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <label class="w-24 text-sm text-slate-500">File No.</label>
                        <div class="flex-1 flex items-center space-x-4 text-xs">
                            <label class="flex items-center cursor-pointer">
                                <div class="w-3 h-3 rounded-full bg-emerald-500 mr-1"></div>
                                <span>Freenaf</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <div class="w-3 h-3 rounded bg-yellow-400 mr-1"></div>
                                <span>Delived</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <div class="w-3 h-3 border border-slate-300 mr-1"></div>
                                <span>Nomination</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <div class="w-3 h-3 border border-slate-300 mr-1"></div>
                                <span>Co-loader</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <div class="w-3 h-3 border border-slate-300 mr-1"></div>
                                <span>Shipper</span>
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-slate-400 ml-auto"><path d="m6 9 6 6 6-6"/></svg>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Action Buttons --}}
            <div class="px-4 py-3 flex justify-between border-t border-slate-100">
                <button class="flex items-center px-4 py-2 bg-blue-500 text-white rounded shadow-sm hover:bg-blue-600 transition-colors text-sm font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M5 12h14"/><path d="M12 5v14"/></svg> Add Container
                </button>
                <button class="flex items-center px-4 py-2 bg-blue-500 text-white rounded shadow-sm hover:bg-blue-600 transition-colors text-sm font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg> Delete Row
                </button>
            </div>
        </div>

        {{-- Containers Table Section --}}
        <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden">
            <div class="px-4 py-2 border-b border-slate-100 bg-slate-50/50 flex items-center justify-between">
                <div class="flex items-center text-blue-600 font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect width="12" height="8" x="6" y="14"/></svg> Containers
                </div>
                <div class="flex space-x-2">
                    <button class="flex items-center px-3 py-1 bg-blue-400 text-white rounded text-xs font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-1"><path d="M5 12h14"/><path d="M12 5v14"/></svg> Add
                    </button>
                    <button class="flex items-center px-3 py-1 bg-slate-100 text-slate-400 rounded text-xs font-medium cursor-not-allowed">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-1"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg> Delete
                    </button>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left border-collapse">
                    <thead class="bg-slate-50 text-slate-500 font-medium border-b border-slate-200">
                        <tr>
                            <th class="px-4 py-2 border-r border-slate-200">Size <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="inline"><path d="m6 9 6 6 6-6"/></svg></th>
                            <th class="px-4 py-2 border-r border-slate-200">No.</th>
                            <th class="px-4 py-2 border-r border-slate-200">Container No.</th>
                            <th class="px-4 py-2 border-r border-slate-200">Seal No.</th>
                            <th class="px-4 py-2 border-r border-slate-200">Type <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="inline"><path d="m6 9 6 6 6-6"/></svg></th>
                            <th class="px-4 py-2 border-r border-slate-200">Pkgs Unit</th>
                            <th class="px-4 py-2 border-r border-slate-200">Gross Wgt</th>
                            <th class="px-4 py-2 border-r border-slate-200">Net Wgt</th>
                            <th class="px-4 py-2">CBM</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @for ($i = 0; $i < 2; $i++)
                        <tr class="hover:bg-slate-50/50">
                            <td class="px-2 py-1.5 border-r border-slate-200">
                                <div class="flex space-x-1">
                                    <span class="w-8 text-xs text-slate-400 flex items-center">40'</span>
                                    <div class="relative flex-1">
                                        <select class="w-full bg-blue-50 border border-blue-200 rounded px-1 py-0.5 text-xs appearance-none">
                                            <option>40'</option>
                                        </select>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-1 top-1 w-3 h-3 text-blue-400"><path d="m6 9 6 6 6-6"/></svg>
                                    </div>
                                </div>
                            </td>
                            <td class="px-2 py-1.5 border-r border-slate-200">
                                <div class="relative">
                                    <select class="w-full bg-slate-50 border border-slate-200 rounded px-1 py-0.5 text-xs appearance-none">
                                        <option>40'</option>
                                    </select>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-1 top-1 w-3 h-3 text-slate-400"><path d="m6 9 6 6 6-6"/></svg>
                                </div>
                            </td>
                            <td class="px-2 py-1.5 border-r border-slate-200">
                                <input type="text" value="MSMUB110192" class="w-full bg-slate-50 border border-slate-200 rounded px-2 py-0.5 text-xs">
                            </td>
                            <td class="px-2 py-1.5 border-r border-slate-200">
                                <div class="flex items-center">
                                    <input type="checkbox" class="mr-2">
                                    <input type="text" value="FJ62531258" class="w-full bg-slate-50 border border-slate-200 rounded px-2 py-0.5 text-xs">
                                </div>
                            </td>
                            <td class="px-2 py-1.5 border-r border-slate-200">
                                <div class="relative">
                                    <select class="w-full bg-blue-50 border border-blue-200 rounded px-2 py-0.5 text-xs appearance-none text-blue-600 font-medium">
                                        <option>SBAH06</option>
                                    </select>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-1.5 top-1.5 w-3 h-3 text-blue-400"><path d="m6 9 6 6 6-6"/></svg>
                                </div>
                            </td>
                            <td class="px-2 py-1.5 border-r border-slate-200">
                                <input type="text" value="2500 BOX(S)" class="w-full bg-slate-50 border border-slate-200 rounded px-2 py-0.5 text-xs">
                            </td>
                            <td class="px-2 py-1.5 border-r border-slate-200">
                                <input type="text" value="25,240.00" class="w-full bg-slate-50 border border-slate-200 rounded px-2 py-0.5 text-xs text-right">
                            </td>
                            <td class="px-2 py-1.5 border-r border-slate-200">
                                <input type="text" value="24,740.00" class="w-full bg-slate-50 border border-slate-200 rounded px-2 py-0.5 text-xs text-right">
                            </td>
                            <td class="px-2 py-1.5">
                                <input type="text" value="60.000" class="w-full bg-slate-50 border border-slate-200 rounded px-2 py-0.5 text-xs text-right">
                            </td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Footer Actions --}}
        <div class="flex items-center space-x-4">
            <div class="flex-1 bg-white rounded-lg shadow-sm border border-slate-200 p-2 flex items-center space-x-2">
                <span class="text-sm font-medium text-slate-500 px-2">Remarks</span>
                <input type="text" value="05" class="w-12 bg-slate-50 border border-slate-200 rounded px-2 py-1 text-sm text-center">
                <div class="relative w-40">
                    <input type="text" value="05-01-2026" class="w-full bg-slate-50 border border-slate-200 rounded px-3 py-1 text-sm pr-8">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-2 top-1.5 w-4 h-4 text-slate-400"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>
                </div>
                <div class="relative w-24">
                    <select class="w-full bg-slate-50 border border-slate-200 rounded px-2 py-1 text-sm appearance-none">
                        <option>POST</option>
                    </select>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-2 top-1.5 w-4 h-4 text-slate-400"><path d="m6 9 6 6 6-6"/></svg>
                </div>
                <div class="flex-1"></div>
            </div>
            <button class="flex items-center px-8 py-2.5 bg-blue-600 text-white rounded-lg shadow-lg hover:bg-blue-700 transition-all transform hover:-translate-y-0.5 active:translate-y-0 font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/><polyline points="17 21 17 13 7 13 7 21"/><polyline points="7 3 7 8 15 8"/></svg> Save
            </button>
        </div>
    </main>



@endsection
