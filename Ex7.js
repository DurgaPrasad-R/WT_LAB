const fs = require("fs");
console.log("Read File Synchronously:");
var data = fs.readFileSync("data.txt");
var data1 = fs.readFileSync("data.txt").toString();
console.log(data);
console.log(data1);
console.log("Read File aSynchronously:");
fs.readFile("data.txt", (err, data) => {
  if (err) {
    console.log("Error : ", err);
  } else {
    console.log(data.toString());
  }
});
fs.readFile("data.txt", { encoding: "utf8" }, (err, data) => {
  if (err) {
    console.log("Error : ", err);
  } else {
    console.log(data); // .toString() not required
  }
});
console.log("Writing File Synchronously:");
fs.writeFileSync("data.txt", "Hello Node JS");
console.log("Writing File aSynchronously:");
fs.writeFile("data.txt", "hello Node", "utf8", (err) => {
  if (err) {
    console.log(err);
  }
});
