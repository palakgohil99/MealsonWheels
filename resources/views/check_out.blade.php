<!DOCTYPE html>
<html>
<head>
    <title>MealsonWheels</title>
</head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link href="https:tps://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    <script src="ht//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet"></script>
<body>
<div class='container'>
    <div class='row' style='padding-top:25px; padding-bottom:25px;'>
        <div class='col-md-12'>
            <div id='mainContentWrapper'>
                <div class="col-md-8 col-md-offset-2">
                    <h2 style="text-align: center;">Review Your Order &amp; Complete Checkout</h2>
                    <hr/>
                    <a href="#" class="btn btn-info" style="width: 100%;">Add More Products &amp; Services</a><hr/>
                        <div class="shopping_cart">
                            <form class="form-horizontal" role="form" method="post" id="payment-form" action="{{route('oPlace')}}">
                            {{csrf_field()}}
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" id="orderdesc" href="#collapseOne">Review Your Order</a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <div class="items">
                                                    <div class="col-md-9">
                                                        <table class="table table-striped">
                                                            <tr>
                                                                <td colspan="2"><h5>Checkout Items<a class="btn btn-warning btn-sm pull-right" href="" title="Remove Item">X</a></h5></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <ul>
                                                                        <li>
                                                                            {{app('request')->item_name_1}}
                                                                        </li>
                                                                    </ul>
                                                                </td>
												                <td>
                                                                     <ul>                                                
                                                                        <li>
                                                                            {{app('request')->quantity_1}}
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                                <td>
                                                                    <ul>
                                                                        <li>
                                                                            {{app('request')->amount_1}}
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                                <td>
                                                                    <ul>
                                                                        <li>
                                                                            {{intval(app('request')->quantity_1)*intval(app('request')->amount_1)}}
                                                                        </li>
                                                                     </ul>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="col-md-3">
                                                         <div style="text-align: center;">
                                                            <h3>Order Total</h3>
                                                            <h3><span style="color:green;">₹</span>
                                            <!-- <input type="hidden" name="ordertotal" value=""> -->
                                                                {{intval(app('request')->quantity_1)*intval(app('request')->amount_1)}}
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <button type="submit" class="btn btn-success" name="btnorder">Confirm and Continue</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cart-js -->
<script src="../js/minicart.min.js"></script>
<script>
    // Mini Cart
    paypal1.minicart1.render({ //use only unique class names other than paypal1.minicart1.Also Replace same class name in css and minicart.min.js
        action:'place_order'
        
    });

    if (~window.location.search.indexOf('reset=true')) {
        paypal1.minicart1.reset();
    }
</script>
<!-- //cart-js -->
</body>
</html>