
function addToCartButton(){
  var myPhpValue = $("#myPhpValue").val();
  if(myPhpValue == 2 || myPhpValue == 3){
    window.location.href = "Cart.php";
      
  }
  else{
    window.location.href = "LoginPage.php";
  }
}
