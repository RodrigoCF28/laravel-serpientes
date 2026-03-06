<!DOCTYPE html>
<html>

<head>

    <title>Serpientes del Mundo</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .galeria {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 20px;
        }

        .tarjeta {
            border: none;
            border-radius: 10px;
            padding: 10px;
            text-align: center;
            background: white;
            box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s;
        }

        .tarjeta:hover {
            transform: scale(1.05);
        }

        .tarjeta img {
            width: 100%;
            border-radius: 10px;
        }

        
        .familia-tarjeta {
            border: none;
            background: transparent;
            padding: 0;
            cursor: pointer;
        }

        .familia-tarjeta:focus {
            outline: none;
        }

        #snake {
            position: fixed;
            bottom: -140px;
            left: -200px;
            width: 500px;
            z-index: 9999;
            display: none;
        }


        @keyframes snakeMove {
            from {
                left: -300px;
            }

            to {
                left: 100%;
            }
        }

        .snake-animation {
            display: block;
            animation: snakeMove 22s linear;
        }

        .banner {
            background-image: url('/images/banner-serpiente3.gif');
            background-size: cover;
            background-position: center;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 30px;
            text-shadow: 2px 2px 5px black;
        }

        body {
            background-color: #F59527;
        }

        .w3-container {
            background: rgb(243, 199, 110);
            padding: 20px;
        }

        .navbar-orange {
            background-color: #F59527;
        }
    </style>

</head>

<body class="w3-content" style="max-width:1200px">

    <img id="snake" src="/images/snake.gif">

    <x-header />
        <div class="w3-container">
        @yield('contenido')
        </div>
    <x-footer />

    <script>
        setInterval(() => {

            const snake = document.getElementById("snake");

            snake.style.display = "block";
            snake.classList.add("snake-animation");

            setTimeout(() => {
                snake.classList.remove("snake-animation");
                snake.style.display = "none";
            }, 1000000);

        }, 2000);
    </script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.familia-tarjeta').forEach(function (button) {
                button.addEventListener('click', function () {
                    var slug = button.getAttribute('data-family');
                    var section = document.querySelector('.especies[data-family="' + slug + '"]');
                    if (!section) return;

                    var isHidden = section.hasAttribute('hidden');
                    document.querySelectorAll('.especies').forEach(function (el) {
                        el.setAttribute('hidden', '');
                    });
                    if (isHidden) {
                        section.removeAttribute('hidden');
                        section.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                });
            });
        });
    </script>
    

</body>

</html>
