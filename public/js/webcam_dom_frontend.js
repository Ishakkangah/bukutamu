const bukaKamera = document.querySelector(".bukaKamera");
// BUKA KAMERA
function buka_kamera() {
    Webcam.set({
        width: 439,
        height: 430,
        enable_flash: true,
        crop_height: true,
        image_format: "jpeg",
        jpeg_quality: 100,
        // force_flash: false,
        flip_horiz: true,
        constraints: {
            facingMode: "environment",
        },
    });
    document.querySelector(".peringatan").classList.add("alert_webcam");
    Webcam.attach("#my_camera");
}

// AMBIL PHOTO
function ambil_photo() {
    Webcam.snap(function (data_uri) {
        console.log(data_uri);
        document
            .getElementById("image_tag")
            .setAttribute("value", `${data_uri}`);
        document.getElementById("results").innerHTML = `
        <figure class="w-full">
         <img class="h-auto max-w-full rounded-lg" src="${data_uri}"  alt="Preview Photo">
         <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Image caption</figcaption>
        </figure>
        `;
        document.body
            .querySelector(".modal")
            .classList.replace("d-block", "d-none");
    });
    Webcam.reset();
}

document.body.addEventListener("click", function (e) {
    if (e.target.classList.contains("btnBatalAmbilGambarWebcam")) {
        Webcam.reset();
        document.body
            .querySelector(".modal")
            .classList.replace("d-block", "d-none");
        bukaKamera.classList.replace("hilangkanKamera", "tampilKamera");
    }
});

const btnSimpanPoto = document.getElementById("btnSimpanPoto");
btnSimpanPoto.addEventListener("click", function () {
    bukaKamera.classList.replace("hilangkanKamera", "tampilKamera");
});
