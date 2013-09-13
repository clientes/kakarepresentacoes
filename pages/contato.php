
<div class="row">
    <div class="col-md-4">
        <div class="jumbotron">
            <h3>Contatos</h3>
            <p>(44) 9904-3130</p>
           <p>(44) 8812-6912</p>
            <a href="mailto:kakarepresentacoes@hotmail.com" class="link-off"     style="font-size:17px">kakarepresentacoes@hotmail.com</a>
        </div>
    </div>
    <div class="col-md-8">
        <form name="sentMessage" class="well" id="contactForm" method="post">
            <legend class="text-center">
                <h1>Formulário de Contato</h1>
                Caso queria agendar uma visita um orçamento preencha o formulário que entraremos em contato o mais breve possível</legend>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nome Completo" id="name" required>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Empresa" id="empresa" required data-validation-required-message="Please enter your email" aria-invalid="false">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Segmento" id="segmento" required data-validation-required-message="Please enter your email" aria-invalid="false">
            </div>

            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email" aria-invalid="false">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Telefone" id="telefone" required data-validation-required-message="Please enter your email" aria-invalid="false">
            </div>

            <div class="form-group well well-sm">
                <h4>Selecione os produtos de seu interesse</h4>
                <label class="checkbox-inline">
                    <input type="checkbox" value="Etiquetas Bordadas">Etiquetas Bordadas
                </label>

                <label class="checkbox-inline">
                    <input type="checkbox" value="Etiquetas Cós Externo">Etiquetas Cós Externo
                </label>

                <label class="checkbox-inline">
                    <input type="checkbox" value="Metas">Metas
                </label>

                <label class="checkbox-inline">
                    <input type="checkbox" value="Brindes">Brindes
                </label>

                <label class="checkbox-inline">
                    <input type="checkbox" value="Impressos Gráficos">Impressos Gráficos
                </label>
            </div>

            <div class="form-group">
                <textarea rows="10" class="form-control" placeholder="Message" id="message" required minlength="5" maxlength="999" style="resize:none"></textarea>
            </div>

            <div class="form-group clearfix">
                <button type="submit" class="btn btn-warning pull-right">Enviar</button>
            </div>

        </form>
    </div>
</div>