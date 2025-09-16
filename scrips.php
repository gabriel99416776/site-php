<!-- Bootstrap JS Bundle (inclui Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const altura = document.getElementById("altura" );

    altura.addEventListener("input", function(e) {
        let v = e.target.value.replace(/[^0-9]/g, ""); // só números

        if (v.length === 0) {
            e.target.value = "";
        } else if (v.length === 1) {
            e.target.value = v;
        } else {
            e.target.value = v[0] + "." + v.substring(1, 3);
        }
    });


    document.addEventListener('DOMContentLoaded', function() {
        const sexo = document.getElementById('sexo');
        const fieldQuadril = document.getElementById('field-quadril');
        const fieldCintura = document.getElementById('field-cintura');
        const fieldPescoco = document.getElementById('field-pescoco');

        const inputQuadril = document.getElementById('quadril');
        const inputCintura = document.getElementById('cintura');
        const inputPescoco = document.getElementById('pescoco');

        function show(el) {
            el.classList.remove('hidden');
            el.setAttribute('aria-hidden', 'false');
        }

        function hide(el) {
            el.classList.add('hidden');
            el.setAttribute('aria-hidden', 'true');
        }

        function updateFields() {
            const v = sexo.value;
            if (v === 'M') {
                // masculino: mostrar cintura e pescoço, esconder quadril
                show(fieldCintura);
                show(fieldPescoco);
                hide(fieldQuadril);

                // tornar obrigatórios somente os visíveis
                inputCintura.required = true;
                inputPescoco.required = true;
                inputQuadril.required = false;

                // limpar quadril (por segurança)
                inputQuadril.value = '';
            } else if (v === 'F') {
                // feminino: mostrar todos
                show(fieldCintura);
                show(fieldPescoco);
                show(fieldQuadril);

                inputCintura.required = true;
                inputPescoco.required = true;
                inputQuadril.required = true;
            } else {
                // nenhum selecionado: esconder campos opcionais
                hide(fieldCintura);
                hide(fieldPescoco);
                hide(fieldQuadril);

                inputCintura.required = false;
                inputPescoco.required = false;
                inputQuadril.required = false;
            }
        }

        // atualiza quando muda
        sexo.addEventListener('change', updateFields);

        // inicializa (útil se o usuário recarregar com um valor já selecionado)
        updateFields();
    });
</script>