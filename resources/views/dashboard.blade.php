<x-app-layout>
    <p class="text-5xl font-extrabold text-black mb-12 text-center">
        Welcome back! You're successfully logged in.
    </p>

    <div class="flex justify-between items-center min-h-screen px-8">
        <!-- Users Card (Left) -->
        <div class="w-1/3 p-12 border border-gray-300 rounded-lg text-center shadow-lg hover:shadow-2xl transition bg-white">
            <h2 class="text-4xl font-bold mb-6 text-blue-800">Users</h2>
            <p class="text-lg mb-8 text-gray-700">View the list of users fetched from the API.</p>
            <a href="/users" class="bg-blue-600 text-white font-bold py-3 px-8 rounded-lg hover:bg-blue-800 transition">View Users</a>
        </div>

        <!-- Albums Card (Center) -->
        <div class="w-1/3 p-12 border border-gray-300 rounded-lg text-center shadow-lg hover:shadow-2xl transition bg-white mx-4">
            <h2 class="text-4xl font-bold mb-6 text-green-800">Albums</h2>
            <p class="text-lg mb-8 text-gray-700">Explore albums linked to users from the API.</p>
            <a href="/albums" class="bg-green-600 text-white font-bold py-3 px-8 rounded-lg hover:bg-green-800 transition">View Albums</a>
        </div>

        <!-- Photos Card (Right) -->
        <div class="w-1/3 p-12 border border-gray-300 rounded-lg text-center shadow-lg hover:shadow-2xl transition bg-white">
            <h2 class="text-4xl font-bold mb-6 text-purple-800">Photos</h2>
            <p class="text-lg mb-8 text-gray-700">Browse photos related to user albums.</p>
            <a href="/photos" class="bg-purple-600 text-white font-bold py-3 px-8 rounded-lg hover:bg-purple-800 transition">View Photos</a>
        </div>
    </div>
</x-app-layout>
