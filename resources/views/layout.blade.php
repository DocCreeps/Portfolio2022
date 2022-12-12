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
@include('Component.ContactForm')
@include('Component.footer')


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

