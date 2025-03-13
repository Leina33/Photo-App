<?php

use Illuminate\Support\Facades\Http;

$response = Http::get('https://jsonplaceholder.typicode.com/albums');
$albums = $response->json();
?>

<x-app-layout>
    <p class="text-5xl font-extrabold text-black mb-12 text-center">
        Albums
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-8">
        <?php foreach ($albums as $album): ?>
            <div class="p-6 border border-gray-300 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-2"><?= htmlspecialchars($album['title']); ?></h2>
                <p class="text-gray-600">Album ID: <?= htmlspecialchars($album['id']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</x-app-layout>
