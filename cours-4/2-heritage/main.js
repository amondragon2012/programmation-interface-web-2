(function() {

    let autoOccasion = new Occasion('VUS', 'grise', 'Audi', 30000, 28000),
        autoOccasion2 = new Occasion('Berline', 'blanche', 'Toyota', 45000, 30000);

    // De la classe parent Auto
    console.log(autoOccasion._type);
    console.log(autoOccasion._couleur);
    console.log(autoOccasion._marque);
    console.log(autoOccasion._nbRoues);

    console.log(autoOccasion.decrire());
    
    autoOccasion._type = 'Sport';
    console.log(autoOccasion._type);

    console.log(autoOccasion.decrire());
    

    // De la classe Occasion
    console.log(autoOccasion._valeur);
    console.log(autoOccasion._prix);
    console.log(autoOccasion.calculeDifference());


    console.log(autoOccasion2._valeur);
    console.log(autoOccasion2._prix);
    console.log(autoOccasion2.decrire());
    console.log(autoOccasion2.calculeDifference());

})();