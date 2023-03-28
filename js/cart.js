if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready);
} else {
    ready();
}

function ready(){
    var removeCartItemButtons = document.getElementsByClassName('button');
    console.log(removeCartItemButtons);
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i];
        button.addEventListener('click', removeCartItem);        
    }
}

function removeCartItem(event){
    var buttonClicked = event.target;
    buttonClicked.parentElement.parentElement.remove();
    updateCartTotal();
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0];
    var cartRows = cartItemContainer.getElementsByClassName('cart-row');
    var total = 0;
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i];
        var priceElement = cartRow.getElementsByClassName('product-price')[0];
        var quantityElement = cartRow.getElementsByClassName('w-25 lp-1')[0];
        var price = parseFloat(priceElement.innerText.replace('$', ''));
        var quantity = quantityElement.value; //gives me quanity of other products for some reason
//        console.log(quantity);
        total = total + (price * quantity);
        console.log(price * quantity);
        
    }
    document.getElementsByClassName('subtotal')[0].innerText = '$' + total.toFixed(2);
    
}
