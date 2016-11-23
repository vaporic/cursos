"use strict";
require('./datos');
var Usuarios = (function () {
    function Usuarios(name, age) {
        this.usuario = {
            name: name,
            age: age
        };
        console.log(this.usuario);
    }
    return Usuarios;
}());
var u = new Usuarios('Hugo', 29);
//# sourceMappingURL=main.js.map