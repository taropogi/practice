"use strict";

class ClPerson {
  constructor(firstName, birthYear) {
    this.firstName = firstName;
    this.birthYear = birthYear;
  }

  calcAge() {
    console.log(2037 - this.birthYear);
  }
}

const chad = new ClPerson("Richard", 1999);

chad.calcAge();

console.log(chad.__proto__ === ClPerson.prototype);
