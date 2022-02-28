export default class Voiture {
    constructor(marque, modele, couleur, annee, prix) {
        this._marque = marque;
        this._modele = modele;
        this._couleur = couleur;
        this._annee = annee;
        this._prix = prix;
    }


    decrire() {

        // Mime un élément <div>
        document.body.innerHTML = '<div data-js-description></div>';

        let elResult = document.querySelector('[data-js-description]'),
            domString = `<p>Cette voiture de marque ${this._marque} est de modèle ${this._modele}, de couleur ${this._couleur}, a été fabriqué en ${this._annee} et coûte ${this._prix}$.</p>`;
            
        elResult.insertAdjacentHTML('beforeend', domString);
    }


    get marque() {
        return this._marque;
    }
}