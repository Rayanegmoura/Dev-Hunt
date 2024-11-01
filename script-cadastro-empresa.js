document.getElementById('cadastroForm').addEventListener('submit', function(event) {
    event.preventDefault(); 

    const cnpj = document.getElementById('cnpj').value;
    const nomeFantasia = document.getElementById('nomeFantasia').value;
    const razaoSocial = document.getElementById('razaoSocial').value;
    const endereco = document.getElementById('endereco').value;
    const email = document.getElementById('email').value;
    const telefone = document.getElementById('telefone').value;

    if (cnpj && nomeFantasia && razaoSocial && endereco && email && telefone) {
        document.getElementById('mensagem').textContent = "Cadastro realizado com sucesso!";
    } else {
        document.getElementById('mensagem').textContent = "Por favor, preencha todos os campos.";
    }
});