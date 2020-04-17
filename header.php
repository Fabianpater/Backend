<?php include("../function.php"); ?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
            }

            .topnav {
                overflow: hidden;
                background-color: #333;
            }

            .topnav a {
                float: left;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }

            .topnav a:hover {
                background-color: #ddd;
                color: black;
            }

            .topnav a.active {
                background-color: #4CAF50;
                color: white;
            }
            table, td{
                border: 3px solid black;
                border-collapse: collapse;
                padding: 10px;
            }
        </style>
    </head>
    <body>
    <div class="topnav">
        <a href="http://localhost/backend/periode%203/Classic%20models/Products/index.php">Products</a>
        <a href="http://localhost/backend/periode%203/Classic%20models/Productlines/index.php">Productlines</a>
        <a href="http://localhost/backend/periode%203/Classic%20models/Customers/index.php">Customers</a>
        <a href="http://localhost/backend/periode%203/Classic%20models/employees/index.php">Employees</a>
        <a href="http://localhost/backend/periode%203/Classic%20models/offices/index.php">Offices</a>
    </div>
    <div style="padding-left:16px">
        <h2></h2>
        <p></p>
    </div>

 <?php
	$cn = array(
		"Customers"=>array(
			"customerNumber",
			"customerName",
			"contactLastName",
			"contactFirstName",
			"phone",
			"addressLine1",
			"addressLine2",
			"city",
			"state",
			"postalCode",
			"country",
			"salesRepEmployeeNumber",
			"creditLimit"
		),
		"Employees"=>array(
			"employeeNumber",
			"lastName",
			"firstName",
			"extension",
			"email",
			"officeCode",
			"reportsTo",
			"jobTitle"
		),
		"Offices"=>array(
			"officeCode",
			"city",
			"phone",
			"addressLine1",
			"addressLine2",
			"state",
			"country",
			"postalCode",
			"territory"
		),
		"ProductLines"=>array(
			"productLine",
			"textDescription",
			"htmlDescription",
			"image"
		),
		"Products"=>array(
			"productCode",
			"productName",
			"productLine",
			"productScale",
			"productVendor",
			"productDescription",
			"quantityInStock",
			"buyPrice",
			"MSRP"
		)
	);
?>

    </body>
</html>