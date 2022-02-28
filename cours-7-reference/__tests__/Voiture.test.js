import Voiture from '../scripts/Voiture';


describe('Classe Voiture', function() {
    
    let toyotaCorolla = new Voiture('Toyota', 'Corolla', 'grise', '1995', '2500');


    test('Retourne la marque', function() {
        expect(toyotaCorolla.marque).toBe('Toyota');
    });


    test('Retourne la description de cette voiture', function() {
        toyotaCorolla.decrire();
        expect(document.querySelector('[data-js-description]').textContent)
            .toBe('Cette voiture de marque Toyota est de modèle Corolla, de couleur grise, a été fabriqué en 1995 et coûte 2500$.');
    });
});