<?php include_once("header.php"); ?>
<div class="col-md-5">
    <form class="form-horizontal">
        <fieldset>
            <legend>Formulário de inscrição</legend>
            <div class="form-group">
                <label class="col-sm-2 control-label">Nome:</label>
                <div class="col-sm-10">                       
                    <input type="text" class="form-control" placeholder="Seu Nome">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Email:</label>
                <div class="col-sm-10">                       
                    <input type="Sobrenome" class="form-control" placeholder="Seu sobrenome">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Endereço:</label>
                <div class="col-sm-10">                       
                    <input type="text" class="form-control" placeholder="Rua">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label"> Bairro:</label>
                <div class="col-sm-10">                       
                    <input type="text" class="form-control" placeholder=" Seu bairro">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label"> Número:</label>
                <div class="col-sm-10">                       
                    <input type="text" class="form-control" placeholder="N° da sua casa">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label"> Cidade </label>
                <div class="col-sm-10">                       
                    <input type="text" class="form-control" placeholder=" Sua cidade ">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label"> País </label>
                <div class="col-sm-10">                       
                    <input type="text" class="form-control" placeholder=" Seu país">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label"> Obs: </label>
                <div class="col-sm-10">                       
                    <textarea class="form-control" rows="3" placeholder="Observações"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </div>
        </fieldset>
    </form>

    <?php
    include_once("footer.php");
    