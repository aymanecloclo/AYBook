<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-white border-b border-gray-200 shadow-sm">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Left Side -->
                <div class="flex-shrink-0">
                    <a href="#" class="text-lg font-bold text-blue-600">
                        Post Share
                    </a>
                </div>
                <!-- Right Side (Profile Dropdown) -->
                <div class="relative">
                    <!-- Profile Photo Button -->
                    <button id="profileButton" class="flex items-center focus:outline-none" onclick="toggleDropdown()">
                        <img src="https://via.placeholder.com/40" alt="Profile Photo" alt="Profile Photo"
                            class="h-10 w-10 rounded-full border-2 border-gray-300" />
                    </button>

                    <!-- Dropdown Menu -->
                    <div id="profileDropdown"
                        class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-20">
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
                            Profile
                        </a>
                        <form method="POST" action="#">
                            <button type="submit" class="w-full text-left px-4 py-2 text-gray-800 hover:bg-gray-100">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
                <!-- 
                <div>
                    <a href="#" class="text-gray-700 hover:text-blue-600 mx-2">Login</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 mx-2">Register</a>
                </div>
                 -->
            </div>
        </div>
    </nav>
    <!-- Page Content -->
    <div class="flex-grow justify-center p-6 overflow-y-auto">
        <!-- Container principal -->
        <div class="max-w-3xl mx-auto mt-10 space-y-6">
            <div class="bg-white p-4 rounded-lg shadow-md">
                <!-- Header du Post -->
                <div class="flex items-center mb-4">
                    <img src="https://via.placeholder.com/40" alt="Profile Photo"
                        class="w-12 h-12 rounded-full object-cover">
                    <div class="ml-3">
                        <h3 class="text-lg font-semibold">lorem ipsum dolor</h3>
                        <p class="text-sm text-gray-500">4 hours</p>
                    </div>
                </div>

                <!-- Contenu du Post -->
                <h2 class="text-xl font-bold mb-2">lorem ipsum dolor</h2>
                <p class="text-gray-700 mb-4">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, ullam repudiandae eligendi in
                    numquam rem eaque eius est culpa voluptatum quod veritatis officia nobis quae? Laboriosam corporis
                    soluta ab reiciendis!
                </p>

                <!-- Boutons d'actions (Like, Comment) -->
                <div class="flex justify-between mt-4 text-gray-500">
                    <button class="flex items-center hover:text-blue-500" onclick="toggleCommentSection(1)">
                        💬 Comment
                    </button>
                </div>

                <!-- Comment Section -->
                <div id="comment-section-1" class=" mt-4 transition-all duration-300 hidden">
                    <!-- Comment Form -->
                    <div>
                        <textarea id="comment-input-2" class="w-full p-2 border border-gray-300 rounded-lg mb-4"
                            placeholder="Write your comment here..."></textarea>
                        <button onclick="submitComment(1)"
                            class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                            Submit
                        </button>
                    </div>
                    <!-- Existing Comments -->
                    <div id="comments-list-1" class="mt-4 min-h-0 max-h-36 overflow-auto ">
                        <div class="bg-gray-100 p-2 rounded-lg mb-2">
                            <div class="flex items-center"> <img src="https://via.placeholder.com/40"
                                    alt="Profile Photo" class="w-6 h-6 rounded-full object-cover mr-2">
                                <p class="text-sm font-semibold">lorem ipsum</p>
                            </div>

                            <p class="text-gray-700">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus et
                                voluptas odit totam laudantium ipsam praesentium atque veritatis est quasi eius rerum in
                                saepe repellat amet facere similique, illo iste.</p>
                            <p class="text-xs text-gray-500">2 hours</p>
                        </div>
                        <div class="bg-gray-100 p-2 rounded-lg mb-2">
                            <div class="flex items-center"> <img src="https://via.placeholder.com/40"
                                    alt="Profile Photo" class="w-6 h-6 rounded-full object-cover mr-2">
                                <p class="text-sm font-semibold">lorem ipsum dolor</p>
                            </div>

                            <p class="text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ab
                                quod nesciunt, perspiciatis assumenda necessitatibus accusamus earum voluptate? Error
                                incidunt architecto commodi illum nostrum minus itaque explicabo. Odio, velit impedit!
                            </p>
                            <p class="text-xs text-gray-500">2 days</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <!-- Header du Post -->
                <div class="flex items-center mb-4">
                    <img src="https://via.placeholder.com/40" alt="Profile Photo"
                        class="w-12 h-12 rounded-full object-cover">
                    <div class="ml-3">
                        <h3 class="text-lg font-semibold">lorem ipsum dolor</h3>
                        <p class="text-sm text-gray-500">13 min</p>
                    </div>
                </div>

                <!-- Contenu du Post -->
                <h2 class="text-xl font-bold mb-2">lorem ipsum dolor</h2>
                <p class="text-gray-700 mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum laborum facere inventore tempora
                    asperiores repellat necessitatibus iste distinctio obcaecati ipsam laudantium minus, voluptatum quo
                    sapiente atque culpa itaque, facilis esse.
                </p>

                <!-- Boutons d'actions (Like, Comment) -->
                <div class="flex justify-between mt-4 text-gray-500">
                    <button class="flex items-center hover:text-blue-500" onclick="toggleCommentSection(2)">
                        💬 Comment
                    </button>
                </div>

                <!-- Comment Section -->
                <div id="comment-section-2" class=" mt-4 transition-all duration-300 hidden">
                    <!-- Comment Form -->
                    <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative m-4">
                        Vous devez etre authentifié pour rédiger un commentaire
                    </div>
                    <!-- Existing Comments -->
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <!-- Header du Post -->
                <div class="flex items-center mb-4">
                    <img src="https://via.placeholder.com/40" alt="Profile Photo"
                        class="w-12 h-12 rounded-full object-cover">
                    <div class="ml-3">
                        <h3 class="text-lg font-semibold">lorem ipsum</h3>
                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Consequatur fugit necessitatibus nisi ipsa perspiciatis vitae veritatis, tempora facere
                            delectus. Eum laudantium facilis illum quos deserunt sequi necessitatibus dignissimos
                            delectus cum.</p>
                    </div>
                </div>

                <!-- Contenu du Post -->
                <h2 class="text-xl font-bold mb-2">lorem ipsum dolor</h2>
                <p class="text-gray-700 mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit eos impedit ipsa esse
                    officia explicabo enim doloremque, aliquid reiciendis molestiae suscipit consectetur iusto quia
                    amet, quis itaque labore deleniti. Unde.
                </p>

                <!-- Boutons d'actions (Like, Comment) -->
                <div class="flex justify-between mt-4 text-gray-500">
                    <button class="flex items-center hover:text-blue-500" onclick="toggleCommentSection(3)">
                        💬 Comment
                    </button>
                </div>

                <!-- Comment Section -->
                <div id="comment-section-3" class=" mt-4 transition-all duration-300 hidden">
                    <!-- Comment Form -->
                    <div>
                        <textarea id="comment-input-1" class="w-full p-2 border border-gray-300 rounded-lg mb-4"
                            placeholder="Write your comment here..."></textarea>
                        <button onclick="submitComment(3)"
                            class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                            Submit
                        </button>
                    </div>
                    <!-- <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative m-4">
                Vous devez etre authentifié pour rédiger un commentaire
            </div> -->
                    <!-- Existing Comments -->
                    <div id="comments-list-3" class="mt-4 min-h-0 max-h-36 overflow-auto ">
                        <div class="bg-gray-100 p-2 rounded-lg mb-2">
                            <div class="flex items-center"> <img src="https://via.placeholder.com/40"
                                    alt="Profile Photo" class="w-6 h-6 rounded-full object-cover mr-2">
                                <p class="text-sm font-semibold">Lorem ipsum dolor</p>
                            </div>

                            <p class="text-gray-700">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque
                                porro sint quos dicta. Voluptatem odio optio impedit alias, ea, ipsam nam qui iste
                                corrupti fugit ex obcaecati esse voluptatum error.</p>
                            <p class="text-xs text-gray-500">2 hours</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // Toggle the comment section
            function toggleCommentSection(postId) {
                const section = document.getElementById(`comment-section-${postId}`);
                if (section.classList.contains('hidden')) {
                    section.classList.remove('hidden');
                    section.classList.add('block');

                } else {
                    section.classList.remove('block');
                    section.classList.add('hidden');
                }
            }

            // Submit a comment via AJAX
            function submitComment(postId) {
                console.log(document.querySelector('meta[name="csrf-token"]'));
                const commentInput = document.getElementById(`comment-input-${postId}`);
                const commentsList = document.getElementById(`comments-list-${postId}`);
                const commentText = commentInput.value.trim();

                if (!commentText) {
                    alert('Comment cannot be empty.');
                    return;
                }

                // Perform AJAX request
                fetch(`/posts/${postId}/comments`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        content: commentText
                    })
                })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Failed to submit comment');
                        }
                        return response.json();
                    })
                    .then(data => {
                        // Append the new comment to the list
                        const newComment = document.createElement('div');
                        newComment.className = 'bg-gray-100 p-2 rounded-lg mb-2';
                        newComment.innerHTML = `
                 <div class="flex items-center"> <img
                            src=""
                            alt="Profile Photo"
                            class="w-6 h-6 rounded-full object-cover mr-2">
                <p class="text-sm font-semibold">${data.user.name}</p></div>
                <p class="text-gray-700">${data.content}</p>
                <p class="text-xs text-gray-500">${data.created_at}</p>
            `;
                        commentsList.appendChild(newComment);

                        // Clear the input field
                        commentInput.value = '';
                    })
                    .catch(error => {
                        console.error(error);
                        alert('Failed to submit comment. Please try again.');
                    });
            }
        </script>
    </div>
    <!-- Simple Dropdown Script -->
    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById('profileDropdown');
            dropdown.classList.toggle('hidden');
        }
    </script>
</body>
</html>