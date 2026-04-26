<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Password: 
<input type="password" id="pw_login"> 

<button type="button" id="tombol_mata">Lihat</button>
<script>
    // Ambil elemennya
const inputPw = document.getElementById('pw_login');
const tombolMata = document.getElementById('tombol_mata');

// Fungsi saat tombol diklik
tombolMata.onclick = function() {
    if (inputPw.type === 'password') {
        inputPw.type = 'text';
        tombolMata.textContent = 'Sembunyi';
    } else {
        inputPw.type = 'password';
        tombolMata.textContent = 'Lihat';
    }
};
</script>
</body>
</html>