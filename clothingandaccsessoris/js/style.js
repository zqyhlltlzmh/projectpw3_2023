var data = {
  labels: ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"],
  datasets: [
    {
      label: "Pengunjung",
      data: [50, 75, 100, 125, 150, 175, 200],
      backgroundColor: [
        "rgba(255, 99, 132, 0.2)",
        "rgba(54, 162, 235, 0.2)",
        "rgba(255, 206, 86, 0.2)",
        "rgba(75, 192, 192, 0.2)",
        "rgba(153, 102, 255, 0.2)",
        "rgba(255, 159, 64, 0.2)",
        "rgba(255, 99, 132, 0.2)",
      ],
      borderColor: [
        "rgba(255, 99, 132, 1)",
        "rgba(54, 162, 235, 1)",
        "rgba(255, 206, 86, 1)",
        "rgba(75, 192, 192, 1)",
        "rgba(153, 102, 255, 1)",
        "rgba(255, 159, 64, 1)",
        "rgba(255, 99, 132, 1)",
      ],
      borderWidth: 1,
    },
  ],
};

// Pilih elemen <canvas> yang akan digunakan untuk menampilkan chart
var ctx = document.getElementById("visitorChart").getContext("2d");

// Buat chart dengan menggunakan data di atas
var chart = new Chart(ctx, {
  type: "bar",
  data: data,
  options: {
    scales: {
      yAxes: [
        {
          ticks: {
            beginAtZero: true,
          },
        },
      ],
    },
  },
});
function Register() {
  let name = document.getElementById("name").value;
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;
  let repassword = document.getElementById("repassword").value;
  let emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  if (!name || name.length > 30) {
    document.getElementById("errorname").innerHTML =
      "<i># Nama wajib di isi dan memiliki maksimal 30 karakter</i>";
    document.getElementById("errorname").style = "color: red;";
  } else {
    document.getElementById("errorname").innerHTML = "";
  }

  if (!password || password.length < 8) {
    document.getElementById("errorpassword").innerHTML =
      "<i># Pasword wajib di isi dan memiliki minimal 8 karakter</i>";
    document.getElementById("errorpassword").style = "color: red;";
  } else {
    document.getElementById("errorpassword").innerHTML = "";
  }

  if (!repassword || repassword != password) {
    document.getElementById("errorrepassword").innerHTML =
      "<i># Re-Pasword wajib di isi dan harus sama dengan password</i>";
    document.getElementById("errorrepassword").style = "color: red;";
  } else {
    document.getElementById("errorrepassword").innerHTML = "";
  }
  if (!email || !email.match(emailFormat)) {
    document.getElementById("erroremail").innerHTML =
      "<i># email wajib di isi dan menggunakan format email (email@example.com)</i>";
    document.getElementById("erroremail").style = "color: red;";
  } else {
    document.getElementById("erroremail").innerHTML = "";
  }
  if (name.length < 30 && password >= 8 && repassword == password) {
    Swal.fire({
      title: "<strong>Anda berhasil Register!</strong>",
      icon: "success",
      text: "Anda akan kami bawa ke halaman utama!",
      showConfirmButton: false,
      timer: 1500,
      html: '<meta http-equiv="refresh" content="1; url=dashboard.html">',
    });
  }
}
function Login() {
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;
  if (
    email == "YAYAO@gmail.com" &&
    password == "12345678"
  ) {
    Swal.fire({
      title: "<strong>Anda berhasil Login!</strong>",
      icon: "success",
      showConfirmButton: false,
      timer: 1500,
      html: '<meta http-equiv="refresh" content="1; url=dashboard.html">',
    });
  } else {
    Swal.fire({
      title: "<strong>Error!</strong><br>email atau password anda salah!",
      icon: "error",
      showConfirmButton: true,
      timer: 5000,
      html: '<table class="table mt-3"> <tr> <th colspan="2" class="text-center">Demo Account</th> </tr> <tr class="text-center"> <th>Email</th> <th>Password</th> </tr> <tr class="text-center"> <td>mabot@mabot.com</td> <td>12345678</td> </tr> </table>',
    });
  }
}
