<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <div class="container">
        <div class="header">
        </div>

        <div class="challenge">
            <form method="GET">
                <input type="text" name="name" placeholder="Enter name here...">
                <button type="submit">SUBMIT</button>
            </form>
            <div class="output">
                <p>
                    Welcome,
                    <strong>
                        <?php echo ($_GET['name'] ?? 'stranger'); ?>
                    </strong>!
                </p>
            </div>
        </div>

        <div class="meme-box">
            <div class="meme-text">PRO TIP:</div>
            <div class="meme-text">SUCH VULNERABILITY. VERY HACK. WOW.</div>
        </div>
    </div>
    <img src="./cat.jpeg" width="300" height="200"></img>

</body>
</html>
