<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Send Email</title>
</head>
<body>
  <div>
    <br>
    <form action="/send" method="post">
      <div>
        <label for="toEmail">To</label><br>
        <input name="to" id="toEmail" type="text" />
      </div>
      <div>
        <label for="messageEmail">Message</label><br>
        <textarea name="message" id="messageEmail" cols="30" rows="10"></textarea>
      </div>
      <div>
        <button type="submit">Send</button>
      </div>
    </form>
  </div>
</body>
</html>