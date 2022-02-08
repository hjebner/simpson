<?php
include_once 'dropdown.inc.php';
?>

<body>
<div class="h-screen font-sans login bg-cover box-shadow">
    <div class="container mx-auto h-full flex flex-1 justify-center items-center">
        <div class="w-full max-w-lg">
            <div class="leading-loose">


                <form class="max-w-md m-4 p-10 bg-purple-500 bg-opacity-50 rounded shadow-xl logo" action="dropdown.inc.php" method="get">
                        <p class="text-amber-300 text-center text-4xl font-bold drop-shadow-2xl py-6 shado">Simpson Family</p>
                            <label class="block text-xl text-center text-amber-300 font-semibold py-2 shado" for="familie">Looking for a member?</label>
                                <select name="name" class="w-full px-5 py-2 text-left text-gray-400 rounded bg-purple-200">
                                    <?php
                                    foreach ($list as $member){
                                        echo "<option value=' . $member[f_id] . '>";
                                        echo $member['f_firstName'] . " " . $member['f_lastName'];
                                        echo "\n";
                                        echo  "</option>";
                                    }
                                    ?>
                                </select>
                                <button class="px-4 py-1 mt-4 text-purple-500 hover:text-amber-200 font-light tracking-wider bg-amber-200 hover:bg-purple-500 rounded drop-shadow-2xl"
                                        type="submit">Check it!</button>
                        <div class="text-center">
                            <a href="/Simpson/list/list_layout.php" class="inline-block right-0 align-baseline text-amber-200 hover:text-amber-50 font-medium text-xl tracking-wider mt-6">
                                Look our Family
                            </a>
                        </div>
                    </div>
        </div>
    </div>
</div>
</body>