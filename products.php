<?php
    // Includes the header.php file
    include './components/header.php';

    // Product Data
    // some arrays
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
    
  
    <!-- Frontend Display -->
    <div class="pt-16">
        <!-- header section -->
        <section class="bg-gray-900 text-white py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-4xl font-serif font-bold">Our Collection</h1>
                <p class="mt-4 text-gray-300">Discover our range of exceptional timepieces</p>
            </div>
        </section>
        
        <!-- Product Grid -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- foreach would loop over the $products arrays. -->
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

        </section>
    </div>

<?php
    // Includes the footer.php file
    include './components/footer.php';
?>