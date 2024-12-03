
<!-- This is footer Page -->
            </main>
            <footer class="bg-gray-900 text-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                        <div>
                            <div class="flex items-center space-x-2 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-watch h-8 w-8 text-indigo-400">
                                <circle cx="12" cy="12" r="6"></circle>
                                <polyline points="12 10 12 12 13 13"></polyline>
                                <path d="m16.13 7.66-.81-4.05a2 2 0 0 0-2-1.61h-2.68a2 2 0 0 0-2 1.61l-.78 4.05"></path>
                                <path d="m7.88 16.36.8 4a2 2 0 0 0 2 1.61h2.72a2 2 0 0 0 2-1.61l.81-4.05"></path>
                            </svg>
                            <span class="font-serif text-2xl font-bold">CHRONO</span>
                            </div>
                            <p class="text-gray-400">Crafting timeless elegance since 1970. Each timepiece tells a unique story.</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                            <ul class="space-y-2">
                                <li><a href="/about.php" class="text-gray-400 hover:text-white transition">About Us</a></li>
                                <li><a href="/products.php" class="text-gray-400 hover:text-white transition">Collection</a></li>
                                <li><a href="/contact.php" class="text-gray-400 hover:text-white transition">Contact</a></li>                        
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                            <ul class="space-y-2">
                            <li class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone h-5 w-5 text-indigo-400">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                                <a  href="tel:1 (555) 123-4567" class="text-gray-400 hover:text-white">+1 (555) 123-4567</a>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail h-5 w-5 text-indigo-400">
                                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                </svg>
                                <a  href="mailto:info@chrono.com" class="text-gray-400 hover:text-white">info@chrono.com</a>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin h-5 w-5 text-indigo-400">
                                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <span class="text-gray-400">120 Bloor Toronto, ON 10001</span>
                            </li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-4">Newsletter</h3>
                            <p class="text-gray-400 mb-4">Subscribe to receive updates about new collections and special offers.</p>
                            <form class="space-y-2"  onsubmit="return confirm('Subscription Sent');">
                                <input type="email" placeholder="Enter your email" class="w-full px-4 py-2 rounded bg-gray-800 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                                <button class="w-full px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                        <p>© 2024 CHRONO. All rights reserved.</p>
                    </div>
                </div>
            </footer>
        </div>
        <script src="./dist/js/jquery.min.js"></script>
        <script>
            console.log('Script is loaded');
            document.getElementById('button-mobile').addEventListener('click', function() {
                console.log('fsd');
                const nav = document.getElementById('mobile-nav');
                nav.classList.toggle('hidden'); // Toggles the 'hidden' class
            });

            // Products array in JavaScript
            const products = <?= json_encode($products); ?>;

            console.log(products);
            // Open modal function
            function openModal(index) {
                const product = products[index];
                document.getElementById('modalImage').src = product.image;
                document.getElementById('modalImage').alt = product.alt;
                document.getElementById('modalTitle').textContent = product.title;
                document.getElementById('modalPrice').textContent = product.price;
                
                // Show the modal
                document.getElementById('productModal').classList.remove('hidden');
            }

            // Close modal function
            function closeModal() {
                document.getElementById('productModal').classList.add('hidden');
            }
        </script>    
    </body>
</html>