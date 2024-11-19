<?php
    include './components/header.php';
?>
    
    <div class="pt-16">
        <div class="bg-gray-900 text-white py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-4xl font-serif font-bold">Our Collection</h1>
                <p class="mt-4 text-gray-300">Discover our range of exceptional timepieces</p>
            </div>
        </div>
        <div class="bg-white border-b">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <div class="flex items-center space-x-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-filter h-5 w-5 text-gray-500">
                        <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                    </svg>
                    <select class="border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                        <option>All</option>
                        <option>Chronograph</option>
                        <option>Automatic</option>
                        <option>Sport</option>
                        <option>Minimalist</option>
                    </select>
                </div>
                <div class="flex items-center space-x-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down h-5 w-5 text-gray-500">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>
                    <select class="border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="featured">Featured</option>
                        <option value="price-asc">Price: Low to High</option>
                        <option value="price-desc">Price: High to Low</option>
                    </select>
                </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group">
                <div class="relative overflow-hidden rounded-lg mb-4">
                    <img src="./dist/img/1.jpeg" alt="Classic Chronograph" class="w-full h-80 object-cover transform group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition"></div>
                    <button class="absolute bottom-4 left-4 right-4 bg-white text-gray-900 py-2 rounded-md opacity-0 group-hover:opacity-100 transition">View Details</button>
                </div>
                <h3 class="text-xl font-semibold mb-2">Classic Chronograph</h3>
                <p class="text-gray-600">$4,999</p>
                </div>
                <div class="group">
                <div class="relative overflow-hidden rounded-lg mb-4">
                    <img src="./dist/img/2.jpeg" alt="Elegant Automatic" class="w-full h-80 object-cover transform group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition"></div>
                    <button class="absolute bottom-4 left-4 right-4 bg-white text-gray-900 py-2 rounded-md opacity-0 group-hover:opacity-100 transition">View Details</button>
                </div>
                <h3 class="text-xl font-semibold mb-2">Elegant Automatic</h3>
                <p class="text-gray-600">$6,499</p>
                </div>
                <div class="group">
                <div class="relative overflow-hidden rounded-lg mb-4">
                    <img src="./dist/img/3.jpeg" alt="Sport Edition" class="w-full h-80 object-cover transform group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition"></div>
                    <button class="absolute bottom-4 left-4 right-4 bg-white text-gray-900 py-2 rounded-md opacity-0 group-hover:opacity-100 transition">View Details</button>
                </div>
                <h3 class="text-xl font-semibold mb-2">Sport Edition</h3>
                <p class="text-gray-600">$3,999</p>
                </div>
                <div class="group">
                <div class="relative overflow-hidden rounded-lg mb-4">
                    <img src="./dist/img/4.jpeg" alt="Minimalist Series" class="w-full h-80 object-cover transform group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition"></div>
                    <button class="absolute bottom-4 left-4 right-4 bg-white text-gray-900 py-2 rounded-md opacity-0 group-hover:opacity-100 transition">View Details</button>
                </div>
                <h3 class="text-xl font-semibold mb-2">Minimalist Series</h3>
                <p class="text-gray-600">$2,999</p>
                </div>
                <div class="group">
                <div class="relative overflow-hidden rounded-lg mb-4">
                    <img src="./dist/img/1.jpeg" alt="Diver Pro" class="w-full h-80 object-cover transform group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition"></div>
                    <button class="absolute bottom-4 left-4 right-4 bg-white text-gray-900 py-2 rounded-md opacity-0 group-hover:opacity-100 transition">View Details</button>
                </div>
                <h3 class="text-xl font-semibold mb-2">Diver Pro</h3>
                <p class="text-gray-600">$5,499</p>
                </div>
                <div class="group">
                <div class="relative overflow-hidden rounded-lg mb-4">
                    <img src="./dist/img/2.jpeg" alt="Heritage Collection" class="w-full h-80 object-cover transform group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition"></div>
                    <button class="absolute bottom-4 left-4 right-4 bg-white text-gray-900 py-2 rounded-md opacity-0 group-hover:opacity-100 transition">View Details</button>
                </div>
                <h3 class="text-xl font-semibold mb-2">Heritage Collection</h3>
                <p class="text-gray-600">$7,999</p>
                </div>
            </div>
        </div>
    </div>

<?php
    include './components/footer.php';
?>