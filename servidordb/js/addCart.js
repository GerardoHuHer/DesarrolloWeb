var productos = [];

fetch('db/productos.json')
.then(response => response.json()) // Convierte esa respuesta a un json
.then(json => productos = json)

function agregar(i) {
    console.log(productos[i]);
    let c = localStorage.getItem('carrito');
    let carrito = c ? JSON.parse(c) : [];
    // console.log(c);
    // console.log(carrito);


    // Validar que el elemento exista en el arreglo
    let existe = false;
    carrito.forEach(p => {
        if(p.nombre == productos[i].nombre) {
            existe = true;
            p.item++;
        }
    });

    if(!existe) {
        carrito.push(productos[i]);
        carrito[carrito.length - 1].item = 1;
    }

    localStorage.setItem('carrito', JSON.stringify(carrito));
    actualizarCarrito();
}

function actualizarCarrito() {
    let c = localStorage.getItem('carrito');
    let carrito = c? JSON.parse(c):[];
    document.getElementById('product-number').innerHTML = carrito.length;
}

actualizarCarrito();
console.log('loaded');