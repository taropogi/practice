"use strict";

// constructor functions
const Person = function (firstName, birthYear) {
  this.firstName = firstName;
  this.birthYear = birthYear;
  this.age = 0;
};

// prototypes
Person.prototype.calcAge = function () {
  this.age = 2023 - this.birthYear;
};

const chad = new Person("Richard", 1993);

chad.calcAge();
console.log(chad.age);
