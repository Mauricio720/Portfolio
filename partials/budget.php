<div class="content-budget">
    <h2 class="budget_title">Fale comigo sobre seu projeto!</h2>

    <form class="form-budget" method="post">
        <div class="form-group m-2">
            <label for="name">Me fale seu nome</label>
            <input required class="form-control" type="text" name="name" require>
        </div>

        <div class="form-group m-2">
            <label for="email">Me fale seu Email</label>
            <input required class="form-control" type="text" name="email" require>
        </div>

        <div class="form-group m-2">
            <label for="project_interest">Qual o tipo de projeto?</label>
            <select name="project_interest" class="form-control">
                <option value="1">Site</option>
                <option value="2">Sistema</option>
                <option value="3">Aplicativo</option>
                <option value="4">Api Rest</option>
            </select>
        </div>

        <div class="form-group m-2">
            <label for="phone">Me fale um telefone pra contato</label>
            <input required class="form-control" id="phone" 
                type="text" name="phone" placeholder="(__)_____-____">
        </div>
        
        <div class="form-group m-2">
            <label for="description">Me fale um pouco sobre o seu projeto</label>
            <textarea required class="form-control" name="description" cols="30" rows="10"></textarea>
        </div>
        
        <div class="form-group form-budget-footer">
            <input class="btn btn-info w-50 budget-submit" id="submit-btn" type="submit" value="Enviar">
        </div>
        
        <div class="alert alert-success alert-dismissible fade show mt-4 d-none" role="alert">
            Obrigado pelo interesse! Entraremos em contato em breve!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/imask"></script>
<script>
    var phoneMask = IMask(
    document.querySelector('#phone'), {
        mask: '(00)00000-0000'
    });
</script>
<script src="src/js/budget.min.js"></script>
    