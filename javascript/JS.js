function moveImage() {
    var image = document.getElementById('animal-image')
    var degrees = 0
    setInterval(function () {
        // Add 1 degree to degrees
        degrees = degrees + 1
        // Rotate the image
        image.style.transform = 'rotate(' + degrees + 'deg)'
    }, 50)

}
var cart = []

function addToCart(name, price, quantity) {
    var product = {
        name: name,
        price: price,
        quantity: quantity
    }

    cart.push(product)
    document.getElementById("cart").innerHTML = JSON.stringify(cart); // https://stackoverflow.com/questions/5612787/converting-an-object-to-a-string
}

function viewInvoice() {
    document.getElementById("invoice").style.display = 'block';
    document.getElementById("items").innerHTML = JSON.stringify(cart); // https://stackoverflow.com/questions/5612787/converting-an-object-to-a-string
}

function closeInvoice() {
    document.getElementById("invoice").style.display = 'none';
}