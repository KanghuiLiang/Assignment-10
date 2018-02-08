//append one more order
$(function(){

	$('#moreItems').click(function(event) {
		$('#items').append('<div class="form-row"><div class="form-group col-md-2"><input name="product[]" type="text" class="form-control"></div><div class="form-group col-md-7"><input name="desc[]" type="text" class="form-control"></div><div class="form-group col-md-1"><input name="qty[]" type="number" class="form-control"></div><div class="form-group col-md-2"><input name="cost[]" type="number" class="form-control"></div></div>');
	});

})


//check validation
//for address
var elProduct = document.getElementByName('product[]');
var elP = document.getElementById('nonblank')

function checkProduct (){
    if (elProduct==null || x=="") {       
        elP.style.color = 'red';
        elP.textContent = 'This can not be blank';
    } else {
        elP.innerHTML = '';
    }
}
// elAddress.addEventListener('blur', function() {
//     checkAddress(1);
// }, false);

// function checkAddress() {
// 	var elAdd = document.forms["myForm"] ["shipping"].value;
// 	if (elAdd==null || x=="") {
// 	alert ("Must fill in address");
//    	return false;
//     }
