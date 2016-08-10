class Person {
    fullName: string;
    constructor(public firstName, public lastName) {
        this.fullName = firstName + " " + lastName;
    }
}

let bob = new Person("Bob", "Nauman");