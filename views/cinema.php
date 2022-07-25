<body class="bg-teal-600">
    <div class="container mx-auto">
        <!-- heading -->
        <h1 class="text-3xl text-center text-teal-50 hover:text-teal-200 mt-2">Cinema</h1>

        <!-- films -->
        <div class="grid md:grid-cols-2 sm:grid-cols-1 gap-10 mt-10">
            <?php foreach($data as $node) { $film = $node->film; ?>
            <div class="bg-white shadow overflow-hidden  sm:rounded-lg">
                <!--  titre -->
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Titre</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500"><?=$film->titre?></p>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                    <!-- genre -->
                    <div class="bg-gray-50 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Genre</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?=$film->genre?></dd>
                    </div>
                    <!-- realisateur -->
                    <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Réalisateur</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?=$film->realisateur?></dd>
                    </div>
                    <!-- langue -->
                    <div class="bg-gray-50 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">langue</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 upppercase"><?= $film->langue ?></dd>
                    </div>
                    <!-- auteurs -->
                    <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Acteurs</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">Avec: 
                            <?php foreach($film->acteurs->acteur as $acteur) { 
                                echo  $acteur.", "; } ?>
                        </dd>
                    </div>
                    <!--annee -->
                    <div class="bg-gray-50 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Année</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?= $film->annee?></dd>
                    </div>
                    <!-- intrigue -->
                    <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Intrigue</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?= $film->intrigue?></dd>
                    </div>
                    <!-- notes -->
                    <div class="bg-gray-50 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Notes</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                            <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                <div class="w-0 flex-1 flex items-center">
                                    <span class="ml-2 flex-1 w-0 truncate">Presse</span>
                                </div>
                                <div class="ml-4 flex-shrink-0">
                                    <span class="font-medium text-stone-600 hover:text-indigo-500"> <?= $film->notes->notePresse?> </span>
                                </div>
                                </li>
                                <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                <div class="w-0 flex-1 flex items-center">
                                    <span class="ml-2 flex-1 w-0 truncate">Spectateurs</span>
                                </div>
                                <div class="ml-4 flex-shrink-0">
                                    <span" class="font-medium text-stone-600 hover:text-indigo-500"> <?= $film->notes->notePresse ?> </span>
                                </div>
                            </li>
                        </ul>
                        </dd>
                    </div>
                    <!-- horaires -->
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