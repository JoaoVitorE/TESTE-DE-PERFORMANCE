const mysql = require('mysql');
console.time('#time');

var con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "testemauro200422"
});

con.connect(function(err) {
    if (err) throw err;
    console.log("Connected!");
    try {
        for (i = 0; i < 100; i++) {
            let query = `INSERT INTO js(placa , nome_dono) VALUES('test ${i}', 'Joao ${i}')`
            con.query(query, function(err, result) {
                if (err) throw err;
            });
        }
    } finally {
        con.end();
    }
});

console.timeEnd('#time');