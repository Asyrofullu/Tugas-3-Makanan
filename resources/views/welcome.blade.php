<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <div class="w-[800px] mx-auto">
        <h1 class="font-bold text-4xl my-4">Daftar Makanan</h1>

        <section class="flex gap-5">
            @foreach ($makanans as $makanan)
                <div class="">
                    <img src={{ $makanan->gambar }} class="w-[200px] h-[200px] object-cover rounded-md" />
                    <p class="mt-2">{{ $makanan->nama }}</p>
                    <p>Rp. {{ number_format($makanan->harga) }}</p>
                </div>
            @endforeach
        </section>
    </div>

</body>

</html>
