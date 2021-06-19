let carts = document.querySelectorAll('.add-cart'); 

let products = [
    {
        name: "Calendar",
        tag: "calendae",
        price: 500,
        inCart: 0
    },
    {
        name: "Wallart",
        tag: "wallart",
        price: 1000,
        inCart: 0
    },
    {
        name: "Painting",
        tag: "background",
        price: 2000,
        inCart: 0
    },    
    {
        name: "Doodles",
        tag: "doodles",
        price: 300,
        inCart: 0
    }
]


for (let i=0; i < carts.length; i++){
    carts[i].addEventListener('click', ()=>{
        cartNumbers(products[i]);
        totalCost(products[i]);
    })
}

function OnLoadCartNumbers(){
    let productNumbers = localStorage.getItem('cartNumbers');
    if(productNumbers){
        document.querySelector('.push span').textContent = productNumbers;
    }
}

function cartNumbers(product){
    let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers);
    if(productNumbers){
        localStorage.setItem('cartNumbers',productNumbers+1);
        document.querySelector('.push span').textContent = productNumbers + 1;

    }else{  
        localStorage.setItem('cartNumbers',1);
        document.querySelector('.push span').textContent = 1;
    }
    setItems(product);
}

function setItems(product){
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);  
    console.log("My cart items are ", cartItems);
    if(cartItems != null){
        if(cartItems[product.tag] == undefined ){
            cartItems = {
                ...cartItems,
                [product.tag]: product
            }
        }
        cartItems[product.tag].inCart += 1;
    }else{
        product.inCart = 1; 
        cartItems = {
            [product.tag]: product
        }
    }
    localStorage.setItem("productsInCart",JSON.stringify
    (cartItems));
}

function totalCost(product){
    // console.log("the product price is,", product.price)
    let cartCost = localStorage.getItem('totalCost');
    console.log("My cart cost is", cartCost);
    console.log(typeof cartCost);
    
    if(cartCost != null){
        cartCost = parseInt(cartCost);
        localStorage.setItem("totalCost", cartCost + product.price);
    }else{
        localStorage.setItem("totalCost", product.price)
    }
}


function displayCart(){
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems)
    // console.log(cartItems);
    let productConatiner = document.querySelector
    (".products");
    let cartCost = localStorage.getItem('totalCost');
    
    if(cartItems && productConatiner){
        productConatiner.innerHTML = '';
        Object.values(cartItems).map(item => {
            productConatiner.innerHTML += `
            <div class="product">
                <ion-icon name="trash-outline"></ion-icon>
                <img src="./images/${item.tag}.png">
                <span>${item.name} </span>
                 <span>  ${item.price} ${item.inCart} ${item.inCart * item.price}</span>

            </div>`

            // <div class=
            // <div class="quantity>
            //     <ion-icon name="arrow-back-outline"></ion-icon>
            //     <span>${item.inCart}</span>
            // </div>
            // <div class="total">
            //     ${item.inCart * item.price}
            // </div>
            // </div>
            
        });
        productConatiner.innerHTML += `
            <br>
            <h2 class="basketTotalTitle">
                Basket Total  ${cartCost}.00
            </h2>
            <button ><a href="checkout.php">Checkout</button>
        </div>
        `
    }
}
OnLoadCartNumbers();
displayCart();


//JSON.parse(window.localStorage.getItem('productsInCart')); -> to view the items in cart in obj format