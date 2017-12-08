<!DOCTYPE html>

<html lang="en">
<head>
  <link href="http://vjs.zencdn.net/6.2.0/video-js.css" rel="stylesheet">
  <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.0.4/howler.min.js"></script>
  <script src="https://unpkg.com/react@15.3.2/dist/react.js"></script>
  <script src="https://unpkg.com/react-dom@15.3.2/dist/react-dom.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js"></script>
  <script src="https://npmcdn.com/react-router@2.4.0/umd/ReactRouter.min.js"></script>
   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
   <title>Scan House Service</title>
   <meta name="description" content="This template can be used for Scan House">
   <meta name="Youssef" content="Check accommodation availibility, template Scan house">

   <!-- mobile specific metas
   ================================================== -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="viewport" content="width=320">
   <!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/animate.css">
   <link rel="stylesheet" href="css/font-awesome.css">
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/profile.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
<!--     <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap-theme.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

   <!-- favicons
   ================================================== -->
   <link rel="icon" type="image/png" src="images/favicon.png">

</head>

<body>
   <div id="profile"></div>
    <script type="text/babel">
      function ProfilePage(){
        return (
          <div className="profile">
          </div>
        )
      }
 ReactDOM.render(<ProfilePage />,
                  document.getElementById("profile")
                  );
</script>

</body>
</html>
