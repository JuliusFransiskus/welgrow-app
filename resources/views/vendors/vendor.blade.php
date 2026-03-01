@extends('layout.app')

@section('content')

<div class="p-6" x-data="vendorApp()">

    <div class="flex items-center mb-4 border-b border-gray-300 pb-4">
        <h1 class="inline-block text-xl font-semibold leading-6">Vendor</h1>
    </div>

    <div class="mb-6 grid grid-cols-1 gap-x-6 gap-y-8 xl:grid-cols-3">

        <!-- LEFT CARD -->
        <div class="card shadow xl:col-span-2">
            <div class="card-body">

                <div class="border-b border-gray-300 px-5 py-3 lg:flex justify-between items-center">

                    <div class="grid lg:block">
                    <a 
                        href="{{ route('vendors.create') }}"
                        class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                        Add New Vendor
                    </a>
                    </div>
                    
                    <div>
                        <input
                              type="search"
                              class="text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                              placeholder="Search" />
                        </form>
                    </div>
                </div>

                <div class="relative overflow-x-auto">
                    <table class=" w-full whitespace-nowrap">
                        <thead class="bg-gray-200 text-gray-700 text-center">
                            <tr>
                                <th class="px-6 py-3">No</th>
                                <th class="px-6 py-3">Company Name</th>
                                <th class="px-6 py-3">Type</th>
                                <th class="px-6 py-3">Action</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y">
                            @forelse($vendors  as $index => $vendor)
                            <tr 
                                class="cursor-pointer hover:bg-gray-100"
                                :class="selected?.id === {{ $vendor->id }} ? 'bg-gray-200' : ''"
                                @click="selected = {
                                    id: '{{ $vendor->id ?? ''}}',
                                    code: '{{ $vendor->code ?? '' }}',
                                    name: '{{ $vendor->name ?? '' }}',
                                    type: '{{ $vendor->type ?? '' }}',
                                    address: '{{ $vendor->address ?? '' }}',
                                    pic: '{{ $vendor->pic ?? '' }}',
                                    email: '{{ $vendor->email ?? '' }}',
                                    phone: '{{ $vendor->phone ?? '' }}',
                                    tax_id: '{{ $vendor->tax_id ?? '' }}',
                                }"
                            >
                                <td class="py-3 px-6 text-center">
                                    {{ $vendors->firstItem() + $index }}
                                </td>

                                <td class="py-3 px-6 text-left">
                                    {{ $vendor->name }}
                                </td>

                                <td class="py-3 px-6 text-center">
                                    {{ $vendor->type ?? '-' }}
                                </td>
                                <td class="py-3 px-6 center">
                                    <div class="flex items-center gap-2">

                                        <!-- DELETE -->
                                        <form action="{{ route('vendors.destroy', $vendor->id) }}" 
                                            method="POST"
                                            onsubmit="return confirm('Delete this vendor?')">
                                            @csrf
                                            @method('DELETE')

                                            <button 
                                                type="submit"
                                                class="w-8 h-8 flex items-center justify-center 
                                                    bg-red-600 hover:bg-red-700 
                                                    text-white rounded-md transition"
                                            >
                                                <!-- Heroicons Trash -->

                                                <svg xmlns="http://www.w3.org/2000/svg" 
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke-width="1.5"
                                                stroke="currentColor"
                                                class="w-4 h-4">
                                                <path stroke-linecap="round"
                                                stroke-linejoin="round" 
                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                </svg>
                                            </button>
                                        </form>

                                        <!-- EDIT -->
                                        <a href="{{ route('vendors.edit', $vendor->id) }}"
                                        class="w-8 h-8 flex items-center justify-center
                                                bg-yellow-500 hover:bg-yellow-600
                                                text-white rounded-md transition"
                                        >
                                            <!-- Heroicons Penciil -->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                fill="none" 
                                                viewBox="0 0 24 24" 
                                                stroke-width="1.5" 
                                                stroke="currentColor" 
                                                class="w-4 h-4">
                                                <path stroke-linecap="round" 
                                                    stroke-linejoin="round" 
                                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                            </svg>

                                        </a>

                                    </div>
                                </td>
                            </tr>
                            @empty

                            <tr>
                                <td colspan="3" class="text-center py-4 text-gray-500">
                                    No vendors found.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
                @if ($vendors->hasPages())
<nav class="flex items-center gap-x-1 mt-4">

    {{-- Previous --}}
    <a href="{{ $vendors->previousPageUrl() }}"
       class="min-h-[36px] min-w-[36px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 rounded-md border bg-white border-gray-300 text-gray-800 hover:bg-gray-300 {{ $vendors->onFirstPage() ? 'opacity-50 pointer-events-none' : '' }}">
        <span>Previous</span>
    </a>

    {{-- Page Numbers --}}
    <div class="flex items-center gap-x-1">
        @foreach ($vendors->getUrlRange(1, $vendors->lastPage()) as $page => $url)
            <a href="{{ $url }}"
               class="min-h-[36px] min-w-[36px] py-2 px-2.5 inline-flex justify-center items-center rounded-md border
               {{ $page == $vendors->currentPage() 
                    ? 'bg-indigo-600 text-white border-indigo-600' 
                    : 'bg-white border-gray-300 text-gray-800 hover:bg-gray-300' }}">
                {{ $page }}
            </a>
        @endforeach
    </div>

    {{-- Next --}}
    <a href="{{ $vendors->nextPageUrl() }}"
       class="min-h-[36px] min-w-[36px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 rounded-md border bg-white border-gray-300 text-gray-800 hover:bg-gray-300 {{ $vendors->hasMorePages() ? '' : 'opacity-50 pointer-events-none' }}">
        <span>Next</span>
    </a>

</nav>
@endif
            </div>
        </div>

        <!-- RIGHT CARD -->
        <div class="card shadow xl:col-span-1">
            <div class="card-body">

                <h4 class="mb-2" x-if="selected">
                    <span x-text="selected.name"></span>
                </h4>

                <template x-if="selected">
                    <div class="mt-4">
                        <ul>
                            <li class="flex justify-between border-b py-2">
                                <span>Vendor Code:</span>
                                <span x-text="selected.code"></span>
                            </li>

                            <li class="flex justify-between border-b py-2">
                                <span>Vendor Type:</span>
                                <span x-text="selected.type"></span>
                            </li>

                            <li class="flex justify-between border-b py-2">
                                <span>Address:</span>
                                <span x-text="selected.address"></span>
                            </li>

                            <li class="flex justify-between border-b py-2">
                                <span>PIC Name:</span>
                                <span x-text="selected.pic"></span>
                            </li>

                            <li class="flex justify-between border-b py-2">
                                <span>Email:</span>
                                <span x-text="selected.email"></span>
                            </li>

                            <li class="flex justify-between border-b py-2">
                                <span>No. Telp:</span>
                                <span x-text="selected.phone"></span>
                            </li>

                            <li class="flex justify-between py-2">
                                <span>Tax ID:</span>
                                <span x-text="selected.tax_id"></span>
                            </li>
                        </ul>
                    </div>
                </template>

                <template x-if="!selected">
                    <p class="text-gray-500 mt-4">Klik vendor untuk melihat detail.</p>
                </template>

            </div>
        </div>

    </div>
</div>

<script>
function vendorApp() {
    return {
        selected: null,
        select(data) {
            this.selected = data
        }
    }
}
</script>

@endsection
