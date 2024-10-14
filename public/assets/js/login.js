document.getElementById('LoginForm').addEventListener('submit', function(event){
    event.preventDefault();

    const correctUsername = "erlinda";
    const correctPassword = "erlinda";

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if(username === correctPassword && password === correctPassword){
        alert("YEY LOGIN BERHASIL!");
        window.location.href = 'index.blade.php';
    }else{
        alert("USERNAME ATAU PASSWORD TIDAK SESUAI. AYO COBA LAGI!");
    }
});