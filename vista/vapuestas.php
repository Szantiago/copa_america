<?php include("controlador/capuestas.php"); ?>

<div class="container-fluid">
    <h1>Apuestas</h1>
    <form action="" method="POST">
        <div class="form-group col-lg-12">
            <div class="col-lg-4">
                
            </div>
            <div class="col-lg-4">
                <label for="">Partido:</label>
                <select name="idpartido" id="" class="form-control">
                    <option value="">Seleccione partido</option>
                    <?php for($i=0 ; $i < count($part = $apuesta->getPartidos()) ; $i++): ?>
                        <option value="<?= $part[$i]['idpartido'] ?>"><?= $part[$i]['equilo']  ?> VS <?=  $part[$i]['equivi'] ?></option>
                    <?php endfor; ?>
                </select>  
            </div>
        </div>
        <div class="form-group col-lg-6">
            <label for="">Marcador local:</label>
            <input type="text" class="form-control" name="marcadorlocal" value="0">
        </div>
        <div class="form-group col-lg-6">
            <label for="">Marcador visitante:</label>
            <input type="text" class="form-control" name="marcadorvisit" value="0">
        </div>
        <div class="form-group col-lg-12">
            <div class="col-lg-4">
                
            </div>
            <div class="col-lg-4">    
                <label>&nbsp;</label><br>
                <input type="submit" class="btn btn-success" value="Registrar Apuesta">
            </div>
        </div>
    </form>
</div>


