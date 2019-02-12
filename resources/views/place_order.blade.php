<!DOCTYPE html>
<html>
<head>
    <title>MealsonWheels</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link href="https:tps://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    <script src="ht//fonts.googleapis.com/css?family=Source+Sans+Pro:
<body>400,600,700" rel="stylesheet"></script>
</head>
<div class="container rows">
    <div class="panel panel-default col-md-6" style="margin:50px 0px 0px 20px;">
        <div class="panel-heading">
            <h4 class="panel-title">
                <b>Contact and Billing Information</b>
            </h4>
        </div>
        <div id="" class="panel">
            <div class="panel-body">
                <b>Help us keep your account safe and secure, please verify your billing information.</b>
                <br/><br/>
                <form class="form-horizontal" role="form" method="post" id="payment-form" action="{{route('oConfirm')}}">
                    {{csrf_field()}}
                    <table class="table table-striped" style="font-weight: bold;">
                        <tr>
                            <td style="width: 175px;">
                                <label for="id_email">Email ID:</label>
                            </td>
                            <td>
                                <input class="form-control" id="id_email" disabled="" name="email" type="text" value="" />
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 175px;">
                                <label for="id_first_name">Full name:</label>
                            </td>
                            <td>
                                <input class="form-control" id="id_first_name" name="full_name" disabled="" value="" type="text"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 175px;">
                                <label for="id_address_line_1">House/Building:</label>
                            </td>
                            <td>
                               <input type="text" class="form-control" name="add1" placeholder="society/apt name">
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 175px;">
                                <label for="id_address_line_2">Landmark/Street:</label>
                            </td>
                            <td>
                               <input type="text" class="form-control" name="add2" placeholder="Landmark/Street">
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 175px;">
                                <label for="id_city">City:</label>
                            </td>
                            <td>
                                <select class="form-control" name="city" required="required">
                                    <option selected>Select City</option>
                                    <option value="Ahmedabad">Ahmedabad</option>
                                    <option value="Gandhinagar">Gandhinagar</option>
                                    <option value="Vadodara">Vadodara</option>
                                    <option value="Surat">Surat</option>
                                </select>
                            </td>
                        </tr>                    
                        <tr>
                            <td style="width: 175px;">
                                <label for="id_postalcode">Postalcode:</label>
                            </td>
                            <td>
                                <input class="form-control" id="id_postalcode" name="postalcode" required="required" type="text"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 175px;">
                                <label for="id_phone">Contact No:</label>
                            </td>
                            <td>
                                <input class="form-control" id="id_phone" name="phone" type="text"/>
                            </td>
                        </tr>
                    </table>
                    <button type="submit" name="btnord_del" class="btn btn-success" style="float: right;">Order Now
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>