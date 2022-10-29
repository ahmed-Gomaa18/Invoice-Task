const textarea = document.getElementById('invoice-note');
const subtotal = document.getElementById('total');


function startAction(){
    
    var count = document.getElementById('product-count').value;
    var product = document.getElementById('product').value;

    var total = parseInt(subtotal.innerText)

    if (product === "Select Your Product From Here..."){
        console.log('You Must select product');
        return false;
    };
    
    if (product === "Select Your Product From Here..."){
        console.log('You Must select product');
        return false;
    };


    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

   $.ajax({
    method: "POST",
    url: 'invoice/API-addition',
    data: {   
        product: product,
        count: count,
    },
    success: function(response){

        textarea.value += response['detail'];
        total += response['subtotal'];
        subtotal.innerText = total;
        console.log(response['session']);

    },
    error: function(error){
        console.error(error);
    }
});
}



function enableProduct()
{
    var customer = document.getElementById('customer').value;

    if (customer === "Select Your Product From Here..."){
        console.log('You Must select Customer First');
        return false;
    }

    document.getElementById('product').disabled = false;
    document.getElementById('product-count').disabled = false;
    document.getElementById('add-product').disabled = false;

}

