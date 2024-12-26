<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>title</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>


<body class="bg-gray-100">
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 shadow-md">
            <div class="p-6">
                <a href="">
                    <h1 class="text-lg font-bold text-white text-center">  AYBook</h1>
                </a>
            </div>
            <nav class="mt-6">
                <!-- Sidebar Links -->
                <a href="#"
                    class="text-white block py-2.5 px-4 rounded
                bg-blue-600">
                    Posts
                </a>
                <a href="#"
                    class="block py-2.5 px-4 rounded
                    text-gray-300 hover:bg-gray-700 hover:text-white">
                    Profile
                </a>
                <form method="POST" action="">
                    <button type="submit"
                        class="w-full text-left py-2.5 px-4 text-gray-300 hover:bg-gray-700 hover:text-white rounded">
                        Logout
                    </button>
                </form>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-white shadow-md p-4">
                <div class="flex justify-between items-center">
                    <h2 class="text-gray-800 text-xl font-semibold"></h2>
                    <div class="relative">
                        <button
                            id="profileButton"
                            class="flex items-center focus:outline-none"
                            onclick="toggleDropdown()">
                            <div class="flex items-center">
                                <span class="text-gray-600 mr-4">John Doe</span>
                                <img
                                    src="https://via.placeholder.com/40" alt="Profile Photo" alt="Profile Photo"
                                    class="h-10 w-10 rounded-full border-2 border-gray-300">
                            </div>
                        </button>
                        <!-- Dropdown Menu -->
                        <div
                            id="profileDropdown"
                            class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-20">
                            <a href=""
                                class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
                                Profile
                            </a>
                            <form method="POST" action="">
                                <button type="submit"
                                    class="w-full text-left px-4 py-2 text-gray-800 hover:bg-gray-100">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Page Content -->
            <main class="flex-1 bg-gray-50 overflow-y-auto">
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative m-4">
                    Great, Your request has been treated successfuly
                </div>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative m-4">
                    Oops, Something went wrong please, try later
                </div>
                <div class="flex justify-center">
                    <form action="" method="post" class="p-8 w-full max-w-md">
                        <h2 class="text-2xl font-semibold text-start mb-6">Create a Post</h2>
                        <!-- Title Input -->
                        <div class="mb-4">
                            <label for="title" class="block font-medium mb-2 text-red-500" >Title</label>
                            <input type="text" id="title" name="title"
                                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent border-red-500"
                                value="" placeholder="Enter the title" required>
                            <p class="text-red-500 text-sm mt-1">Un message d'ereeur</p>
                        </div>
                        <!-- Content Textarea -->
                        <div class="mb-6">
                            <label for="content" class="block text-gray-700 font-medium mb-2">Content</label>
                            <textarea id="content" name="content" rows="5"
                                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                placeholder="Enter the content" required></textarea>
                        </div>
                        <!-- Submit Button -->
                        <button type="submit"
                            class="w-full bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-300">
                            Create
                        </button>
                    </form>
                </div>
            </main>
        </div>
    </div>
    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById('profileDropdown');
            dropdown.classList.toggle('hidden');
        }
    </script>
</body>




</html>