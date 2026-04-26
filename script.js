const container = document.querySelector('.container1');
const registerBtn = document.querySelector('.register-btn');
const loginBtn = document.querySelector('.login-btn');

registerBtn.addEventListener('click', ()=>{
    container.classList.add('active');
})
loginBtn.addEventListener('click', ()=>{
    container.classList.remove('active');
})

async function cekuser(nama) {

    const psn = document.getElementById("psn");
    if(nama === ""){
        psn.innerHTML = "";
        return
    }
    const php = await fetch("cek.php",{
        method: "POST",
        headers:{"Content-Type": "application/json"},
        body: JSON.stringify({ username: nama})
    });
    const hasil = await php.text();

    psn.innerHTML= nama + " " + hasil;
}
let eye = document.getElementById('eye');
let pw = document.getElementById('floatingPassword'); // Sesuaikan dengan id di input Anda
