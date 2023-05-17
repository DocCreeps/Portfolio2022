@include('Component.head')
@include('Component.header')
@include('Component.About')
@include('Component.Competence')
@include('Component.Projet')
@include('Component.Formation')
{{--@include('Component.Experience')--}}

@yield('content')


{{--<div id = "main" class = "row" >--}}
{{--    @yield('content')--}}
{{--</div>--}}
@include('Component.hobby')
<canvas id="canvas3d"></canvas>
<a class="logo" href="https://spline.design"></a>
@include('Component.ContactForm')

@include('Component.footer')

<!-- Import maps polyfill -->
<!-- Remove this when import maps will be widely supported -->
<script async src="https://unpkg.com/es-module-shims@1.3.6/dist/es-module-shims.js"></script>
<script type="importmap">
      {
        "imports": {
          "@splinetool/runtime": "https://unpkg.com/@splinetool/runtime@0.9.336/build/runtime.js"
        }
      }
    </script>
<script type="module" src="/public/js/3dFile.js"></script>
<script>
    //konami code easter egg
    //Haut, haut, bas, bas, gauche, droite, gauche, droite, B, A
    const keySequence = [];
    let konamiString = '';
    const konamiCode = [
        'ArrowUp',
        'ArrowUp',
        'ArrowDown',
        'ArrowDown',
        'ArrowLeft',
        'ArrowRight',
        'ArrowLeft',
        'ArrowRight',
        'b',
        'a'
    ];

    document.addEventListener('keyup', function(e) {
        keySequence.push(e.key);
        keySequence.splice(
            -konamiCode.length - 1,
            keySequence.length - konamiCode.length
        );
        konamiString = konamiCode.join('');

        if (keySequence.join('').includes(konamiString)) {
            alert('Le petit easter egg des gamers 😎');
        }
    });

</script>

