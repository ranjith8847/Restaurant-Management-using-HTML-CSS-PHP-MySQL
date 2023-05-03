<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">



    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Enter Info</h2>
                    <form action="ordersval.php" method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="username" id="name" name="name">
                        </div>
			<div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Item name" id="itemname" name="itemname">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Address" id="address" name="address">
                            
                        </div>
                        <div class="input-group">
                          <div>
                                <select name="quantity" id="quantity" class="input--style-3">
                                    	<option disabled="disabled" selected="selected">Quantity</option>
                                    	<option>1</option>
                                    	<option>2</option>
                                    	<option>3</option>
				    	<option>4</option>
				    	<option>5</option>
				    	<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" id="email" name="email">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Phone" id="phone" name="phone">
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
