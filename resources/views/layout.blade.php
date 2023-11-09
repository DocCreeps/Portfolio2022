@include('Component.head')

@include('Component.Hero')

@include('Component.Competence')
@include('Component.Projet')
{{--@include('Component.Formation')--}}


@yield('content')


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

