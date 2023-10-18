document.getElementById("Press").addEventListener("click", function() {
  var elemento = document.getElementById("Sesion");
  if (elemento.style.display === "none") {
    elemento.style.display = "block";
  } else {
    elemento.style.display = "none";
  }
});
