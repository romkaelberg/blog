var arr = [1,24,17,8,0];
// for (ahah=0;ahah<a.length;ahah++) {
//     for (i=0;i<a.length;i++) {
//         if (a[i] < a[i+1]) {
//             b = a[i+1];
//             a[i+1]=a[i];
//             a[i]=b;
//         }
//     }
// }
// console.log(a);





// function abc (a,j) {
//     for (i = 0; i < a.length; i++) {
//         if (a[i] < a[i+1]) {
//             b = a[i+1];
//             a[i+1]=a[i];
//             a[i]=b;
//          }
//     }
//     console.log(j,a);
//     j++;
//     if(j!==a.length){
//         
//         return abc(a,j);
//         
//     }
//     else {
//         return a;
//     } 
// }
// console.log(abc(arr,1));


var fs = require("fs");
console.log(fs);
path = require("path");

var p = "."
fs.readdir(p, function (err, files) {
    if (err) {
        throw err;
    }

    files.map(function (file) {
        return path.join(p, file);
    }).filter(function (file) {
        return fs.statSync(file).isFile();
    }).forEach(function (file) {
        console.log("%s (%s)", file, path.extname(file));
    });
});
