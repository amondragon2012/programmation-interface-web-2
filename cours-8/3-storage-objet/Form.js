export default class Form {
    constructor(el) {
        this._el = el;
        this._elInputPrenom = this._el.prenom;
        this._elInputNom = this._el.nom;
        this._elSubmit = this._el.querySelector('[data-js-submit]');
        this._elShow = this._el.querySelector('[data-js-show]');

        this._elInfos = document.querySelector('[data-js-infos]');

        this.init();
    }


    init() {
        this._elSubmit.addEventListener('click', function(e) {
            e.preventDefault();
            //if (validation.isValid) {
            this.ajouterNouvelObjetInfo();
        }.bind(this));

        this._elShow.addEventListener('click', function(e) {
            e.preventDefault();
            this.afficherInfos();
        }.bind(this));
    }


    ajouterNouvelObjetInfo() {

        let tableauObjets;

        if (!sessionStorage.getItem('info')) tableauObjets = [];
        else {
            // Si le contenu du session est un array
            if (Array.isArray(JSON.parse(sessionStorage.info))) tableauObjets = JSON.parse(sessionStorage.getItem('info'));
            else {
                tableauObjets = [];
                tableauObjets.push(JSON.parse(sessionStorage.getItem('info')));
            }
        }

        let info = {
            'prenom': this._elInputPrenom.value,
            'nom': this._elInputNom.value
        };

        tableauObjets.push(info);

        console.log(tableauObjets);
    
        sessionStorage.setItem('info', JSON.stringify(tableauObjets));

    }


    afficherInfos() {

        if (sessionStorage.getItem('info')) {

            let data = JSON.parse(sessionStorage.info);

            console.log(data)
            
            let listeInfo = '<ul>';
            
            /* for...in */
            for (const level in data) {
                listeInfo += `<li>${data[level].prenom} ${data[level].nom}</li>`;
            }

            /* map
            data.map(obj => {
                listeInfo += `<li>${obj.prenom} ${obj.nom}</li>`;
            });
            */
            

            listeInfo += '</ul>';

            this._elInfos.innerHTML = listeInfo;

        } else {
            this._elInfos.innerHTML = `<p>Le sessionStorage 'info' est vide.</p>`;
        }
    }
}