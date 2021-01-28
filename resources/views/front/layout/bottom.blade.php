<script type="text/javascript">
    $(".update-cart").click(function(e) {
        e.preventDefault();
        var ele = $(this);
        $.ajax({
            url: '{{ url('update-cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.attr("data-id"),
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function(response) {
                window.location.reload();
            }
        });
    });

    $(".remove-from-cart").click(function(e) {
        e.preventDefault();
        var ele = $(this);
        if (confirm("Are you sure")) {
            $.ajax({
                url: '{{ url('remove-from-cart') }}',
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
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var SITEURL = '{{ URL::to('') }}';
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    $('body').on('click', '.buy', function(e) {
        var amount = $("#cart #total").text();
        var pId = $(this).attr("data-id");
        var options = {
            "key": "{{ env('RAZOR_KEY') }}",
            "amount": (amount * 100), // 2000 paise = INR 20
            "name": "BK ECommerce",
            "description": "Payment",
            //"image": "",
            "handler": function(response) {

                window.location.href = SITEURL + '/' + 'payment-process?payment_id=' + response
                    .razorpay_payment_id + '&product_id=' + pId + '&amount=' + amount;

            },
            "prefill": {
                "contact": '9566935886',
                "email": 'bharani.developer@gmail.com@gmail.com',
            },

            "theme": {
                "color": "#6c757d"
            }
        };

        var rzp1 = new Razorpay(options);
        rzp1.open();
        e.preventDefault();
    });

</script>
