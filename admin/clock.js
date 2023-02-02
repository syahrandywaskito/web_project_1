// hari tanggal
let date = new Date();
let hari = date.getDay();
let tanggal = date.getDate();
let bulan = date.getMonth();
let tahun = date.getFullYear();

switch (hari) {
  case 1:
    hari = "Senin";
    break;
  case 2:
    hari = "Selasa";
    break;
  case 3:
    hari = "Rabu";
    break;
  case 4 :
    hari = "Kamis";
    break;
  case 5 :
    hari = "jumat";
    break;
  case 6 :
    hari = "Sabtu";
    break;
  case 7 :
    hari = "Minggu";
}

let tampilDate = hari + ", " + tanggal + " - " + bulan + " - " + tahun;
document.getElementById("hari").innerHTML = tampilDate;

// jam 
setInterval(function(){
  let waktu = new Date();
  let jam = waktu.getHours();
  let menit = waktu.getMinutes();
  let detik = waktu.getSeconds();

  document.getElementById("clock").innerHTML = jam + " : " + menit + " : " + detik;
}, 500);