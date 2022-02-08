<?php
include_once 'insert.inc.php';
include_once './database/database.php';
?>

<body>
<div class="h-screen font-sans login bg-cover box-shadow">
    <a href="../list/list_layout.php">Go to List</a>
    <br>
    <a href="../dropdown/dropdown_layout.php">Go to Dropdown</a>
    <div class="container mx-auto h-full flex flex-1 justify-center items-center">
        <div class="w-full max-w-lg">
            <div class="leading-loose">
                <form class="max-w-md m-4 p-10 bg-teal-300 bg-opacity-50 rounded shadow-xl logo" action="insert.inc.php" method="post">
                <p class="text-white text-center text-4xl font-bold drop-shadow-2xl py-6 shado">Welcome to the Family</p>
                <div class="mt-2">
                <label class="block text-xl text-left text-white font-semibold py-2 shado" type="text" name="name">Name</label>
                <input class="w-full px-5 text-gray-700 bg-white rounded focus:outline-none focus:bg-amber-50" type="text" name="name">

                <label class="block text-xl text-left text-white font-semibold py-2 shado" type="text" name="lastName">Last Name</label>
                <input class="w-full px-5 text-gray-700 bg-white rounded focus:outline-none focus:bg-amber-50" type="text" name="lastName">

                <label class="block text-xl text-left text-white font-semibold py-2 shado" type="text" name="gender">Gender</label>
                <input class="w-full px-5 text-gray-700 bg-white rounded focus:outline-none focus:bg-amber-50" type="text" name="gender"">
                </div>

                <div class="mt-4 items-center flex justify-between">
                <button class="px-4 py-1 text-black hover:text-amber-200 font-light tracking-wider bg-white hover:bg-purple-500 rounded drop-shadow-2xl" type="submit" name="submit">Insert</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>