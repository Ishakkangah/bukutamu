const tampilkanBukuTamuBerdasarkanFilter = document.getElementById(
    "tampilkanBukuTamuBerdasarkanFilter"
);
const btnTampilkanFilter = document.getElementById("tampilkanFilter");

btnTampilkanFilter.addEventListener("click", function () {
    const tanggalMulai =
        tampilkanBukuTamuBerdasarkanFilter.querySelector("#tanggal_mulai");
    const sampaiTanggal =
        tampilkanBukuTamuBerdasarkanFilter.querySelector("#sampai_tanggal");
    if (tanggalMulai.value !== "" && sampaiTanggal.value !== "") {
        tampilkanBukuTamuBerdasarkanFilter.classList.replace(
            "d-flex",
            "d-none"
        );
    }
});
