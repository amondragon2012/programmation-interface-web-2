// os fait parti du core de Node, il ne requière pas de node_modules 
// Liste des modules natifs : https://nodejs.org/dist/latest-v8.x/docs/api/

const os = require('os');

let totalMemory = os.totalmem(),
    freeMemory = os.freemem();

console.log('Mémoire total : ' + totalMemory);
console.log('Mémoire disponible : ' + freeMemory);