(function() {

    let autoOccasion = new Occasion('VUS', 'gris', 'Audi', 30000, 28000);

    // Getter
    console.log(autoOccasion.marque);
    console.log(autoOccasion.difference);
    
    // Setter
    autoOccasion.marque = 'Mazda';
    console.log(autoOccasion.marque);
    autoOccasion.difference = 3000;
    console.log(autoOccasion.difference);

})();