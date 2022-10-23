<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
</head>
<body>

    <?php include("modules/header.php"); ?>

    <main>
    <h1>Page de contact</h1>
        <form method="post">
            <div>
                <p>Sujet du message</p>
                <input type="text" name="subject" required>
            </div>
            <div>
                <p>Email</p>
                <input id="email" type="email" name="mail" required>
            </div>
            <div>
                <p>Nom & prénom</p>
                <input type="text" name="full name" required>
            </div>
            <div id="message">
                <p>Message</p>
                <textarea name="message" required></textarea>
            </div>
            <button type="submit">
                <p>Envoyer</p>
                <i class="icon-arrow-right"></i>
            </button>
        </form>
    </main>

    <?php include("modules/footer.php"); ?>

    <script src="js/script.js"></script>
</body>
</html>