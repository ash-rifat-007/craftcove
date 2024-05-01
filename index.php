<?php require "helpers.php" ?>
<?php loadPartial('header'); ?>

<div class="container">
    <div class="row">
        <div class="col-3 bg-gray-100 p-4">
            <h2 class="text-gray-800 text-lg font-semibold mb-4">Filter</h2>
            <form id="filterForm" action="#" method="GET">
                <!-- Filter by Price Range -->
                <div class="mb-6">
                    <label for="priceRange" class="block text-sm font-medium text-gray-700">Price Range</label>
                    <div class="relative rounded-md shadow-sm">
                        <select id="priceRange" name="priceRange" class="block appearance-none w-full bg-white border border-gray-300 text-gray-700 py-2 px-3 pr-10 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="">Select price range</option>
                            <option value="0-10">$0 - $10</option>
                            <option value="10-20">$10 - $20</option>
                            <option value="20-30">$20 - $30</option>
                            <option value="30-40">$30 - $40</option>
                            <!-- Add more options as needed -->
                        </select>
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M14.293 7.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L10 10.586l3.293-3.293z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Filter by Category -->
                <div class="mb-6">
                    <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                    <select id="category" name="category" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        <option selected disabled>Select a category</option>
                        <option>Category 1</option>
                        <option>Category 2</option>
                        <option>Category 3</option>
                    </select>
                </div>
                <!-- Submit Button -->
                <button type="submit" class="block w-full bg-orange-400 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded-md transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    Filter
                </button>
            </form>
        </div>

        <div class="col-9">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Product Card 1 -->
                <div class="bg-white rounded-lg shadow-2xl">
                    <img class="object-cover w-full h-64 rounded-t-lg hover:scale-95 duration-200 " src="image1.jpeg" alt="Product 1">
                    <div class="px-6 py-4">
                        <div class="flex justify-between items-center">
                            <div class="font-bold text-xl">Product 1</div>
                            <div class="text-gray-700 font-semibold">$99.99</div>
                        </div>
                        <p class="text-gray-700 text-base mt-2">
                            High-quality product with advanced features. Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit.
                        </p>
                        <div class="flex justify-between items-center mt-4">
                            <button class="bg-orange-400 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-full">
                                Add to Cart
                            </button>
                            <span class="text-gray-600">In Stock</span>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="bg-white rounded-lg shadow-lg">
                    <img class="object-cover w-full h-64 rounded-t-lg hover:scale-95 duration-200" src="image2.jpeg" alt="Product 2">
                    <div class="px-6 py-4">
                        <div class="flex justify-between items-center">
                            <div class="font-bold text-xl">Product 2</div>
                            <div class="text-gray-700 font-semibold">$79.99</div>
                        </div>
                        <p class="text-gray-700 text-base mt-2">
                            Stylish and reliable product for everyday use. Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit.
                        </p>
                        <div class="flex justify-between items-center mt-4">
                            <button class="bg-orange-400 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-full">
                                Add to Cart
                            </button>
                            <span class="text-gray-600">In Stock</span>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="bg-white rounded-lg shadow-lg">
                    <img class="object-cover w-full h-64 rounded-t-lg hover:scale-95 duration-200" src="image3.jpeg" alt="Product 3">
                    <div class="px-6 py-4">
                        <div class="flex justify-between items-center">
                            <div class="font-bold text-xl">Product 3</div>
                            <div class="text-gray-700 font-semibold">$149.99</div>
                        </div>
                        <p class="text-gray-700 text-base mt-2">
                            Premium product with exceptional performance. Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit.
                        </p>
                        <div class="flex justify-between items-center mt-4">
                            <button class="bg-orange-400 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-full">
                                Add to Cart
                            </button>
                            <span class="text-gray-600">Out of Stock</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php loadPartial('footer'); ?>
