	<?php
            function data ($tabelnaam){
                echo"<table>";


                $servername = "localhost";
                $username = "root";
                $password = "root";

                try {
                    $db = new PDO("mysql:host=$servername;dbname=classicmodels", $username, $password);

                    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }
                catch(PDOException $e)
                {
                    echo "Connection failed: " . $e->getMessage();
                }

				
				$sql = "SELECT * FROM $tabelnaam";
				$sth = $db->prepare($sql);
				$sth->execute();
				
				while($row = $sth->fetch()){

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
                    echo"<tr>";
                    for ($i = 0; $i < count($cn[$tabelnaam]); $i++){
                        echo ("<th>$cn[$i]</th>");

                    }

                    echo"<td> $row[products]</td>";


                    echo"</tr>";
				}

				echo"</table>";
            }

		?>