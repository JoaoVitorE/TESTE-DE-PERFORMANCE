const fs = require('fs');

console.time('#time');

const texto = "Teste Mauro";

fs.writeFileSync('texto1.txt', texto, (err) => {
    if (err) throw err;
    console.log('O arquivo foi criado');
});

console.timeEnd('#time');