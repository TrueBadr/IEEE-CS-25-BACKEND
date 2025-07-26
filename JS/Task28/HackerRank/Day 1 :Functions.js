'use strict';

process.stdin.resume();
process.stdin.setEncoding('utf-8');

let inputString = '';
let currentLine = 0;

process.stdin.on('data', inputStdin => {
    inputString += inputStdin;
});

process.stdin.on('end', _ => {
    inputString = inputString.trim().split('\n').map(string => {
        return string.trim();
    });
    
    main();    
});

function readLine() {
    return inputString[currentLine++];
}

function factorial(num)
{
    var ans = 1;
    while(num!=0)
    {
        ans*=num;
        num--;
    }
    return ans;
}


function main() {
    const n = +(readLine());
    
    console.log(factorial(n));
}
