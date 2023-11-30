<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://www.paypal.com/sdk/js?client-id=Ad3K9-uUfdjByh47To5DuGGlub5oRAMggsBmRraTgYjDqQ9GrA5yKzDz5pzqd1uyruAfh6wQPqivsq_J&currency=MXN"></script>
</head>
<body>

    <div id="paypal-button-container"></div>

    <script>
        paypal.Buttons({
            style:{
                color:'blue',
                shape:'pill',
                label:'pay'
            },
            createOrder: function(data,actions){
                return actions.order.create({
                    purchase_units:[{
                        amount:{
                            value:20
                        }
                    }]
                });

            },

            onApprove: function (data,actions) {
               actions.order.capture().then(function (detalles) {

                console.log(detalles)
                
               }); 
            },
            onCancel:function(data){
                alert("Pago Cancelado")
                console.log(data)
            }
        }).render('#paypal-button-container')
    </script>
    
</body>
</html>