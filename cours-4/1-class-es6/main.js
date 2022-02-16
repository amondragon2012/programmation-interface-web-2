(function() {

    let livre1 = new Livre('Billy', 'Bob', 300, 1),
        livre2 = new Livre('Jane', 'Davis', 400);

    console.log(livre1._auteurPrenom);
    console.log(livre1._auteurNom);
    console.log(livre1._nombrePage);
    console.log(livre1._pageActuelle);
    console.log(livre1.decrire());
    console.log(livre2.decrire());
    
    livre1.avancePage();
    livre1.avancePage();
    livre1.avancePage();
    livre1.avancePage();
    livre1.avancePage();
    console.log(livre1.decrire());
    livre1.reculePage();
    console.log(livre1.decrire());

    
    console.log(livre2.decrire());

})();