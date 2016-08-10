var Person = (function () {
    function Person(firstName, lastName) {
        this.firstName = firstName;
        this.lastName = lastName;
        this.fullName = firstName + " " + lastName;
    }
    return Person;
}());
var bob = new Person("Bob", "Nauman");

//# sourceMappingURL=scripts.js.map
