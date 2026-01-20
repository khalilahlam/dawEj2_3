// JS básico para añadir un módulo dinámicamente
document.addEventListener("DOMContentLoaded", function() {
  const form = document.getElementById("formModulo");
  const ul = document.getElementById("modulos");

  form.addEventListener("submit", function(e) {
    e.preventDefault(); // Evita que el formulario recargue la página
    const input = form.nuevoModulo;
    if(input.value.trim() !== "") {
      const li = document.createElement("li");
      li.textContent = input.value.trim();
      ul.appendChild(li);
      input.value = "";
    }
  });
});
