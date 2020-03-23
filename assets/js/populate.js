function Cliente($clientes) {
    var dropdown = document.getElementById("marcacoes_cliente");
    var selection = dropdown.value;
    console.log(selection);
    var emailTextBox = document.getElementById("marcacoes_nomeCliente");
    emailTextBox.value = selection;
}