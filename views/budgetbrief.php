<div class="content budget_brief">
    <div class="salute_customer">
        <h1> Sr/Sra <?= $budgetCustomer['mainCustomer']; ?></h1>
        <p>
        É com enorme satisfação que lhe proporcionamos os detalhes do seu orçamento personlizado e 
        lhe aguardamos para uma visita presencial.
        </p>
    </div>

    <section class="budget">
        <div class="title">
            <h5>Detalhes do orçamento</h5>
            <p>Orçamento do tipo <b>"<?= $budgetCustomer['budgetType']?>"</b> que dispõe:</p>
        </div>
    </section>
    <ul>
        <li>Cobertura sem limite de cliques: </li>
        <li>Entrega de <b>"<?= $budgetCustomer['albumPhotos']?>"</b> fotografias em alta resolução + tratamento de imagem.</li>
        <li> Slideshow com 60 fotografias em blog e YouTube até 15 dias ós casamento. </li>
        <p> No valor de valor inicial de <b>R$ <?= $_SESSION['initialValue'] ?>,00 </b> </p>
    </ul>
    <h4>Adicionais</h4>    
    
    <?php if(!empty($budgetCustomer['album'])):?>
    <ul>
        <li> <b> Álbum virtual </b>(pré visualização do álbum para aprovação e correções dos noivos), 
            montagem feita pela fotógrafa Juliana Mozart diretamente com os noivos.
        </li>
        <li>
        <b>"<?= $budgetCustomer['albumPages']?>"</b> páginas tamanho 20x30 tipo Wedding Book, álbum de páginas de papel fotográfico laminado 
        </li>
        <li>
        Capa feita à mão com materiais como couro, madeira, capa fotógráfica ou tecido, à escolha do casal. 
        </li>
        <p>No valor de <b> R$ <?= $budgetCustomer['album']?>,00 </b></p> 
    </ul>
    
    <?php else: ?>
    
    <p>Sem album</p>
    
    <?php endif; ?>
    
    <div class="personal_photograph">
        <?php if(!empty($budgetCustomer['personalPhotograph'])):?>
        <P><b> Juliana Mozart</b> fotografando pessoalmente seu evento <P>
        <p> <b>valor R$ <?= $budgetCustomer['personalPhotograph']?>,00</b></p´>
        <?php else: ?>
        <P>  Fotografo equipe</P>
        <?php endif; ?>
    </div>
    
    <div class='align_left_margin'>
    <?php if(!empty($budgetCustomer['makingBride'])):?>
    <P> <b>Making of </b>da noiva 2 horas antes do evento</P>
    <P>  <b>Valor: R$ <?= $budgetCustomer['makingBride']?>,00</b></P>
    <?php endif; ?>
    </div>
    
    <div class="align_left_margin">
        <?php if(!empty($budgetCustomer['makingGroom'])):?>
        <P> <b>Making of</b> do noivo 2 horas antes do evento</P>
        <P><b> Valor: R$ <?= $budgetCustomer['makingGroom']?>,00</b></P>
        <?php endif; ?>
    </div>
    
    <h3>Valor Total R$ <?= $budgetCustomer['finalValue']?>,00 </h3>
    <div class="align_left_margin" >
        <p><b> Parcelamos </b> esse valor em 3 parcelas mensais de <b>R$<?= floor( $budgetCustomer['finalValue'] / 3)?>,00</b> Sem juros</p>
        <p> No pagamento a vista damos 5% de desconto e o valor final é de  <b><?= floor($budgetCustomer['finalValue'] * 0.95)?>,00 </b>Sem juros</p>
        <p><b>Economia</b> de <b>R$ <?= floor($budgetCustomer['finalValue'] * .05)?>,00</b> </p>
    </div>       
    <a  href="<?php echo BASE_URL; ?>/weddingform/insert">Refazer o orçamento </a>
    <button>Salvar o Orçamento</button>

    <span style="height:10vh;">"   "</span>
</div>
