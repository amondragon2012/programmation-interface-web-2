class Bonjour {
    constructor() {
        this._bonjour = 'Bonjour !';
    }

    static direBonjour() {
        return 'Bonjour !';
        //return this._bonjour;        // => undefined
    }
}