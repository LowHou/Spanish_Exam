/* COMPLETE THIS WITH JS AND AJAX*/

function show_results(str) {
  var xhttp;
  if (str == "") {
    document.getElementById("suggestions").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("suggestions").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "main.php?search="+str, true);
  xhttp.send();
}