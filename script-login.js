document.getElementById('loginForm').addEventListener('submit', function (event) {
    event.preventDefault();
    const login = document.getElementById('login').value.trim();
    const password = document.getElementById('password').value;

    const errorMessage = document.getElementById('errorMessage');
    errorMessage.textContent = '';

    // Validação básica dos campos
    if (login.length !== 6) {
        errorMessage.textContent = 'O login deve ter exatamente 6 caracteres.';
        return;
    }

    if (password.length < 8) {
        errorMessage.textContent = 'A senha deve ter no mínimo 8 caracteres.';
        return;
    }

    // Se tudo estiver correto
    alert('Login realizado com sucesso!');
});

// Adiciona um listener ao link "Esqueci minha senha"
document.querySelector('.forgot-password a').addEventListener('click', function (event) {
    // Redirecionar para a página de recuperação de senha (pode ser atualizado conforme necessário)
    window.location.href = 'esqueci_senha.html';
});