
<!-- PACOTE P DIAMANTE-->

<p><?=  $_SESSION['name'] ?> escolha aqui o seu orçamento</p>
<div class="content mini_prata" id="diamante">
    <h3>Pacote Diamante.</h3>
    <ul>
        <li>Cobertura sem limite de cliques: </li>
        <li>Entrega de 720 fotografias em alta resolução + tratamento de imagem.  </li>
        <li>Slideshow com 60 fotografias em blog e YouTube até 15 dias pós casamento. </li>
        <li>Álbum virtual (pré visualização do álbum para aprovação e correções dos noivos), montagem 
            feita pela fotógrafa Juliana Mozart diretamente com os noivos.  </li>        
    </ul>
    <form method="POST" action="<?php echo BASE_URL; ?>weddingform/addbudget">
        <div class="check">
            <input type="checkbox" name="album" >
            <ul>
                <li>50 páginas tamanho 20x30 tipo Wedding Book, álbum de páginas de papel
                     fotográfico laminado </li>
                <li>Capa feita à mão com materiais como couro, madeira, capa fotógráfica
                     ou tecido, à escolha do casal. </li>
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
            </ul>
        </div>       
        <div>    
            <div class="check">
                <input type="checkbox" name="makingBride">
                <label > Making of  da noiva</label><br>
            </div>
            <div class="check">
                <input type="checkbox" name="makingGroom">
                <label> Making of  da noivo</label><br>
            </div>
            <input type="hidden" name="initialValue" value=10095>
                <input type="hidden" name="brideValue" value=850>
                <input type="hidden" name="groomValue" value=650>
                <input type="hidden" name="PhotographyValue" value=1000>
                <input type="hidden" name="AlbumValue" value=4480>
                <input type="hidden" name="budgetType" value="diamante">
                <input type="hidden" name="albumPages" value=50>
                <input type="hidden" name="albumPhotos" value=720>
                <input type="hidden" name="category" value=high>
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
</div>


<!-- PACOTE M MASTER-->
<div class="content mini_prata"  id="ouro">
    <h3>Pacote Master.</h3>
    <ul>
        <li>Cobertura sem limite de cliques: </li>
        <li>Entrega de 100 fotografias em alta resolução + tratamento de imagem.  </li>
        <li>Slideshow com 60 fotografias em blog e YouTube até 15 dias pós casamento. </li>
        <li>Álbum virtual (pré visualização do álbum para aprovação e correções dos noivos), montagem 
            feita pela fotógrafa Juliana Mozart diretamente com os noivos.  </li>        
    </ul>
    <form method="POST" action="<?php echo BASE_URL; ?>weddingform/addbudget">
        <div class="check">
            <input type="checkbox" name="album">
            <ul>
                <li>60 páginas tamanho 20x30 tipo Wedding Book, álbum de páginas de papel
                     fotográfico laminado </li>
                <li>Capa feita à mão com materiais como couro, madeira, capa fotógráfica
                     ou tecido, à escolha do casal. </li>
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
            </ul>
        </div>      
        <div>    
            <div class="check">
                <input type="checkbox" name="makingBride">
                <label for="vehicle1"> Making of  da noiva</label><br>
            </div>
            <div class="check">
                <input type="checkbox" name="makingGroom">
                <label> Making of  da noivo</label><br>
                <input type="hidden" name="initialValue" value=7770>
                <input type="hidden" name="brideValue" value=850>
                <input type="hidden" name="groomValue" value=650>
                <input type="hidden" name="PhotographyValue" value=1000>
                <input type="hidden" name="AlbumValue" value=5180>
                <input type="hidden" name="budgetType" value="master">
                <input type="hidden" name="albumPages" value=60>
                <input type="hidden" name="albumPhotos" value=1000>
                <input type="hidden" name="category" value=high>
            </div>           
        </div>
        <div class="total">
            <button>Calcular Valor</button>
            <p>Valor Inicial R$ 7770,00</p>
            <?php if(!empty($_SESSION['master'])): ?>
            <p>Valor Final <?=$_SESSION['master']; ?></p>
            <?php endif;?>
        </div>
    </form>  
    <p>Depois de escolher o seu orçamento <a href="<?php echo BASE_URL;?>weddingform/estimate"> clique aqui </a>para 
    visualisar os detalhes, descontos e as formas de pagamento
    </P> 
</div>


<!-- PACOTE G PLUS-->
<div class="content mini_prata" id="diamante">
    <h3>Pacote Plus.</h3>
    <ul>
        <li>Cobertura sem limite de cliques: </li>
        <li>Entrega de 1350  fotografias em alta resolução + tratamento de imagem.  </li>
        <li>Slideshow com 60 fotografias em blog e YouTube até 15 dias pós casamento. </li>
        <li>Álbum virtual (pré visualização do álbum para aprovação e correções dos noivos), montagem 
            feita pela fotógrafa Juliana Mozart diretamente com os noivos.  </li>        
    </ul>
    <form method="POST" action="<?php echo BASE_URL; ?>weddingform/addbudget">
        <div class="check">
            <input type="checkbox" name="album" >
            <ul>
                <li>70 páginas tamanho 20x30 tipo Wedding Book, álbum de páginas de papel
                     fotográfico laminado </li>
                <li>Capa feita à mão com materiais como couro, madeira, capa fotógráfica
                     ou tecido, à escolha do casal. </li>
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
            </ul>
        </div>       
        <div>    
            <div class="check">
                <input type="checkbox" name="makingBride">
                <label > Making of  da noiva</label><br>
            </div>
            <div class="check">
                <input type="checkbox" name="makingGroom">
                <label> Making of  da noivo</label><br>
            </div>
            <input type="hidden" name="initialValue" value=9570>
                <input type="hidden" name="brideValue" value=850>
                <input type="hidden" name="groomValue" value=650>
                <input type="hidden" name="PhotographyValue" value=1000>
                <input type="hidden" name="AlbumValue" value=6380>
                <input type="hidden" name="budgetType" value="diamante">
                <input type="hidden" name="albumPages" value=50>
                <input type="hidden" name="albumPhotos" value=720>
                <input type="hidden" name="category" value=high>
        </div>
        <div class="total" >
            <button>Calcular Valor</button>
            <p>Valor Inicial R$ 9570,00</p>
            <?php if(!empty($_SESSION['diamante'])): ?>
            <p>Valor Final <?=$_SESSION['diamante']; ?></p>
            <?php endif;?>
        </div>

    </form>
        <p>Depois de escolher o seu orçamento <a href="<?php echo BASE_URL;?>weddingform/estimate"> clique aqui </a>para 
            visualisar os detalhes, descontos e as formas de pagamento
        </P>
</div>