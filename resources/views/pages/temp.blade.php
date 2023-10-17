
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Blog - Article Title</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

    <!-- Header -->
    <header class="bg-blue-500 text-white py-4 sticky top-0 z-50">
        <div class="container mx-auto flex flex-col sm:flex-row justify-between items-center">
            <a href="/" class="text-2xl font-bold mb-2 sm:mb-0">Tech Blog</a>
            <nav class="space-x-4 mt-2 sm:mt-0">
                <a href="/" class="text-white">Home</a>
                <a href="/categories" class="text-white">Categories</a>
                <a href="/about" class="text-white">About</a>
                <a href="/contact" class="text-white">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Article Content -->
    <section class="container mx-auto my-8 p-8 bg-white shadow-lg rounded-lg">
        <div class="md:flex">
            <img src="https://via.placeholder.com/400x250" alt="Article Image" class="rounded-lg shadow-md mb-4 md:w-1/3">
            <div class="md:w-2/3 md:pl-6">
                <h1 class="text-3xl font-semibold mb-4">Article Title</h1>
                <p class="text-gray-500 text-sm">Posted by Author on September 22, 2023</p>

                <!-- Article Content -->
                <div class="prose">
                    <!-- Replace the content below with your actual blog article content -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in tincidunt quam. Vivamus laoreet nisl eget massa pharetra, eu tincidunt justo mattis.</p>

                    <p>Praesent id eros efficitur, bibendum elit id, vestibulum lorem. Integer congue at urna et bibendum. Sed vel lacus nec justo finibus laoreet a sit amet ligula.</p>

                    <!-- Continue with article content -->
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 Tech Blog. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
