const bukaKamera = document.querySelector(".bukaKamera");

// BUKA KAMERA
function buka_kamera() {
    bukaKamera.classList.replace("tampilKamera", "hilangkanKamera");
    const modal = document.body.querySelector("#cameraModal");
    if (!modal.classList.contains("show")) {
        modal.classList.add("show");
        modal.classList.remove("d-none");
    }
    Webcam.set({
        width: 439,
        height: 430,
        image_format: "jpeg",
        jpeg_quality: 200,
        // force_flash: false,
        // flip_horiz: true,
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
        <img width="100px" style="object-fit:cover; object-position:center; border-radius: 5px;" src="${data_uri}" alt="Preview Photo">
        `;
        const modal = document.body.querySelector("#cameraModal");
        if (modal.classList.contains("show")) {
            modal.classList.remove("show");
        }
        bukaKamera.classList.replace("hilangkanKamera", "tampilKamera");
    });
    Webcam.reset();
}

function batal_ambil_gambar() {
    Webcam.reset();
    bukaKamera.classList.replace("hilangkanKamera", "tampilKamera");
}

const btnSimpanPoto = document.getElementById("btnSimpanPoto");
btnSimpanPoto.addEventListener("click", function () {
    bukaKamera.classList.replace("hilangkanKamera", "tampilKamera");
});
