// BUKA KAMERA
function buka_kamera() {
    Webcam.set({
        width: 439,
        height: 330,
        image_format: "jpeg",
        jpeg_quality: 100,
        crop_width: 240,
        crop_height: 240,
    });
    document.querySelector(".peringatan").classList.add("alert_webcam");
    Webcam.attach("#my_camera");
}

// AMBIL PHOTO
function ambil_photo() {
    Webcam.snap(function (data_uri) {
        document
            .getElementById("image_tag")
            .setAttribute("value", `${data_uri}`);
        document.getElementById("results").innerHTML = `
        <img src="${data_uri}" alt="Preview Photo">
        `;
    });
    Webcam.reset();
}
