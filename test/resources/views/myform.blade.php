<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Form Page</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    

	</head>
	<body>
	<div class="container">
	<div class="row">
		<form method="post" action="/create">
         @csrf
		<input type="text" name="product_name" /><br />
		<input type="text" name="quantity_in_stock" /><br />
		<input type="text" name="price_per_item" /><br />
		<button type="button" class="submit_me">Submit</button>
		</form>
	</div>
	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
    <script>
    $( document ).ready(function() {
    
        $( ".submit_me" ).click(function( event ) {
            $.ajax({
                // The URL for the request
                url: "/create",
                // The data to send (will be converted to a query string)
                data: {product_name: "product_name", quantity_in_stock: "quantity_in_stock", price_per_item: "price_per_item"},
                

                // Whether this is a POST or GET request
                type: "POST",

                // The type of data we expect back
                dataType : "json",
                })
                // Code to run if the request succeeds (is done);
                // The response is passed to the function
                .done(function( json ) {
                console.log('ready');
                })
                // Code to run if the request fails; the raw request and
                // status codes are passed to the function
                .fail(function( xhr, status, errorThrown ) {
                console.log('fail');
                });
        });

    });
    </script>
	</body>
</html>
