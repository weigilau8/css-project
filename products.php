<?php
    include './components/header.php';

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
        ],
        [
            "image" => "./dist/img/4.jpeg",
            "alt" => "Minimalist Series",
            "title" => "Minimalist Series",
            "price" => "$2,999"
        ],
        [
            "image" => "./dist/img/1.jpeg",
            "alt" => "Diver Pro",
            "title" => "Diver Pro",
            "price" => "$5,499"
        ],
        [
            "image" => "./dist/img/2.jpeg",
            "alt" => "Heritage Collection",
            "title" => "Heritage Collection",
            "price" => "$7,999"
        ]
    ];
?>
    
    <div class="pt-16">
        <section class="bg-gray-900 text-white py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-4xl font-serif font-bold">Our Collection</h1>
                <p class="mt-4 text-gray-300">Discover our range of exceptional timepieces</p>
            </div>
        </section>
        
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php foreach ($products as $index => $product): ?>
                    <div class="group">
                        <div class="relative overflow-hidden rounded-lg mb-4">
                            <img src="<?= $product['image']; ?>" alt="<?= $product['alt']; ?>" class="w-full h-80 object-cover transform group-hover:scale-105 transition duration-500">
                            <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition"></div>
                            <button 
                                class="absolute bottom-4 left-4 right-4 bg-white text-gray-900 py-2 rounded-md opacity-0 group-hover:opacity-100 transition"
                                data-index="<?= $index; ?>"
                                onclick="openModal(<?= $index; ?>)">
                                View Details
                            </button>
                        </div>
                        <h3 class="text-xl font-semibold mb-2"><?= $product['title']; ?></h3>
                        <p class="text-gray-600"><?= $product['price']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

        </section>
    </div>

    <!-- Modal -->
    <div id="productModal" class="fixed inset-0 bg-black/50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg w-1/2 p-6 relative">
            <button class="absolute top-4 right-4 text-gray-500 hover:text-gray-700" onclick="closeModal()">✕</button>
            <img id="modalImage" src="" alt="" class="w-full h-80 object-cover rounded-lg mb-4">
            <h3 id="modalTitle" class="text-xl font-semibold mb-2"></h3>
            <p id="modalPrice" class="text-gray-600"></p>
        </div>
    </div>

<?php
    include './components/footer.php';
?>