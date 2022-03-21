class App {
    constructor() {
        this._elMemberInfos = document.querySelector('[data-js-member-infos]');

        // Lie le contexte de la méthode exportée getMemberInfo au this de l'instance de la classe
        this.getMemberInfo = this.getMemberInfo.bind(this);
    }


    getMemberInfo(id) {

        fetch('client-serveur/requetesAsync.php', {
            method: 'post',
            headers: {
                'Content-type': 'application/x-www-form-urlencoded; charset=UTF-8'
            },
            body: `action=getMemberInfos&id=${id}`
        })
            .then(function(response) {
                if (response.ok) return response.json();
                else throw new Error('La réponse n\'est pas OK');
            }.bind(this))
            .then(function(data) {
                let msg = `
                            <div class="member" data-js-member="${data[0].id}">
                                <p><small>Id : </small>${data[0].id}</p>
                                <p><small>Prénom : </small><span data-js-member-info-value>${data[0].prenom}</span></p>
                                <p><small>Nom : </small><span data-js-member-info-value>${data[0].nom}</span></p>
                                <p><small>Username : </small><span data-js-member-info-value>${data[0].username}</span></p>
                                <p><small>Password : </small><span data-js-member-info-value>${data[0].password}</span></p>
                            </div>
                `;

                this._elMemberInfos.innerHTML = msg;
            }.bind(this))
            .catch(function(error) {
                console.log(`Il y a eu un problème avec l'opération fetch: ${error.message}`);
            }.bind(this));
    };
}

export const { getMemberInfo } = new App();