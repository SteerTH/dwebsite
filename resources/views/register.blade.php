<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <!-- Incluir el CSS de Bootstrap 5 desde el CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
    <style>
        /* Estilos para el fondo */
        body {
            background-image: url('https://i.gifer.com/IrF.gif'); /* GIF de galaxia y lluvia */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            backdrop-filter: blur(5px); /* Desenfoque para dar un efecto de profundidad */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
            color: #fff;
        }
        /* Estilos para la tarjeta */
        .card {
            border-radius: 20px;
            background: rgba(0, 0, 0, 0.7); /* Fondo oscuro translúcido */
            backdrop-filter: blur(15px); /* Desenfoque interno */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5); /* Sombra más fuerte */
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.2); /* Borde transparente */
        }
        /* Encabezado de la tarjeta */
        .card-header {
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            background: linear-gradient(135deg, #6a11cb, #2575fc); /* Degradado galaxia */
            text-align: center;
            padding: 1.5rem;
        }
        /* Título estilizado */
        h3 {
            font-size: 2.2rem;
            font-weight: bold;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        }
        /* Estilo para el botón */
        .btn {
            background: linear-gradient(135deg, #ff5f6d, #ffc371); /* Degradado en el botón */
            border: none;
            font-size: 1.2rem;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            box-shadow: 0 4px 15px rgba(255, 95, 109, 0.6);
        }
        .btn:hover {
            transform: translateY(-3px); /* Efecto de desplazamiento */
            box-shadow: 0 6px 25px rgba(255, 95, 109, 0.8);
        }
        /* Bordes redondeados en inputs */
        input {
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.1); /* Fondo translúcido */
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        /* Texto y etiquetas en blanco */
        label, .form-control {
            color: white;
        }
        /* Cambiar color de inputs al interactuar */
        input:focus {
            border-color: #ff5f6d;
            box-shadow: 0 0 8px rgba(255, 95, 109, 0.8);
        }
        /* Efecto visual para la tarjeta */
        .card-body {
            position: relative;
            z-index: 2;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header text-white">
                        <h3 class="mb-0">Register</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-block text-white w-100">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Incluir el JS de Bootstrap 5 desde el CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
