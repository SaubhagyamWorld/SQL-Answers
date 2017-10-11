<html>
<head>
<title>Comment Form</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Comment Form</h1>
        </header>
        <div class="form">
            <form id="particularsform" action="submit.php" method="post"

                enctype="multipart/form-data">
                <p class="particulars">
                    <label for="comment">Comment</label>
                </p>
                <textarea type="text" id="comment" name="comment"

                    placeholder="comment" required autofocus></textarea> 
					
              <input type="submit" class="bottom" name="submit" id="submit" value="Sign up">
            </form>
        </div>
    </div>
</body>
</html>
