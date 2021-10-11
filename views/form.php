
<div class="content">
        <form method="POST" action="<?php BASE_URL; ?>weddingform/insert">
            <fieldset class='initial_wedding_section'>
                <legend>Dados Iniciais</legend>
                <label>Contratante</label>
                <input type="text" name="contractor" />
                <label>Email</label>
                <input type="email" name="email" />
                <label>Celular</label>
                <input id="phone-mask" type="text" name="phone" />
                <label>Nome da Noiva</label>
                <input type="text" name="bride" />
                <label>Nome do Noivo</label>
                <input type="text" name="groom" />
                <label>Data do seu casamento</label>
                <input type="date" name="data" />
                <label>Quantidade de convidados</label>
                <input type="number" name="guestNumber" />
            </fieldset>


            <fieldset class="location_wedding_section">
            <legend>Localização do evento</legend>           
            
            <label>Estado</label>
            <input type="text" name="estado" />
            <label>Cidade</label>
            <input type="text" name="city" />
            <label>País</label>
            <input type="text" name="pais"/>
          
            </fieldset>

            <fieldset class="details_wedding_section">
                <legend>Detalhes do casamento</legend>
                <label>Local da cerimonia</label>
            <select  name="churchlist">
                <option  value=" " selected>Selecione o Buffet de sua recepção</option>
                <option value="brasil">Igreja Nossa Senhora do Brasil</option>                
                <option value="saojose">Igreja São Jose</option>
                <option value="saobento">Mosteiro de São Bento</option>
                <option value="saoluiz">Igreja São Luiz</option>  
                <option value="anglicana">Igreja Anglicana de São Paulo</option>     
            </select>
            <input type="text" name="church" value="" placeholder="Caso sua igreja não esteja nas opções preencha aqui"/>
           
            <label>Local da recepção</label>
            <select  name="partyroomlist">
                <option  value=" " selected>Selecione o Buffet de sua recepção</option>
                <option value="casapetra">Casa Petra</option>                
                <option value="franca">Buffet França</option>
                <option value="ibirapuera">Ibirapuera</option>
            </select>
            
            <input type="text" name="partyroom" value=""  placeholder="Caso não encontre seu buffet preencha o nome aqui"/>

            <select  name="eventType">
                <option value="" selected>Tipo do evento</option>
                <option value="praia">Praia</option>                
                <option value="cidade">Cidade</option>
                <option value="campo">Campo</option>                 
            </select>

            </fieldset>
            <input class="custom_budget_button" type="submit" value="Clique Orçamento Personalizado">

         
         
                <!-- <div class="check">
                    <input type="checkbox" name="makingofnoiva" value="true">
                    <label for="vehicle1"> Making of  da noiva</label><br>
                </div>
                <div class="check">
                    <input type="checkbox" name="makingofnoivo" value="true">
                    <label for="vehicle1"> Making of  da noivo</label><br>
                </div> -->

         
        </form>
            
        

    </div>
    <script src="https://unpkg.com/imask"></script>
    <script>
        var phoneMask = IMask(
        document.getElementById('phone-mask'), {
        mask: '(00)00000-0000'
        }); 
    </script>

    
</body>
</html>