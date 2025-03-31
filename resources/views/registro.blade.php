<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse  Super Kompras</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&family=Josefin+Sans:wght@300;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Josefin Sans', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
            overflow: hidden;
        }

        /* Video de YouTube como fondo (con iframe) */
        .background-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .container {
            z-index: 10;
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(10px);
            text-align: center;
            color: white;
        }

        .container h1 {
            font-size: 30px;
            font-family: 'Great Vibes', cursive;
            margin-bottom: 15px;
            color: #FFD700;
        }

        .container input, .container button {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: none;
            border-radius: 5px;
        }

        .container input {
            background: rgba(255, 255, 255, 0.2);
            color: white;
        }

        .container input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .container button {
            background: #FFD700;
            color: black;
            cursor: pointer;
            font-weight: bold;
        }

        .night {
            position: absolute;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        .shooting_star {
            position: absolute;
            width: 2px;
            height: 50px;
            background: white;
            box-shadow: 0 0 10px white;
            opacity: 0;
            animation: shooting 2s linear infinite;
        }

        @keyframes shooting {
            0% {
                transform: translate(0, 0);
                opacity: 1;
            }
            100% {
                transform: translate(-200px, 200px);
                opacity: 0;
            }
        }
    </style>
</head>
<body>

    <!-- Video de YouTube con iframe -->
    <iframe class="background-video" src="https://www.youtube.com/embed/ToeE6rp9hls?autoplay=1&mute=1&loop=1&playlist=ToeE6rp9hls" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

    <div class="container">
        <h1>Registrarse en Super Kompras</h1>
        <form action="#" method="POST">
            @csrf
            <input type="text" name="nombre" placeholder="Nombre completo" required>
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Registrarse</button>
        </form>
    </div>

    <div class="night"></div>

    <script>
        function createStar() {
            const nightSky = document.querySelector('.night');
            const star = document.createElement('div');
            star.classList.add('shooting_star');

            let startPositionX = Math.random() * window.innerWidth;
            let startPositionY = Math.random() * window.innerHeight;

            star.style.left = `${startPositionX}px`;
            star.style.top = `${startPositionY}px`;

            nightSky.appendChild(star);

            setTimeout(() => {
                star.remove();
            }, 2000);
        }

        setInterval(createStar, 300);
    </script>

</body>
</html>
