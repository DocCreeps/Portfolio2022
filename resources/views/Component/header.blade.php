<header>
        <nav class="sticky top-0 z-50 bg-white shadow-lg">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex justify-between">
                    <div class="flex space-x-7">
                        <div>
                            <!-- Website Logo -->
                            <a href="#" class="flex items-center py-4 px-2">
                                <span class="font-semibold text-gray-500 text-lg">Dorian Vericel</span>
                            </a>
                        </div>
                        <!-- Primary Navbar items -->
                        <div class="hidden md:flex items-center space-x-1">
                            <a href="" class="py-4 px-2 text-green-500 border-b-4 border-green-500 font-semibold ">A Propos De Moi</a>
                            <a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Experiences Professionnelle</a>
                            <a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Formations</a>
                            <a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Compétences</a>
                            <a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Projets</a>
                            <a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Contact</a>
                        </div>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="md:hidden flex items-center">
                        <button class="outline-none mobile-menu-button">
                            <svg class=" w-6 h-6 text-gray-500 hover:text-green-500 "
                                 x-show="!showMenu"
                                 fill="none"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 stroke-width="2"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor"
                            >
                                <path d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- mobile menu -->
            <div class="hidden mobile-menu">
                <ul class="">
                    <li class="active"><a href="index.html" class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">A Propos De Moi</a></li>
                    <li><a href="#services" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Experiences Professionnelle</a></li>
                    <li><a href="#services" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Formations</a></li>
                    <li><a href="#about" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Compétences</a></li>
                    <li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Projets</a></li>
                    <li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Contact</a></li>
                </ul>
            </div>
            <script>
                const btn = document.querySelector("button.mobile-menu-button");
                const menu = document.querySelector(".mobile-menu");

                btn.addEventListener("click", () => {
                    menu.classList.toggle("hidden");
                });
            </script>
        </nav>

        <div class="relative overflow-hidden bg-no-repeat bg-cover" style="background-position: 50%; background-image: url('public/Picture/headerBackground.png'); height: 750px;"></div>

        <div class="container mx-auto px-6 md:px-12 xl:px-32">
            <div class="text-center text-gray-800">
                <div class="block rounded-lg shadow-lg px-6 py-12 md:py-16 md:px-12" style="margin-top: -170px; background: hsla(0, 0%, 100%, 0.7); backdrop-filter: blur(30px);">
                    <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12">Portfolio Dorian VERICEL <br /><span class="text-blue-600">Développeur</span></h1>
                 </div>
            </div>
        </div>
</header>
