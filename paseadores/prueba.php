<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subir Archivo</title>
    <!-- Incluye jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("input[type=file]").change(function() {
                if (this.id == "foto_perfil_input") {
                    console.log("correcto");
                }
            });
        });
    </script>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="foto_perfil_input">Subir Foto de Perfil:</label>
        <input type="file" id="foto_perfil_input" name="foto_perfil">
        <input type="submit" value="Subir Archivo" name="submit">
    </form>
</body>
</html>
