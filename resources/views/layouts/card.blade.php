<div class="bg-white shadow-lg rounded-lg p-6">
    <h2 class="text-2xl font-bold mb-4">{{ $title }}</h2>

    {{-- Ini adalah slot utama untuk konten yang lebih banyak --}}
    <div class="content">
        {{ $slot }}
    </div>

    {{-- Jika ada tombol khusus di bagian bawah --}}
    <div class="mt-4">
        <button class="bg-blue-500 text-white p-2 rounded">Learn More</button>
    </div>
</div>
