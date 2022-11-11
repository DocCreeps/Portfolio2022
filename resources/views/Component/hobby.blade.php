<section id="hobby">

<h1 class="text-5xl text-center text-gray-700 font-bold mt-20 mb-20 -ml-3 underline">Passe temps</h1>

<div class="content-between grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-5 ">


    <svg class="h-14 w-14 mx-auto text-red-500 hover:animate-bounce"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="2" y="6" width="20" height="12" rx="2" />  <path d="M6 12h4m-2 -2v4" />  <line x1="15" y1="11" x2="15" y2="11.01" />  <line x1="18" y1="13" x2="18" y2="13.01" /></svg>

    <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 mx-auto hover:animate-bounce" viewBox="0 0 20 20" fill="currentColor">
        <path d="M13 7H7v6h6V7z" />
        <path fill-rule="evenodd" d="M7 2a1 1 0 012 0v1h2V2a1 1 0 112 0v1h2a2 2 0 012 2v2h1a1 1 0 110 2h-1v2h1a1 1 0 110 2h-1v2a2 2 0 01-2 2h-2v1a1 1 0 11-2 0v-1H9v1a1 1 0 11-2 0v-1H5a2 2 0 01-2-2v-2H2a1 1 0 110-2h1V9H2a1 1 0 010-2h1V5a2 2 0 012-2h2V2zM5 5h10v10H5V5z" clip-rule="evenodd" />
    </svg>

    <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 mx-auto hover:animate-bounce" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
    </svg>

    <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 mx-auto hover:animate-bounce" viewBox="0 0 20 20" fill="currentColor">
        <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
    </svg>

</div>
</section>
    {{--

     <button  class="content-center hover:animate-bounce" type="button" onclick="toggleModalBook('modal-JV')">
       <!--game-->

    </button>
    <button  class="content-center hover:animate-bounce" type="button" onclick="toggleModalBook('modal-tech')">

        <!--tech-->
    </button>

    <button  class="content-center hover:animate-bounce" type="button" onclick="toggleModalMovie('modal-movie')">

        <!--movie-->
    </button>

     <button  class="content-center hover:animate-bounce" type="button" onclick="toggleModalBook('modal-book')"
        <!--book-->

    </button>
    --}}

    {{--
        <!--MODAL JV-->
        <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-JV">
            <div class="relative w-auto my-6 mx-auto max-w-3xl">
                <!--content-->
                <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                    <!--header-->
                    <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                        <h3 class="text-3xl font-semibold">
                            Jeux vidéo auquel je joue
                        </h3>
                        <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModalJV('modal-JV')">
              <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                ×
              </span>
                        </button>
                    </div>
                    <!--body-->
                    <div class="relative p-6 flex-auto">
                        <ul class="list-disc">
                            <li>TemTem</li>
                            <li>Diablo Immortals</li>
                            <li>Minecraft</li>
                            <li>TemTem</li>
                            <li>Trove</li>
                            <li>Octopath Traveler</li>

                        </ul>
                    </div>
                    <!--footer-->
                    <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                        <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModalJV('modal-JV')">
                            Fermer
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-JV-backdrop"></div>


        <!--MODAL tech-->
        <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-tech">
            <div class="relative w-auto my-6 mx-auto max-w-3xl">
                <!--content-->
                <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                    <!--header-->
                    <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                        <h3 class="text-3xl font-semibold">
                            Dernier technologie sur laquel je me suis renseigner
                        </h3>
                        <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModalTech('modal-tech')">
              <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                ×
              </span>
                        </button>
                    </div>
                    <!--body-->
                    <div class="relative p-6 flex-auto">
                        <ul class="list-disc">

                        </ul>
                    </div>
                    <!--footer-->
                    <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                        <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModalTech('modal-tech')">
                            Fermer
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-tech-backdrop"></div>



        <!--MODAL Movie-->
        <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-movie">
            <div class="relative w-auto my-6 mx-auto max-w-3xl">
                <!--content-->
                <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                    <!--header-->
                    <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                        <h3 class="text-3xl font-semibold">
                            Derniers films/ Série vue
                        </h3>
                        <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModalMovie('modal-movie')">
              <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                ×
              </span>
                        </button>
                    </div>
                    <!--body-->
                    <div class="relative p-6 flex-auto">
                        <ul class="list-disc">
                            <li>Halo - <b><i>Série</i></b></li>

                        </ul>
                    </div>
                    <!--footer-->
                    <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                        <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModalMovie('modal-movie')">
                            Fermer
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-movie-backdrop"></div>


    <!--MODAL BOOK-->
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-book">
        <div class="relative w-auto my-6 mx-auto max-w-3xl">
            <!--content-->
            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <!--header-->
                <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                    <h3 class="text-3xl font-semibold">
                        Derniers livres lue
                    </h3>
                    <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModalBook('modal-book')">
          <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
            ×
          </span>
                    </button>
                </div>
                <!--body-->
                <div class="relative p-6 flex-auto">
                    <ul class="list-disc">
                        <li>L'IA n'existe pas - <b><i>Luc Julia</i></b></li>
                        <li>Memoire vive - <b><i>Edward Snowden </i></b></li>
                        <li>Civilization - <b><i>Laurent Binet</i></b></li>

                    </ul>
                </div>
                <!--footer-->
                <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                    <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModalBook('modal-book')">
                        Fermer
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-book-backdrop"></div>


 --}}



{{--
<script type="text/javascript">
    function toggleModalBook(modalbook){
        document.getElementById(modalbook).classList.toggle("hidden");
        document.getElementById(modalbook + "-backdrop").classList.toggle("hidden");
        document.getElementById(modalbook).classList.toggle("flex");
        document.getElementById(modalbook + "-backdrop").classList.toggle("flex");
    }
    function toggleModalMovie(modalMovie){
        document.getElementById(modalMovie).classList.toggle("hidden");
        document.getElementById(modalMovie + "-backdrop").classList.toggle("hidden");
        document.getElementById(modalMovie).classList.toggle("flex");
        document.getElementById(modalMovie + "-backdrop").classList.toggle("flex");
    }
    function toggleModalTech(modalTech){
        document.getElementById(modalTech).classList.toggle("hidden");
        document.getElementById(modalTech + "-backdrop").classList.toggle("hidden");
        document.getElementById(modalTech).classList.toggle("flex");
        document.getElementById(modalTech + "-backdrop").classList.toggle("flex");
    }
    function toggleModalJV(modalJV){
        document.getElementById(modalJV).classList.toggle("hidden");
        document.getElementById(modalJV + "-backdrop").classList.toggle("hidden");
        document.getElementById(modalJV).classList.toggle("flex");
        document.getElementById(modalJV + "-backdrop").classList.toggle("flex");
    }
</script>

--}}
