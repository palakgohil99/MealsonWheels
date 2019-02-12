<!DOCTYPE html>
<html>
<head>
<title>MealsonWheels</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link href="https:tps://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    <script src="ht//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet"></script>
</head>
<body>
<div class="container rows" style="font-family: 'Encode Sans Expanded', sans-serif;">
    <div class="col-md-2">
        
    </div>
    <div class="panel panel-default col-md-8" style="margin-top:7em;">
        <div>
            <a href="user_home.php">Go back to Home Page</a>
        </div>
        <div style="color:#FD6239;">
            <h3>Your Order has been placed Successfully!</h3>
        </div>
        <br>
        <div class="panel-heading">
            <h4 class="panel-title">
                <b><u>Your Order Summary</u></b>
            </h4>
            <br>
            <i>Order ID:</i>
        </div>
        <div id="" class="panel">
            <div class="panel-body">
                <form role="form" method="post" id="payment-form">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                             <th>Item Name</th>
                             <th>Qty</th>
                             <th>Price</th>
                             <th>Amount</th>
                           </tr>
                         </thead>
                         <tbody>
                            <tr>
                                <td>{{app('request')->item_name_1}}</td>
                                <td>{{app('request')->quantity_1}}</td>
                                <td>{{app('request')->amount_1}}</td>
                            </tr>
                             <tr style="color:#FD6239; font-family: 'Encode Sans Expanded', sans-serif; font-size:17px;">
                                <td colspan="3"><b style="float: right;"><i>Grand Total:</i></b>
                             </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        
    </div>
</div>
</body>


</html>