<div class="container mx-auto mt-10 text-center">
    <h2 class="text-4xl font-bold">{{ $params }}</h2>
    <p class="mt-5 text-2xl">Scan me</p>
    <div class="w-full mt-10 mx-auto flex justify-center">
        {{ QrCode::size(300)->format('svg')->generate($qrCode) }}

    </div>
</div>
