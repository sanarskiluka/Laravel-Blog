<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left lg:inline-flex">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;" />
        </button>
    </x-slot>

    <x-dropdown-item href="/?{{ http_build_query(request()->except('category', 'page')) }}" 
                     :active="request()->routeIs('home') && !request('category')">All
    </x-dropdown-item>
    @foreach (DB::table('categories')->get() as $category)
        @php
            $searchString = request('search');
            $searchQuery = $searchString ? "&search=${searchString}" : "";
        @endphp
        <x-dropdown-item 
            :active="request('category') && request('category') === $category->slug" 
            href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}">
            {{ ucwords($category->name) }}
        </x-dropdown-item>

        {{-- Works but try Jeffrey way way --}}
        {{-- <x-dropdown-item href="/categories/{{ $category->slug }}"
            class="{{ isset($currentCategory) && $currentCategory->id === $category->id ? 'bg-blue-500 text-white' : '' }}">
            {{ ucwords($category->name) }}
        </x-dropdown-item> --}}
    @endforeach
</x-dropdown>