<header>

    <nav  class="fixed top-0 z-50 w-full bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <a href="#" class="flex items-center py-4 px-2">
                            <span class="font-semibold text-gray-500 text-lg ">Dorian Vericel</span>
                        </a>
                    </div>

                    <div class="hidden md:flex items-center space-x-1">
                        <ul class="navbar-nav mr-auto justify-center items-center lg:flex">
                        <li class="nav-item">
                        <a href="#about" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">A Propos De Moi</a>
                        </li>
                            <li class="nav-item">
                                <a href="#competences" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Compétences</a>
                            </li>
                            <li class="nav-item">
                                <a href="#projets" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Projets</a>
                            </li>
                        <li class="nav-item">
                        <a href="#formation" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Formations</a>
                        </li>


                            <li class="nav-item">
                                <a href="#hobby" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Passe Temps</a>
                            </li>
                        <li class="nav-item">
                        <a href="#contact" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Contact</a>
                        </li>
                        </ul>
                    </div>
                </div>


                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button" name="burgermenu">
                        <svg title="burgermenu" class=" w-6 h-6 text-gray-500 hover:text-green-500 "
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
                <li><a href="#about" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">A Propos De Moi</a></li>
                <li><a href="#xpPro" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Experiences Professionnelle</a></li>
                <li><a href="#formation" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Formations</a></li>
                <li><a href="#competences" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Compétences</a>
                </li>
                <li><a href="#projets" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Projets</a></li>
                <li><a href="#hobby" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Passe Temps</a></li>
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

    <div class="p-12 text-center relative overflow-hidden bg-no-repeat bg-cover bg-center h-screen lg:h-screen" style="background-image: url({{asset('Picture/headerBackground.png')}})">
        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.75)">
            <div class="flex justify-center items-center h-full">

            </div>

        </div>

    </div>
    <div class="container mx-auto px-6 md:px-12 xl:px-30">
        <div class="text-center text-gray-800">
            <div class="block rounded-lg shadow-lg px-6 py-12 md:py-16 md:px-12" style="margin-top: -170px; background: hsla(0, 0%, 100%, 0.7); backdrop-filter: blur(30px);">
                <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12">Portfolio Dorian VERICEL <br /><span class="text-blue-600"> </span><span class="text-blue-600" id="typed-text"></span><span class="cursor" style= "display: inline-block;
                                                                                                                                                                                                                                   margin-left: 0.1rem;
                                                                                                                                                                                                                                   width: 4px;
                                                                                                                                                                                                                                   animation: blink 1s infinite; background-color: blue;">&nbsp;</span></h1>
            </div>
        </div>
    </div>
</header>

<script>
    const typedTextSpan = document.querySelector("#typed-text");
    const cursorSpan = document.querySelector(".cursor");

    const textArray = ["Développeur Web"];
    const typingDelay = 200;
    const erasingDelay = 175;
    const newTextDelay = 2000; // Delay between current and next text
    let textArrayIndex = 0;
    let charIndex = 0;
    function type() {
        if (charIndex < textArray[textArrayIndex].length) {
            if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
            typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
            charIndex++;
            setTimeout(type, typingDelay);
        }
        else {
            cursorSpan.classList.remove("typing");
            setTimeout(erase, newTextDelay);
        }
    }

    function erase() {
        if (charIndex > 0) {
            if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
            typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);
            charIndex--;
            setTimeout(erase, erasingDelay);
        }
        else {
            cursorSpan.classList.remove("typing");
            textArrayIndex++;
            if(textArrayIndex>=textArray.length) textArrayIndex=0;
            setTimeout(type, typingDelay + 1100);
        }
    }

    document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
        if(textArray.length) setTimeout(type, newTextDelay + 250);
    });
</script>
<style>

    .container p span.cursor {
        animation: blink 1s infinite;
    }
    .container p span.cursor.typing {
        animation: none;
    }

    @keyframes blink {
        0%  { background-color: #000; }
        49% { background-color: #000; }
        50% { background-color: transparent; }
        99% { background-color: transparent; }
        100%  { background-color: #000; }
    }

</style>

