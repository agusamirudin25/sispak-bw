var title  = "Sistem Pakar";
var deskripsi = "";
var top = (screen.height - 570)/2;
var left = (screen.width - 570)/2;
var param = "menubar=no, toolbar=no, status=no, width=570, height=570, top="+top+",left"+left;
console.log("tesssssssssss");

function gmail(){
    var url="https://mail.google.com/mail/?view=cm&to=&su=" + encodeURI(title) + "&body="+encodeURI( deskripsi);
    window.open(url,'NewWindow', param);
}
