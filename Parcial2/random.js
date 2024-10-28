document.addEventListener("DOMContentLoaded", function () {
    const avatars = [
        "Avatar1.jpg", 
        "Avatar2.jpg", 
        "Avatar3.jpg", 
        "Avatar4.jpg", 
        "Avatar5.jpg", 
        "Avatar6.jpg",
        "Avatar7.jpg",
        "Avatar8.jpg",
        "Avatar9.jpg",
        "Avatar10.jpg"
    ];

    // Seleccionar avatar aleatorio
    const randomAvatar = avatars[Math.floor(Math.random() * avatars.length)];

    // Asignar avatar al campo oculto y mostrarlo
    document.getElementById("avatar").value = randomAvatar;
    document.getElementById("avatarPreview").innerHTML = `<img src="avatars/${randomAvatar}" alt="Avatar" width="100">`;
});
