<div class="pl-2">
    

    @forelse($category as $row)

    <div class="mt-7 pl-2">
        <p class="text-xl font-bold text-[#383746]">{{ $row['name'] }}</p>
        <p class="text-gray-400 text-sm mt-1">{{ $row['desc'] }}</p>

        @foreach($row['item'] as $item)
        
        <div class="grid grid-cols-[40px_auto] mt-5">
            <div class="flex items-center text-gray-600 text-xl">
                <i class="fa-solid fa-{{ $item['icon'] }}"></i>
            </div>
            <div >
                <p class="text-[#383746] text-md font-semibold">{{ $item['name'] }}</p>
                <p class="text-gray-400 text-sm">{{ $item['desc'] }}</p>
            </div>
        </div>

        @endforeach

    </div>

    @empty

    @endforelse

    
</div>
