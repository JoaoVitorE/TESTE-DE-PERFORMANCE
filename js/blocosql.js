const mysql = require('mysql');
console.time('#time');

let query = 'INSERT INTO js(placa, nome_dono) VALUES ';

for (i = 0; i < 100; i++) {
    query += `("test ${i}", "Joao ${i}"),`;
}

query = query.substring(0, query.length - 1);

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
        con.query(query, function(err, result) {
            if (err) throw err;
        });
    } finally {
        con.end();
    }
});

console.timeEnd('#time');