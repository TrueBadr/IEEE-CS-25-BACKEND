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

/*
 * Complete the reverseString function
 * Use console.log() to print to stdout.
 */
function reverseString(s)
{
    try
    {
        var str1 = s.split("");
        var str2 = str1.reverse();
        var str3 = str2.join("");
        console.log(str3);
    }
    catch (error)
    {
        console.log(error.message);
        console.log(s);
    }

}


function main() {
    const s = eval(readLine());

    reverseString(s);
}