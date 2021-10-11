
<!-- PACOTE P -->

<p><?=  $_SESSION['name'] ?> escolha aqui o seu orçamento</p>
<div class="content mini_prata" id="prata">
<details>
<summary><h3>Pacote Mini Wedding - Prata.</h3></summary>
    <ul>
        <li>Cobertura sem limite de cliques: </li>
        <li>Entrega de 360 fotografias em alta resolução + tratamento de imagem.  </li>
        <li>Slideshow com 60 fotografias em blog e YouTube até 15 dias pós casamento. </li>
        <li>Álbum virtual (pré visualização do álbum para aprovação e correções dos noivos), montagem 
            feita pela fotógrafa Juliana Mozart diretamente com os noivos.  </li>   
            <li><strong>Valor adicional do album R$2480,00</strong> </li>    
    </ul>
    <h4 class="plus_msg_budget">Acrescente e calcule os itens a seguir selecionando e depois acionado o botão</h4>
    <form class="plus_budget_form" method="POST" action="<?php echo BASE_URL; ?>weddingform/addbudget">
        <div class="check">
            <input type="checkbox" name="album" >
            <ul>
                <li>30 páginas tamanho 20x30 tipo Wedding Book, álbum de páginas de papel
                     fotográfico laminado </li>
                <li>Capa feita à mão com materiais como couro, madeira, capa fotógráfica
                     ou tecido, à escolha do casal. </li>
            </ul>
        </div>
        <div class="check">
            <input type="checkbox" name="personalPhotograph" >
            <ul>
                <li>Dentro desse orçamento a nossa fotografa Juliana Mozart só fotografará o seu 
                    evento se não tiver um outro na mesma data. O que é imprevisível. Para garantir o olhar
                    pessoal da nossa artísta no seu evento acrecente esse precioso item ao seu orçamento, 
                    clicando ao lado.
            </li>               
            <li><strong>Valor adicional da fotografa R$1000,00</strong> </li>
            </ul>
        </div>  
        <div >
            <div class="check">
                <input type="checkbox" name="makingBride" >
                <label for="vehicle1"> Making of  da noiva</label><br>
                <p><strong>Valor adicional R$850,00</strong> </p>
            </div>
            <div class="check">
                <input type="checkbox" name="makingGroom" >
                <label > Making of  da noivo</label><br>
                <p><strong>Valor adicional R$650,00</strong> </p>
            </div>
                <input type="hidden" name="initialValue" value=3570>
                <input type="hidden" name="brideValue" value=850>
                <input type="hidden" name="groomValue" value=650>
                <input type="hidden" name="PhotographyValue" value=1000>
                <input type="hidden" name="AlbumValue" value=2480>
                <input type="hidden" name="budgetType" value="prata">
                <input type="hidden" name="albumPages" value=30>
                <input type="hidden" name="albumPhotos" value=360>
                <input type="hidden" name="category" value=low>
        </div>
        <div class="total">
            <button>Calcular Valor</button>
            <p>Valor Inicial R$ 3570,00</p>
            <?php if(!empty($_SESSION['prata'])): ?>
            <p>Valor Final <?=$_SESSION['prata']?></p>
            <?php endif;?>
        </div>      
    </form>
    <p>Depois de escolher o seu orçamento <a href="<?php echo BASE_URL;?>weddingform/estimate"> clique aqui </a>para 
    visualisar os detalhes, descontos e as formas de pagamento
    </P>
    </details>
</div>


<!-- PACOTE M -->
<div class="content mini_prata"  id="ouro">
<details>
    <summary><h3>Pacote Mini Wedding - Ouro.</h3></summary>
    <ul>
        <li>Cobertura sem limite de cliques: </li>
        <li>Entrega de 540 fotografias em alta resolução + tratamento de imagem.  </li>
        <li>Slideshow com 60 fotografias em blog e YouTube até 15 dias pós casamento. </li>
        <li>Álbum virtual (pré visualização do álbum para aprovação e correções dos noivos), montagem 
            feita pela fotógrafa Juliana Mozart diretamente com os noivos.  </li>        
    </ul>
    <h4 class="plus_msg_budget">Acrescente e calcule os itens a seguir selecionando e depois acionado o botão</h4>
    <form class="plus_budget_form" method="POST" action="<?php echo BASE_URL; ?>weddingform/addbudget">
        <div class="check">
            <input type="checkbox" name="album">
            <ul>
                <li>40 páginas tamanho 20x30 tipo Wedding Book, álbum de páginas de papel
                     fotográfico laminado </li>
                <li>Capa feita à mão com materiais como couro, madeira, capa fotógráfica
                     ou tecido, à escolha do casal. </li>
                     <li><strong>Valor adicional do album R$2780,00</strong> </li>
            </ul>
        </div>
        <div class="check">
            <input type="checkbox" name="personalPhotograph">
            <ul>
                <li>Dentro desse orçamento a nossa fotografa Juliana Mozart só fotografará o seu 
                    evento se não tiver um outro na mesma data. O que é imprevisível. Para garantir o olhar
                    pessoal da nossa artísta no seu evento acrecente esse precioso item ao seu orçamento, 
                    clicando ao lado.
            </li>               
            <li><strong>Valor adicional da fotografa R$1000,00</strong> </li>
            </ul>
        </div>      
        <div>    
            <div class="check">
                <input type="checkbox" name="makingBride">
                <label for="vehicle1"> Making of  da noiva</label><br>
                <p><strong>Valor adicional R$850,00</strong> </p>
            </div>
            <div class="check">
                <input type="checkbox" name="makingGroom">
                <label> Making of  da noivo</label><br>
                <p><strong>Valor adicional R$850,00</strong> </p>
                <input type="hidden" name="initialValue" value=4170>
                <input type="hidden" name="brideValue" value=850>
                <input type="hidden" name="groomValue" value=650>
                <input type="hidden" name="PhotographyValue" value=1000>
                <input type="hidden" name="AlbumValue" value=2780>
                <input type="hidden" name="budgetType" value="ouro">
                <input type="hidden" name="albumPages" value=40>
                <input type="hidden" name="albumPhotos" value=540>
                <input type="hidden" name="category" value=low>
            </div>
        </div>
        <div class="total">
            <button>Calcular Valor</button>
            <p>Valor Inicial R$ 4170,00</p>
            <?php if(!empty($_SESSION['ouro'])): ?>
            <p>Valor Final <?=$_SESSION['ouro']; ?></p>
            <?php endif;?>
        </div>
    </form>  
    <p>Depois de escolher o seu orçamento <a href="<?php echo BASE_URL;?>weddingform/estimate"> clique aqui </a>para 
    visualisar os detalhes, descontos e as formas de pagamento
    </P> 
</details>
</div>


<!-- PACOTE G -->
<div class="content mini_prata" id="diamante">
    <details>
        <summary><h3>Pacote Diamante.</h3></summary>
        <ul>
            <li>Cobertura sem limite de cliques: </li>
            <li>Entrega de 720 fotografias em alta resolução + tratamento de imagem.  </li>
            <li>Slideshow com 60 fotografias em blog e YouTube até 15 dias pós casamento. </li>
            <li>Álbum virtual (pré visualização do álbum para aprovação e correções dos noivos), montagem 
                feita pela fotógrafa Juliana Mozart diretamente com os noivos.  </li>        
        </ul>
        <h4 class="plus_msg_budget">Acrescente e calcule os itens a seguir selecionando e depois acionado o botão</h4>
        <form class="plus_budget_form" method="POST" action="<?php echo BASE_URL; ?>weddingform/addbudget">
            <div class="check">
                <input type="checkbox" name="album" >
                <ul>
                    <li>50 páginas tamanho 20x30 tipo Wedding Book, álbum de páginas de papel
                        fotográfico laminado </li>
                    <li>Capa feita à mão com materiais como couro, madeira, capa fotógráfica
                        ou tecido, à escolha do casal. </li>
                        <li><strong>Valor adicional do album R$4480,00</strong> </li>
                </ul>
            </div>
            <div class="check">
                <input type="checkbox" name="personalPhotograph" value="true">
                <ul>
                    <li>Dentro desse orçamento a nossa fotografa Juliana Mozart só fotografará o seu 
                        evento se não tiver um outro na mesma data. O que é imprevisível. Para garantir o olhar
                        pessoal da nossa artísta no seu evento acrecente esse precioso item ao seu orçamento, 
                        clicando ao lado.
                    </li>               
                    <li><strong>Valor adicional da fotografa R$1000,00</strong> </li>
                </ul>
            </div>       
            <div>    
                <div class="check">
                    <input type="checkbox" name="makingBride">
                    <label > Making of  da noiva</label><br>
                    <p><strong>Valor adicional R$850,00</strong> </p>
                </div>
                <div class="check">
                    <input type="checkbox" name="makingGroom">
                    <label> Making of  da noivo</label><br>
                    <p><strong>Valor adicional R$650,00</strong> </p>
                </div>
                <input type="hidden" name="initialValue" value=10095>
                    <input type="hidden" name="brideValue" value=850>
                    <input type="hidden" name="groomValue" value=650>
                    <input type="hidden" name="PhotographyValue" value=1000>
                    <input type="hidden" name="AlbumValue" value=4480>
                    <input type="hidden" name="budgetType" value="diamante">
                    <input type="hidden" name="albumPages" value=50>
                    <input type="hidden" name="albumPhotos" value=720>
                    <input type="hidden" name="category" value=low>
            </div>
            <div class="total" >
                <button>Calcular Valor</button>
                <p>Valor Inicial R$ 10095,00</p>
                <?php if(!empty($_SESSION['diamante'])): ?>
                <p>Valor Final <?=$_SESSION['diamante']; ?></p>
                <?php endif;?>
            </div>

        </form>
            <p>Depois de escolher o seu orçamento <a href="<?php echo BASE_URL;?>weddingform/estimate"> clique aqui </a>para 
                visualisar os detalhes, descontos e as formas de pagamento
            </P>
    </details>
</div>