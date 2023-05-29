<DOCTYPE html>
    <html>
        <head> 
            <meta http-equiv="X-UA-Compatible" content="">
            <meta charset="utf-8">
            <title>Sign in page</title>
            <link rel="stylesheet" type = "text/css" href="bootstrap.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/holiday.css" />
        </head>

        <body>
            </style>
            <div class = "container">
                <div class = "row">
                    <h2>Sign in</h2>
                    <div class = "card">
                        <div class = "card-body">
                            <form action="process.php" method= "post">
                                <div>
                                <label for = "SSN" >SSN</label>
                                <input type = "SSN" id = "SSN" name = "SSN">
                                </div>
                                <div>
                                    <label for = "name" >Name</label>
                                    <input type = "name" id =  "name" name = "name">
                                </div>
                                <div>
                                    <label for ="address">Address</label>
                                    <input type ="address" id = "address" name ="address">
                                </div>
                                <div>
                                    <label for = "age" >Age</label>
                                    <input type = "age " id = "age " name = "age ">
                                </div>
                                <div>
                                    <label for = Password >Password</label>
                                    <input type = "password" id = "Password" name = "Password">
                                </div>
                                <div>
                                    <label for = "repeat_password" >Repeat Password</label>
                                    <input type = "password" id = "repeat_password" name = "repeat_password">
                                </div>
                                <div>
                                    <button>Sign up</button>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>

                                   
        </body>
    </html>