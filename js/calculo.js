console.time('#time');

var tabuada = 5

console.log(`Tabuada do ` + tabuada);

for (let i = 1; i <= 10; i++) {
    console.log(`${tabuada} vezes ${i} é ${tabuada * i}`);
}

console.timeEnd('#time');