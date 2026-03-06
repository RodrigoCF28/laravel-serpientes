<!DOCTYPE html>
<html>
<head>
    <title>Serpientes del Mundo</title>
    <style>
    .navbar{
    background:#1b1b1b;
    padding:15px;
    display:flex;
    gap:20px;
    }

    .navbar a{
    color:white;
    text-decoration:none;
    font-weight:bold;
    }

    .navbar a:hover{
    color:lime;
    }
    .galeria{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-top: 20px;
    }

    .tarjeta{
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 10px;
        text-align: center;
        background: white;
        box-shadow: 0px 3px 10px rgba(0,0,0,0.2);
        transition: transform 0.3s;
    }

    .tarjeta:hover{
        transform: scale(1.05);
    }

    .tarjeta img{
        width: 100%;
        border-radius: 10px;
    }
    .banner{
    background-image: url('images/banner-serpiente3.gif');
    background-size: cover;
    background-position: center;
    height: 300px;
    display:flex;
    align-items:center;
    justify-content:center;
    color:white;
    font-size:30px;
    text-shadow:2px 2px 5px black;
}
#snake{
    position: fixed;
    bottom: -88px;
    left: -200px;
    width: 310px;
    z-index: 9999;
    display: none;
}

@keyframes snakeMove{
    from{
        left:-300px;
    }
    to{
        left:100%;
    }
}

.snake-animation{
    display:block;
    animation: snakeMove 20s linear;
}

    </style>
</head>

<body>
<img id="snake" src="images/snake.gif">
<x-navbar />

<header>
    <h1>Serpientes del Mundo 🐍</h1>
    <hr>
</header>

<main>
    @yield('contenido')
</main>

<footer>
    <hr>
    <p>Proyecto Laravel - Multimedia de Serpientes</p>
</footer>
<script>

setInterval(() => {

    const snake = document.getElementById("snake");

    snake.style.display = "block";
    snake.classList.add("snake-animation");

    setTimeout(()=>{
        snake.classList.remove("snake-animation");
        snake.style.display="none";
    },20000);


},20000);

</script>
</body>
</html>