import { Application } from '@splinetool/runtime';
console.log('Chargement du modèle 3D Spine...');
const canvas = document.getElementById('canvas3d');
const app = new Application(canvas);
app.load('https://prod.spline.design/muScoFV8WvRgVX0A/scene.splinecode')
    .then(() => {
        // Le modèle 3D Spine a été chargé avec succès
        // Vous pouvez ajouter des manipulations supplémentaires ici, si nécessaire
    })
    .catch((error) => {
        // Une erreur s'est produite lors du chargement du modèle
        console.error('Erreur lors du chargement du modèle 3D Spine :', error);
    });
