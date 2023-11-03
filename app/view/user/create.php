<?php function user_create() { ?>
    <form action="/user/create" method="POST">
        <fieldset>
            <legend>Dados do usuário</legend>
            <div>
                <label for="name">Nome:</label>
                <input id="name" type="text" name="name" placeholder="Digite seu nome">
            </div>
            <div>
                <label for="name">Email:</label>
                <input id="email" type="email" name="name" placeholder="Digite seu nome">
            </div>
            <div>
                <label for="name">Senha:</label>
                <input id="password" type="password" name="password" placeholder="Digite sua senha">
            </div>
            <div>
                <label for="name">Confirme sua senha:</label>
                <input id="confirmPassword" type="password" placeholder="Confirme sua senha">
            </div>
            <div>
                <button>Cadastrar</button>
            </div>
        </fieldset>
    </form>
<?php } ?>
