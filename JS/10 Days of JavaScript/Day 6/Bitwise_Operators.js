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
function getMaxLessThanK(n,k)
{
    var a = [];
    for(var i=1;i<k;i++)
    {
        for(var x=i+1;x<=n;x++)
        {
            a.push(i&x);
        }
    }
    var ans=0;
    for(var i=0;i<a.length ; i++)
    {
        if(a[i]<k && a[i]>ans)ans=a[i];
    }
    return ans;
}

function main() {
    const q = +(readLine());

    for (let i = 0; i < q; i++) {
        const [n, k] = readLine().split(' ').map(Number);

        console.log(getMaxLessThanK(n, k));
    }
}