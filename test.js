"use strict";

const myObj = {
  planes: 300,
};

myObj.addPlane = function () {
  console.log(this);
  this.planes++;
  console.log(this.planes);
};

document
  .querySelector("button")
  .addEventListener("click", myObj.addPlane.bind(myObj));

const myNums = [1, 3, -2, 4, 2, -7, 8];

const firstNegativeNumber = myNums.find((num) => num < 0);

console.log(firstNegativeNumber);
