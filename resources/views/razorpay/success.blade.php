<!DOCTYPE html>
<html>
<head>
<title>BK-ECommerce</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body class="">
<br><br><br><br>
<article class="bg-secondary mb-3">  
<div class="card-body text-center">
<h4 class="text-white">Thank you for payment<br></h4>
<br>
<p><a class="clearCart btn btn-warning" target="_self" href="{{ url('products') }}"> Products 
<i class="fa fa-window-restore "></i></a></p>
</div>
<br><br><br>
</article>
<script>
     $(".clearCart").click(function(e) {
        e.preventDefault();
        var ele = $(this);
        if (confirm("Are you sure")) {
            $.ajax({
                url: '{{ url('clearCart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.attr("data-id")
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
</body>
</html>