document.addEventListener("DOMContentLoaded", function () {
  const feadback = document.getElementById("feadback");
  const nama = document.querySelector('input[name="nama"]');
  const komentar = document.getElementById("komentar-baru");

  feadback.addEventListener("submit", function (e) {
    if (nama.value.trim() === "" || komentar.value.trim() === "") {
      alert("Nama dan komentar tidak boleh kosong!");
      e.preventDefault(); 
    }
  });
});
