import ScrollReveal from 'scrollreveal'


ScrollReveal().reveal('.aboutreveal', {delay : 250, distance: '120px',origin: 'bottom', duration: 2000});
ScrollReveal().reveal('.profilReveal', {delay : 100, distance: '1200px',origin: 'left', duration: 5000});

ScrollReveal().reveal('.titleExperienceReveal', {delay : 70, duration: 2000,scale: 0.5 });
ScrollReveal().reveal('.titleFormationReveal', {delay : 70, duration: 2000,scale: 0.5 });
ScrollReveal().reveal('.titleProjetReveal', {delay : 70, duration: 2000,scale: 0.5 });
ScrollReveal().reveal('.titleCompetReveal', {delay : 70, duration: 2000,scale: 0.5 });
ScrollReveal().reveal('.titleHobby', {delay : 70, duration: 2000,scale: 0.5 });


ScrollReveal().reveal('.xpReveal', {delay : 50, distance: '120px',origin: 'bottom', duration: 1000, interval: 500 });
ScrollReveal().reveal('.formationReveal', {delay : 50, distance: '120px',origin: 'top', duration: 1000, interval: 500 });


ScrollReveal().reveal('.projectPersoReveal', {delay : 50, distance: '200px',   rotate: {
        x: 50,
        z: 90
    }, duration: 1000, interval: 500 });
ScrollReveal().reveal('.projectEtuReveal', {delay : 50, distance: '120px',  rotate: {
        x: 50,
        z: 90
    }, duration: 1000, interval: 500 });

ScrollReveal().reveal('.langageReveal', {delay : 50, distance: '120px',origin: 'right', duration: 2500, interval: 500 });
ScrollReveal().reveal('.frameworkReveal', {delay : 50, distance: '120px',origin: 'left', duration: 2500, interval: 500 });
ScrollReveal().reveal('.osReveal', {delay : 50, distance: '120px',origin: 'bottom', duration: 2500, interval: 500 });
ScrollReveal().reveal('.otherReveal', {delay : 50, distance: '120px',origin: 'top', duration: 2500, interval: 500 });

ScrollReveal().reveal('.contactReveal', {delay : 250, distance: '120px',origin: 'top', duration: 1000, interval: 500 });

const scroll = new SmoothScroll('a[href*="#"]', {
    speed: 500,
    speedAsDuration: true
});
