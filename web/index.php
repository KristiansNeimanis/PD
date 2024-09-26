<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Piesakies webināram!</h1>

    <form action="register" method="post">
        <label for="">Vārds</label>
        <input type="text" id="name">
        <div>
            <label for="">e-pasts</label>
            <input type="e-pasts" id="email">
        </div>
        

        <select name="choice">
            <option value="1">Beginner</option>
            <option value="2" selected>Intermediate</option>
            <option value="3">Advanced</option>
        </select>
        <div>
            <p>Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?</p>
        </div>
        <div>
            <input type="radio" id="yes" name="select" value="1" />
            <label for="Yes">Yes</label>
            <input type="radio" id="no" name="select" value="0" />
            <label for="No">No</label>
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>

    </form>


    <p>Jau reģistrējušies:</p>
    <?php
        
    ?>


    <a href="blog.php">to_blog</a>

    <script src="app.js"></script>
</body>
</html>