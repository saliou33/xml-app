
<body class="bg-sky-600">
    <div class="container mx-auto">
        <!-- heading -->
        <h1 class="text-3xl text-center text-sky-100 hover:text-sky-200 mt-2">Examen</h1>

        <!-- exa,en -->
        <div class="grid md:grid-cols-2 sm:grid-cols-1 gap-10 mt-10">
            <?php foreach($data as $examen) { ?>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <!--  code -->
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Code</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500"><?=$examen->attributes()?></p>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                    <!-- titre -->
                    <div class="bg-gray-50 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Titre</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?=$examen->titre?></dd>
                    </div>
                    <!-- date -->
                    <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Date</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <?=$examen->date->attributes()["mois"].", ".$examen->date->attributes()["année"]?>
                        </dd>
                    </div>
                    <!-- langue -->
                    <div class="bg-gray-50 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Questions</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 upppercase divide-y-2">
                            <?php foreach($examen->questions->question as $question) { ?>
                                <div>
                                    <?= $question?>
                                    <?php foreach($question->partie as $partie) {?>
                                        <div><?=$partie?></div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </dd>
                    </div>
                    </dl>
                </div>
            </div>
            <?php } ?>
        </div>
        
        <a href="home">
            <div class="back rounded-full ring ring-2 ring-slate-400 bg-opacity-75 bg-gray-800 hover:bg-gray-900 w-fit p-6">
                <img src="assets/img/back.png" alt="Go Back Home" class="w-[3rem] h-[3rem]">
            </div>
        </a>
    </div>
</body>