<!DOCTYPE html>
<html lang="en">

<head>
  <title>PWA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#f5f5f5">
  <meta name="description" content="This is an example of a progressive web app.">
  <link rel="icon" href="./favicon.ico" type="image/x-icon">
  <link rel="manifest" href="./manifest.json">
</head>

<body>
  <h1><center>Desktop</center></h1>
  <h3><?php echo $_SERVER['HTTP_USER_AGENT']; ?></h3>
  <script>
    (function () {
      if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('./service-worker.js').then(function (registration) {
          console.log('Registration successful, scope is:', registration.scope);
        }).catch(function (error) {
          console.log('Registration failed:', error);
        });
      } else {
        console.log('Service workers are not supported.');
      }
    })();
  </script>
</body>

</html>