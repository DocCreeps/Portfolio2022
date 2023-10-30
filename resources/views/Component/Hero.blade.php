
<header>
    <nav class="border-b fixed top-0 z-50 w-full bg-white shadow-lg">
        <div x-data="{showMenu : false}" class="container max-w-screen-lg mx-auto flex justify-between h-14">
            <!-- Brand-->
            <a href="/" class="flex items-center cursor-pointer hover:bg-purple-50 px-2 ml-3">
                <!-- Logo-->
                <img src="{{asset('Picture/avatar.jpg')}}" class="h-4/5">
                <div class="text-gray-700 font-semibold ml-2">VERICEL Dorian</div>
            </a>
            <!-- Navbar Toggle Button -->
            <button @click="showMenu = !showMenu" class="block md:hidden text-gray-700 p-2 rounded hover:border focus:border focus:bg-gray-100 my-2 mr-5" type="button" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
            <!-- Nav Links-->
            <ul class="md:flex text-gray-700 text-base mr-3 origin-top"
                :class="{ 'block absolute top-14 border-b bg-white w-full p-2': showMenu, 'hidden': !showMenu}"
                id="navbar-main" x-cloak>
                <li class="px-3 cursor-pointer hover:bg-purple-50 flex items-center hover:text-gray-800" :class="showMenu && 'py-1'">
                    <a href="#competences">Compétences</a>
                </li>
                <li class="px-3 cursor-pointer hover:bg-purple-50 flex items-center hover:text-gray-800" :class="showMenu && 'py-1'">
                    <a href="#projets">Projets</a>
                </li>
                <li class="px-3 cursor-pointer hover:bg-purple-50 flex items-center hover:text-gray-800" :class="showMenu && 'py-1'">
                    <a href="#formation">Formations</a>
                </li>
                <li class="px-3 cursor-pointer hover:bg-purple-50 flex items-center hover:text-gray-800" :class="showMenu && 'py-1'">
                    <a href="#hobby">Hobby</a>
                </li>
                <li class="px-3 cursor-pointer hover:bg-purple-50 flex items-center hover:text-gray-800" :class="showMenu && 'py-1'">
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero top -->
    <div>
        <!-- Container -->
        <div class="mx-auto max-w-7xl px-5 py-16 md:px-10 md:py-24 lg:py-32 ">
            <!-- Title -->
            <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12">Portfolio VERICEL Dorian <br /><span class="text-blue-600"> </span><span class="bg-gradient-to-r from-blue-600 to-orange-600 bg-clip-text text-transparent" id="typed-text"></span>
                <span class="cursor" style= "display: inline-block;margin-left: 0.1rem;width: 4px;animation: blink 1s infinite; background-color: blue;">&nbsp;</span></h1>
        </div>

    </div>
    <!-- Hero bottom -->
    <div class="mx-auto max-w-7xl px-5 py-12 md:px-10 md:py-16 lg:py-20">
        <!-- Component -->
        <div class="relative flex max-w-7xl flex-col gap-4 lg:flex-row lg:justify-end">
            <div class="max-w-xl lg:mr-[500px] lg:max-w-lg">
                <!-- Title -->
                <h3 class="text-2xl font-bold md:text-3xl">Introduction</h3>
                <!-- Divider -->
                <div class="my-6 w-16 [border-top:2px_solid_rgb(0,_0,_0)]"></div>
                <p class="text-lg"> Hey, je suis un développeur Backend travaillant principalement avec l'environnement Laravel (LiveWire, AlpineJs, Filament, Fortify, etc.). Grâce à mes 3 années d'alternance, j'ai acquis une précieuse expérience dans la création de solutions et l'analyse des besoins fonctionnels. J'attache également une grande importance à la protection des données et à la sécurité des systèmes que je développe. En explorant mon portfolio, vous découvrirez mon parcours, mes compétences techniques et les projets passionnants sur lesquels j'ai travaillé. N'hésitez pas à explorer et à me contacter si vous avez des questions ou des idées de collaboration!</p>
            </div>
            <!-- Image -->
            <img src="{{asset('Picture/avatar.jpg')}}" alt="" class="relative bottom-0 right-0 mt-12 w-[480px] object-cover lg:absolute lg:mt-0 lg:h-[480px] rounded-xl shadow-2xl" />
        </div>
    </div>
</header>

<script>
    const typedTextSpan = document.querySelector("#typed-text");
    const cursorSpan = document.querySelector(".cursor");

    const textArray = ["Développeur Web PHP Laravel"];
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
