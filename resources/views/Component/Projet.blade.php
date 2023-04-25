
<section id="projets" class="projets">
    <h1 class="text-5xl text-center text-gray-700 font-bold mt-20 mb-20 underline titleProjetReveal">Projets</h1>

    <h2 class="text-3xl text-center text-gray-700 font-bold mt-20 mb-20 -ml-3 hover:underline" id="ProjetPerso">Projets Perso</h2>


    <div class="container my-12 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap justify-between -mx-1 lg:-mx-4">

            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/2">

                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg projectPersoReveal">

                    <a href="https://discord.gg/JgQ7tjkXUY" target="_blank" data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <img class="rounded-full mx-auto hover:animate-pulse" src="{{asset('Picture/Projets/logosrv.jpg')}}" alt="logo projet Arkanda" title="Logo Arkanda"/>
                    </a>

                    <header class="flex items-center text-center justify-between leading-tight p-2 md:p-4">
                        <h3 class="text-gray-900 text-xl font-medium mb-2 mx-auto">Arkanda</h3>
                    </header>

                    <footer class=" items-center justify-between text-center leading-none mb-5">
                        <p class="text-gray-700 text-base mb-4">
                            Projet en cours 🛠️<br/> Projet avec des amis qui à pour but la création d'un serveur mini jeux sur le jeu minecraft.
                        </p>
                        {{--                <iframe src="https://discord.com/widget?id=569957594794426378&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe><br/>--}}
                        <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Le Projet</button>

                    </footer>

                </article>
                <!-- END Article -->

            </div>
            <!-- END Column -->

            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/2">

                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg projectPersoReveal">

                    <a href=https://cyberveille.dorianvericel.fr/" target="_blank" data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <img class="rounded-t-lg mx-auto hover:animate-pulse" src="{{asset('Picture/Projets/Cyberveillepng.png')}}" alt="logo projet cyber veille" title="Logo Cyber Veille"/>
                    </a>

                    <header class="flex items-center text-center justify-between leading-tight p-2 md:p-4">
                        <h3 class="text-gray-900 text-xl font-medium mb-2 mx-auto">Cyber Veille</h3>
                    </header>

                    <footer class=" items-center justify-between text-center leading-none mb-5">
                        <p class="text-gray-700 text-base mb-4">
                            Projet en cours 🛠️<br/> Création d'un gestionnaire d'article affin d'avoir une veille technologique structurer et classer en catégories.<br/>
                            <b> Techno utilisé :</b> <br/></p>
                        <div class="grid gap-4 mt-5 mb-5 sm:grid-cols-2 sm:mx-auto lg:mx-auto lg:grid-cols-4">
                            <div class="col-span-1 flex items-center justify-center "><x-si-laravel style="color:#da433b" /></div>
                            <div class="col-span-1 flex items-center justify-center "><x-si-livewire style="color:#fe6dab" /></div>

                            {{--                            <div class="col-span-1 flex items-center justify-center"><x-si-javascript style="color:#f7df1e"/></div>--}}
                            <div class="col-span-1 flex items-center justify-center"><x-si-tailwindcss style="color:#0ea6e6" /></div>
                            <div class="col-span-1 flex items-center justify-center"><x-si-mariadb style="color:#8e44ad" /></div>
                        </div>
                        <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"><a href="http://blog.dorianvericel.fr/">Le Projet</a></button>

                    </footer>

                </article>
                <!-- END Article -->

            </div>
               <!-- END Column --> 
        </div>
    </div>

    <h2 class="text-3xl text-center text-gray-700 font-bold mt-20 mb-20 -ml-3 hover:underline" id="ProjetScolaire">Projets Scolaire</h2>

    <h3 class="text-2xl text-center text-gray-700 font-bold mt-20 mb-20 -ml-3 hover:underline" id="ProjetMaster">Projets Licence et Master</h3>

    <div class="container my-12 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">

            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/2">

                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg projectEtuReveal">


                        <img class="rounded-t-lg mx-auto" src="{{asset('Picture/Projets/Isidrive.png')}}" alt="logo projet isidrive" title="Logo isidrive"/>


                    <header class="flex items-center text-center justify-between leading-tight p-2 md:p-4">
                        <h4 class="text-gray-900 text-xl font-medium mb-2 mx-auto">IsiDrive</h4>
                    </header>

                    <footer class=" items-center justify-between text-center leading-none">
                        <p class="text-gray-700 text-base mb-4">
                            Projet en groupe effectué durant mon master. <br/>
                            Application web et mobile de gestion d'un drive.<br/>
                            <b> Techno utilisé :</b> <br/></p>
                        <div class="grid gap-4 mt-5 mb-5 sm:grid-cols-2 sm:mx-auto lg:mx-auto lg:grid-cols-4">
                            <div class="col-span-1 flex items-center justify-center"><x-si-php style="color:#0ea6e6" /></div>
                            <div class="col-span-1 flex items-center justify-center"><x-si-bootstrap style="color:#8e44ad" /></div>
                            <div class="col-span-1 flex items-center justify-center"><x-si-javascript style="color:#f7df1e" /></div>
                            <div class="col-span-1 flex items-center justify-center"><x-si-mysql style="color:#8e44ad" /></div>
                            <div class="col-span-2 flex items-center justify-center "><x-si-csharp style="color:#9b4993" /></div>
                            {{--<div class="col-span-1 flex items-center justify-center"><x-si-sqlserver style="color:#f7df1e"/></div>--}}
                            <div class="col-span-2 flex items-center justify-center"><x-si-heroku style="color:#5a51a0" /></div>
                        </div>
                        <button class="mr-5 bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-full mb-5">
                            <a href="https://github.com/Isidrive" target="_blank" class="flex justify-center items-center "> Lien Github:  <x-si-github class="h-5 w-5 ml-2"/></a>
                        </button>
                    </footer>

                </article>
                <!-- END Article -->

            </div>
            <!-- END Column -->
            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/2 ">

                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg  projectEtuReveal ">
                        <img class="rounded-t-lg mx-auto" src="{{asset('Picture/Projets/zjd.png')}}" alt="logo projet zjd" title="Logo ZJD"/>
                    <header class="flex items-center text-center justify-between leading-tight p-2 md:p-4">
                        <h4 class="text-gray-900 text-xl font-medium mb-2 mx-auto">ZJD Virtualisation</h4>
                    </header>

                    <footer class=" items-center justify-between text-center leading-none">
                        <p class="text-gray-700 text-base mb-4">
                            Projet en groupes effectué durant mon année de Licence RPI  <br/>
                            Création d'une entreprise qui propose une solution de virtualisation avec docker. <br/>
                            techno : <br/>
                            <b> Techno utilisé :</b> <br/></p>
                        <div class="grid gap-4 mt-5 mb-5 sm:grid-cols-2 sm:mx-auto lg:mx-auto lg:grid-cols-4">
                            <div class="col-span-1 flex items-center justify-center"><x-si-symfony /></div>
                            <div class="col-span-1 flex items-center justify-center"><x-si-bootstrap style="color:#8e44ad" /></div>
                            <div class="col-span-1 flex items-center justify-center"><x-si-javascript style="color:#f7df1e" /></div>
                            <div class="col-span-1 flex items-center justify-center"><x-si-mariadb style="color:#8e44ad" /></div>
                            <div class="col-span-2 flex items-center justify-center "><x-si-docker style="color:#0ea6e6" /></div>
                            <div class="col-span-2 flex items-center justify-center"><x-si-heroku style="color:#5a51a0" /></div>
                        </div>


                    </footer>
                </article>
                <!-- END Article -->
            </div>
            <!-- END Column -->
        </div>
    </div>



    <h3 class="text-2xl text-center text-gray-700 font-bold mt-20 mb-20 -ml-3 hover:underline" id="projetBts">Projets BTS</h3>


    <div class="container my-12 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">


            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/2">

                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg projectEtuReveal">

                    <a href="https://github.com/DocCreeps/GSB-Gestion_Notes_De_Frais" target="_blank" data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <img class="rounded-t-lg mx-auto" src="{{asset('Picture/Projets/gsb.jpg')}}" alt="logo projet GSB" title="Logo GSB"/>
                    </a>

                    <header class="flex items-center text-center justify-between leading-tight p-2 md:p-4">
                        <h4 class="text-gray-900 text-xl font-medium mb-2 mx-auto">GSB</h4>
                    </header>

                    <footer class=" items-center justify-between text-center leading-none">
                        <p class="text-gray-700 text-base mb-4">
                            Création d'une application web de gestion des notes de frais.<br/>
                            <b> Techno utilisé :</b> <br/></p>
                        <div class="grid gap-4 mt-5 mb-5 sm:grid-cols-2 sm:mx-auto lg:mx-auto lg:grid-cols-3">
                            <div class="col-span-1 flex items-center justify-center"><x-si-php style="color:#0ea6e6" /></div>
                            <div class="col-span-1 flex items-center justify-center"><x-si-javascript style="color:#f7df1e" /></div>
                            <div class="col-span-1 flex items-center justify-center"><x-si-mysql style="color:#8e44ad" /></div>
                        </div>
                        <button class="mr-5 bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-full mb-5">
                            <a href="https://github.com/DocCreeps/GSB-Gestion_Notes_De_Frais" target="_blank" class="flex justify-center items-center "> Lien Github:  <x-si-github class="h-5 w-5 ml-2"/></a>
                        </button>
                    </footer>

                </article>
                <!-- END Article -->

            </div>
            <!-- END Column -->

            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/2">

                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg projectEtuReveal">

                    <a href="https://github.com/DocCreeps/roulette" target="_blank" data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <img class="rounded-t-lg mx-auto" src="{{asset('Picture/Projets/roulette.jpg')}}" alt="logo projet roulette" title="Logo Roulette"/>
                    </a>

                    <header class="flex items-center text-center justify-between leading-tight p-2 md:p-4">
                        <h4 class="text-gray-900 text-xl font-medium mb-2 mx-auto">Roulette</h4>
                    </header>

                    <footer class=" items-center justify-between text-center leading-none">
                        <p class="text-gray-700 text-center text-base mb-4">
                            Création d'une application web du jeux de la roulette. <br/>
                            <b> Techno utilisé :</b> <br/></p>
                        <div class="grid gap-4 mt-5 mb-5 sm:grid-cols-2 sm:mx-auto lg:mx-auto lg:grid-cols-3">
                            <div class="col-span-1 flex items-center justify-center"><x-si-php style="color:#0ea6e6" /></div>
                            <div class="col-span-1 flex items-center justify-center"><x-si-javascript style="color:#f7df1e" /></div>
                            <div class="col-span-1 flex items-center justify-center"><x-si-mysql style="color:#8e44ad" /></div>
                        </div>
                        <button class="mr-5 bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-full mb-5">
                            <a href="https://github.com/DocCreeps/roulette" target="_blank" class="flex justify-center items-center "> Lien Github:  <x-si-github class="h-5 w-5 ml-2"/></a>
                        </button>

                    </footer>

                </article>
                <!-- END Article -->

            </div>
            <!-- END Column -->
            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/2">

                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg projectEtuReveal">

                    <a href="https://github.com/DocCreeps/GSB-Gestion_Notes_De_Frais" target="_blank" data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <img class="rounded-t-lg mx-auto" src="{{asset('Picture/Projets/PC-RB.png')}}" alt="logo projet PC CHEN" title="Logo PC CHEN"/>
                    </a>

                    <header class="flex items-center text-center justify-between leading-tight p-2 md:p-4">
                        <h4 class="text-gray-900 text-xl font-medium mb-2 mx-auto">PC CHEN</h4>
                    </header>

                    <footer class=" items-center justify-between text-center leading-none">
                        <p class="text-gray-700 text-base mb-4">
                            Application ayant pour but de recrée le pcChen du jeux vidéo pokemon. Chaques dresseur a le droit a 6 pokemon sur lui et peut poser les autres dans des boites qu'ils peut visualiser et gerer (transfert de pokemon...)<br/>
                            <b> Techno utilisé :</b> <br/></p>
                        <div class="grid gap-4 mt-5 mb-5 sm:grid-cols-2 sm:mx-auto lg:mx-auto lg:grid-cols-4">
                            <div class="col-span-2 flex items-center justify-center"><x-fab-java style="color:#f89820" /></div>
                            <div class="col-span-2 flex items-center justify-center"><x-si-mysql style="color:#8e44ad" /></div>
                        </div>
                        <button class="mr-5 bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-full mb-5">
                            <a href="https://github.com/DocCreeps/PcChen" target="_blank" class="flex justify-center items-center "> Lien Github:  <x-si-github class="h-5 w-5 ml-2"/></a>
                        </button>
                    </footer>

                </article>
                <!-- END Article -->

            </div>
            <!-- END Column -->
        </div>
    </div>
</section>
<script src="{{ asset('/js/app.js') }}"></script>
@bukScripts(true)
