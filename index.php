<?php
    require './components/header.php';

    $products = [
        [
            "image" => "./dist/img/1.jpeg",
            "alt" => "Classic Chronograph",
            "title" => "Classic Chronograph",
            "price" => "$4,999"
        ],
        [
            "image" => "./dist/img/2.jpeg",
            "alt" => "Elegant Automatic",
            "title" => "Elegant Automatic",
            "price" => "$6,499"
        ],
        [
            "image" => "./dist/img/3.jpeg",
            "alt" => "Sport Edition",
            "title" => "Sport Edition",
            "price" => "$3,999"
        ]
        
    ];
?>
    
    <section class="relative h-screen flex items-center">
        <video autoplay="" loop="" class="absolute inset-0 w-full h-full object-cover" style="filter: brightness(0.7);">
            <source src="./dist/video/videoplayback.mp4" type="video/mp4">
        </video>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-white">
            <h1 class="font-serif text-5xl md:text-7xl font-bold mb-6">Time is Luxury</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-2xl">Discover our collection of handcrafted timepieces that blend traditional craftsmanship with modern innovation.</p>
            <a class="inline-flex items-center px-8 py-3 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition group" href="/products.php">
                Explore Products
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 h-5 w-5 group-hover:translate-x-1 transition">
                <path d="M5 12h14"></path>
                <path d="m12 5 7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </section>
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-serif font-bold text-center mb-12">Featured Timepieces</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php foreach ($products as $index => $product): ?>
                    <!-- Product Card -->
                    <div class="group">
                        <div class="relative overflow-hidden rounded-lg mb-4">
                            <!-- Shows an image -->
                            <img src="<?= $product['image']; ?>" alt="<?= $product['alt']; ?>" class="w-full h-80 object-cover transform group-hover:scale-105 transition duration-500">
                            <!-- Overlays a semi-transparent background on hover. -->
                            <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition"></div>
                            
                            <!-- "View Details" button only on hover -->
                            <button 
                                class="absolute bottom-4 left-4 right-4 bg-white text-gray-900 py-2 rounded-md opacity-0 group-hover:opacity-100 transition"
                                data-index="<?= $index; ?>"
                                onclick="openModal(<?= $index; ?>)">

                                View Details

                            </button>
                        </div>

                        <!-- titles and prices for the products -->
                        <h3 class="text-xl font-semibold mb-2"><?= $product['title']; ?></h3>
                        <p class="text-gray-600"><?= $product['price']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-serif font-bold text-center mb-12">What Our Clients Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-5 w-5 text-yellow-400 fill-current">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-5 w-5 text-yellow-400 fill-current">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-5 w-5 text-yellow-400 fill-current">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-5 w-5 text-yellow-400 fill-current">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-5 w-5 text-yellow-400 fill-current">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                </div>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic, est. Optio, soluta! Labore tempore minima dolor dolores et quibusdam, magni obcaecati, omnis nihil doloremque amet optio, perferendis veniam provident pariatur.</p>
                <div>
                    <p class="font-semibold">James Wilson</p>
                    <p class="text-sm text-gray-500">CEO, TechCorp</p>
                </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-5 w-5 text-yellow-400 fill-current">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-5 w-5 text-yellow-400 fill-current">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-5 w-5 text-yellow-400 fill-current">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-5 w-5 text-yellow-400 fill-current">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-5 w-5 text-yellow-400 fill-current">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                </div>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic, est. Optio, soluta! Labore tempore minima dolor dolores et quibusdam, magni obcaecati, omnis nihil doloremque amet optio, perferendis veniam provident pariatur.</p>
                <div>
                    <p class="font-semibold">Sarah Chen</p>
                    <p class="text-sm text-gray-500">Designer</p>
                </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-5 w-5 text-yellow-400 fill-current">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-5 w-5 text-yellow-400 fill-current">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-5 w-5 text-yellow-400 fill-current">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-5 w-5 text-yellow-400 fill-current">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-5 w-5 text-yellow-400 fill-current">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                </div>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic, est. Optio, soluta! Labore tempore minima dolor dolores et quibusdam, magni obcaecati, omnis nihil doloremque amet optio, perferendis veniam provident pariatur.</p>
                <div>
                    <p class="font-semibold">Michael Brown</p>
                    <p class="text-sm text-gray-500">Watch Collector</p>
                </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-indigo-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-serif font-bold mb-4">Join Our Exclusive Collection</h2>
            <p class="text-xl mb-8">Subscribe to receive updates about new releases and special offers.</p>
            <form class="max-w-md mx-auto flex gap-4" onsubmit="return confirm('Subscription Sent');">
                <input type="email" placeholder="Enter your email" class="flex-grow px-4 py-2 rounded-md text-gray-900 focus:outline-none focus:ring-2 focus:ring-white" required>
                <button class="px-6 py-2 bg-white text-indigo-600 rounded-md hover:bg-gray-100 transition">Subscribe</button>
            </form>
        </div>
    </section>

<?php
    include './components/footer.php';
?>