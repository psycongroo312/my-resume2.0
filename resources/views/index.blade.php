<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My resume</title>
   @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Nunito:wght@200&family=Revalia&family=Roboto&display=swap" rel="stylesheet">

</head>
<body>

   
    @include('structure.header')
    
    @include('structure.main')
    
    @include('structure.footer')
    
   
</body>
</html> 
