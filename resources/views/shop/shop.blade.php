<!DOCTYPE html>
<head>
    <title>D Cloth</title>
    <link rel="icon" href="image/D.png">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <script src="{{ asset('js/semantic.min.js') }}"></script>
    <style type="text/css">
      body {
        background-color: #FFFFFF;
      }
      .ui.menu .item img.logo {
        margin-right: 1.5em;
      }
      .main.container {
        margin-top: 7em;
      }
      .wireframe {
        margin-top: 2em;
      }
      .ui.footer.segment {
        margin: 5em 0em 0em;
        padding: 5em 0em;
      }
    </style>
</head>
<body>
    <!-- navbar -->
    <div class="ui fixed inverted menu">
        <div class="ui container">
            <a href="#" class="header item">
                <img class="logo" src="image/D.png">Cloth
            </a>
            <a href="#" class="item">Home</a>
            <a href="#" class="item">Shop</a>
            <a href="#" class="item">About</a>
        </div>
    </div>

    <!-- main -->
    <div class="ui main text container">
        <h1 class="ui header">Semantic UI Fixed Template</h1>
        <p>This is a basic fixed menu template using fixed size containers.</p>
        <p>A text container is used for the main container, which is useful for single column layouts</p>
        <img class="wireframe" src="image/D.png">
        <img class="wireframe" src="image/D.png">
        <img class="wireframe" src="image/D.png">
        <img class="wireframe" src="image/D.png">
        <img class="wireframe" src="image/D.png">
        <img class="wireframe" src="image/D.png">
        <img class="wireframe" src="image/D.png">
    </div>

    <!-- footer -->
    <div class="ui inverted vertical footer segment">
        <div class="ui center aligned container">
            <div class="ui stackable inverted divided grid">
                <div class="five wide column">
                    <h4 class="ui inverted header">Group 1</h4>
                </div>
                 <div class="six wide column">
                    <h4 class="ui inverted header">Group 2</h4>
                </div>
                 <div class="five wide column">
                    <h4 class="ui inverted header">Group 3</h4>
                </div>
            </div>
            <div class="ui inverted section divider">
                <img class="ui centered mini image" src="image/D.png">                
            </div>
        </div>
    </div>
</body>
</html>
