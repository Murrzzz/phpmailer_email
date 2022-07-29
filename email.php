<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="summernote/summernote.min.css">
 <!-- include libraries(jQuery, bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <title>SENDING EMAIL USING PHPMailer</SEct></title>
</head>

<?php
    $recipient = $email = $file ="";
    $errRecipient = $errEmail = $errFile = "";

    if($_SERVER["REQUEST_METHOD"] == "GET")
    {
        if(empty($_GET["recipient"]))
        {
            $errRecipient ="Please fill up the email";
        }

        if(empty($_GET["email"]))
        {
            $errEmail ="Please fill up the email";
        }
        if(empty($_GET["file"]))
        {
            $errFile ="Please fill up the email";
        }
    }
?>

<body>
        <div class="card" style="width:60%; margin-left:auto; margin-right:auto; margin-top: 49px;">
            <div class="card-header">PhpMailer</div>
                <form class="card-body" action="index.php">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Recipient:</span>
                        <input type="text" class="form-control" name="recipient" aria-describedby="basic-addon1">
                        <span class="error"><?php echo($errRecipient); ?></span>
                    </div>
                    <div class="input-group mb-3">
                        
                        <textarea name="email" id="summernote" cols="100" rows="10"></textarea>
                        <span class="error"><?php echo($errEmail); ?></span>
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" name="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Add Attachment</label>
                        <span class="error"><?php echo($errFile); ?></span>
                    </div>
                    <div class="input-group mb-3">
                        <input type="submit" class="btn btn-primary" value="Send">
                    </div>
                </form>
            <div class="card-footer"> </div>
        </div>

    
    <!-- Bootstrap Js -->
    <script src="booststrap/js/bootstrap.min.js"></script>
    <script src="summernote/summernote.min.js"></script>
    
    <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>

</body>
</html>