<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Document</title>
</head>

<body>

    {{-- @if ($makanans)
            @foreach ($makanans as $value)
                <div class="">

                    <p>{{ $value['nama'] }}</p>
                    <p> Rp:{{ number_format($value['harga']) }}</p>
                    <div>
                        <img width="100" height="100" src="{{ $value['gambar'] }}" alt="{{ $value['nama'] }}">
                        <p>{{ $value['stok'] }}</p>
                    </div>
            @endforeach
            <p>ada</p>
        @else
            <p>TIDAK ADA</p>
        @endif --}}

    {{-- Card --}}
    <div class="  m-[10%] sm:m-[2%]  flex flex-wrap gap-2 sm:gap-4 ">


        @if ($makanans)
            @foreach ($makanans as $value)
                <div class="max-w-sm rounded overflow-hidden shadow-lg mt-2">
                    <img class="w-full" width="100" height="100" src="{{ $value['gambar'] }}"
                        alt="{{ $value['nama'] }}">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $value['nama'] }}</div>
                        <p class="text-gray-700 text-base">
                            Deskripsi
                        </p>
                        <p class="text-gray-700 text-base">
                            Rp:{{ number_format($value['harga']) }}
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $value['stok'] }}</span>
                    </div>
                </div>
            @endforeach
        @else
            <p>TIDAK ADA</p>
        @endif

        {{-- End Card --}}
    </div>

</body>

</html>
