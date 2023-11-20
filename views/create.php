<?php include "./icnludes/header.php"; ?>

<!-- component -->
<form class="relative flex min-h-screen text-gray-800 antialiased flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12" action="../controllers/insertController.php" method="post" enctype="multipart/form-data">
    <div class="relative py-3 sm:w-96 mx-auto text-center">
        <span class="text-2xl font-light ">Create</span>
        <div class="mt-4 bg-white shadow-md rounded-lg text-left">
            <div class="h-2 bg-purple-400 rounded-t-md"></div>
            <div class="px-8 py-6 ">
                <label class="block font-semibold"> Username </label>
                <input type="text" placeholder="Username" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="username">
                <label class="block mt-3 font-semibold"> Email </label>
                <input type="username" placeholder="Email" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="email">
                <label class="block mt-3 font-semibold"> Password </label>
                <input type="password" placeholder="Password" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="password">
                <label class="block mt-3 font-semibold"> Image </label>
                <input type="file" class="file-input file-input-bordered w-full max-w-xs" name="image" />
                <div class="flex justify-between items-baseline">
                    <button type="submit" class="mt-4 bg-purple-500 text-white py-2 px-6 rounded-md hover:bg-purple-600 ">Create</button>
                </div>
            </div>

        </div>
    </div>
</form>

<a href="./index.php" class="btn btn-succees">List</a>

<?php include "./icnludes/footer.php"; ?>