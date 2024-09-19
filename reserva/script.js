document.getElementById('reservaForm').addEventListener('submit', function(event) {

    event.preventDefault();

    const nome = document.getElementById('nome').value;
    const data = document.getElementById('data').value;
    const horario = document.getElementById('horario').value;

    if (!nome || !data || !horario) {
        alert("Por favor, preencha todos os campos.");
        return;
    }

    const mensagem = `Confirme os detalhes da reserva:\n\nNome: ${nome}\nData: ${data}\nHorário: ${horario}`;

    if (confirm(mensagem)) {

        fetch('processar_reserva.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `nome=${encodeURIComponent(nome)}&data=${encodeURIComponent(data)}&horario=${encodeURIComponent(horario)}`
        })
        .then(response => response.text()) 
        .then(data => {

            document.getElementById('mensagem-confirmacao').innerHTML = data;
            
            alert('Reserva Confirmada!');
        })
        .catch(error => {
            console.error('Erro:', error);
        });
    }
});
