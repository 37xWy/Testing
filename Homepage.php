<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unveiled Japan</title>
    <link rel="stylesheet" href="style.css">
    <style>
        #header{
            height: 100px;
            width: auto;
            background-color: #fcd1d7;
        }
        #searchbar{
            height: 50px;
            width: 400px;
            border-radius: 40px;
            background-color: white;
            margin-right: 20px;
            border-color: rgb(255, 0, 0);
        }
        .button{
            background-color: #c3829e;
            border: none;
            color: #ffe7de;
            padding: 10px 80px;
            text-align: center;
            display: inline-block;
            font-size: 20px;
            margin: 4px 2px;
            border-radius: 40px;
            cursor: pointer;
        }
        #banner{
            height: 160px;
            width: auto;
            margin-bottom: 20px;
            background-color: #562135;
        }
        #places{
            background-color: #fcd1d7;
            padding: 10px 150px; 
            height: 200px;
            width: 13%;
            display: inline-block;
            margin: 4px 2px;
            cursor: pointer;
            text-align: center;
            color: #c3829e;
        }
        #desc{
            align-items: right;
            box-sizing: auto;
            height: 200px;
            width: 450px;
            border-top: 1px solid;
            border-bottom: 1px solid;
            overflow: auto;
            margin: 5px;
            padding-right: 42px;
            display: inline-block;
        }
    </style>
</head>
<body>

    <div id="header">
        <h2><b><a href="Homepage.html">Unveiled Japan</a></b></h2>
        <p align="right"><a href="login.html">Login/Register</a></p>
    </div>

    <hr>

    <a href="Homepage.php" class="button" >Homepage</a>
    <a href="Places.html" class="button" >Places</a>
    <a href="Planner.php" class="button" >Planner</a>
    <a href="Review.html" class="button" >Write a Review</a>
    <input type="search" id="searchbar" placeholder="Search...">
    <button type="submit" align="right">Search</button>

    <hr>

    <div id="banner">
        <h2 align="center">This is a banner</h2>
    </div>

    <hr>

    <h2 align="center">Recommended Places</h2>

    <hr>

    <div id="places">
        <p align="center">Tokyo</p>
    </div>

    <div id="places">
        <p align="center">place</p>
    </div>

    <div id="places">
        <p align="center">place</p>
    </div>

    <div id="desc">
        <h4><u>Tokyo</u></h4>
        <p>Tokyo, Japan’s busy capital, mixes the ultramodern and the traditional, from neon-lit skyscrapers to historic temples. The opulent Meiji Shinto Shrine is known for its towering gate and surrounding woods. The Imperial Palace sits amid large public gardens. The city's many museums offer exhibits ranging from classical art (in the Tokyo National Museum) to a reconstructed kabuki theater (in the Edo-Tokyo Museum).</p>
    </div>

    <div id="desc">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia culpa laudantium ex distinctio quod. Consectetur ut, beatae suscipit dolorum est pariatur voluptas harum amet obcaecati eius, qui sint, perferendis fuga!</p>
    </div>

    <div id="desc">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad officiis cumque quis? Distinctio modi beatae incidunt esse eius, culpa consectetur repellendus aliquam quisquam labore placeat quod blanditiis? Adipisci, aliquam eligendi. Dolor neque hic laborum. Fugit id rem odio consequatur rerum molestias quam consequuntur. Nemo cupiditate adipisci blanditiis, dolore distinctio quaerat excepturi necessitatibus rem explicabo harum nihil voluptas dolorum quibusdam perspiciatis eos? Suscipit molestiae a officia beatae sint quaerat laborum est impedit esse, tempora, provident eum veritatis nam ratione commodi excepturi perferendis. Quo laudantium deleniti nobis dolorem debitis? Ea incidunt a quae aliquam, consectetur cum minus blanditiis labore. Dolor, vero officiis?</p>
    </div>

    <hr>

</body>
</html>