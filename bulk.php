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
            <a class="navbar-brand" href="single.php">Single</a>
            <a class="navbar-brand" href="bulk.php">Bulk</a>
            
        </nav>
    </header>
    
    <main class="container mt-5">
        <section class="jumbotron">
            <h1>Bill Top-up</h1>
        </section>
    <main class="container mt-5">
        <section class="jumbotron">    
    <div class="container">
        <h1 class="mb-4">Bulk Top-up Phone Bill</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <label for="excelFile">Select an Excel file:</label>
            <input type="file" id="excelFile" name="excelFile" accept=".xls, .xlsx" required>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
            </section>
    </main>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["excelFile"])) {
            $targetDir = "uploads/";
            $targetFile = $targetDir . basename($_FILES["excelFile"]["name"]);

            if (move_uploaded_file($_FILES["excelFile"]["tmp_name"], $targetFile)) {
                echo "<p class='mt-3'>File uploaded successfully.</p>";
            } else {
                echo "<p class='mt-3'>Sorry, there was an error uploading your file.</p>";
            }
        }
        ?>
    </div>   
    </main>
    
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2023 Your Company. All rights reserved.</p>
    </footer>

    <!-- Link to Bootstrap JS and optional dependenciesurl(message/message.txt)-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
