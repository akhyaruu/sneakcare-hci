// parent element
const parent = document.getElementById("navbar-right-asset");

// child element
const bLogin = document.getElementById("button-login");
const bRegister = document.getElementById("button-register");
const bNamaUser = document.getElementById("button-nama-user");
const bNotifikasi = document.getElementById("button-notifikasi");

if (session === "none") {
    // dia belum login >> button login + register ada, button nama + notifikasi belum ada
    if (
        typeof bLogin != "undefined" &&
        bLogin != null &&
        typeof bRegister != "undefined" &&
        bRegister != null
    ) {
        $("#button-nama-user").remove();
        $("#button-notifikasi").remove();
    } else {
        $("#navbar-right-asset").prepend(
            '<a id="button-register" class="nav-item btn text-white ml-md-1" href="{{ url("/register") }}">Daftar</a>'
        );
        $("#navbar-right-asset").prepend(
            '<a id="button-login" class="nav-item btn text-white ml-md-1" href="{{ url("/login") }}">Masuk</a>'
        );
        $("#button-nama-user").remove();
        $("#button-notifikasi").remove();
    }
} else if (session === "has") {
    // dia sudah login >> button login + register tidak ada, button nama + notifikasi ada
    if (
        typeof bNamaUser != "undefined" &&
        bNamaUser != null &&
        typeof bNotifikasi != "undefined" &&
        bNotifikasi != null
    ) {
        $("#button-login").remove();
        $("#button-register").remove();
    } else {
        $("#navbar-right-asset").prepend(
            `<a id="button-notifikasi" class="btn" href=""><i class="fas fa-bell" style="color: white"></i></a>`
        );
        // document.getElementById("button-notifikasi").setAttribute("href", url);
        $("#navbar-right-asset").prepend(
            '<button id="button-nama-user" class="nav-item btn text-white"></button>'
        );
        document.getElementById(
            "button-nama-user"
        ).textContent = `Halo, ${user.nama}`;
        $("#button-login").remove();
        $("#button-register").remove();
    }
}
