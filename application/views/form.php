


<div class="container" style="margin-top:2%;">
<div style="padding:20px;margin-bottom:2%;background-color:#F5F6F5" class="card card-light rounded-0 ">
  <div class="alert alert-primary" style="font-size:18px;">
    <span>Saludos <?php echo "<strong>".$_SESSION['nombre']."</strong>"; ?>. Debajo puedes completar el formulario para dar tu opinion.
  </span>
  </div>
    <form class="" action="" method="post">


    <div class="form-row">
      <div class="form-group col-md-2">
          <label for="">Fecha</label>
          <input required style="font-size:17px" readonly class="form-control" type="date" name="fecha" value="<?php echo date('Y-m-d') ?>">
      </div>

      <div class="form-group col-md-4">
          <label for="">Genero</label>
          <select required class="form-control"  name="genero" >
            <option value="NULL">--Seleccionar--</option>
            <option value="1">Masculino</option>
            <option value="2">Femenino</option>
          </select>
      </div>

      <div class="form-group col-md-6">
          <label for="">Ciudad</label>
          <select required class="form-control" value="ciudad" class="form-control" name="ciudad">
           <option value="NULL">--Seleccionar--</option>
           <option value="1">Azua de Compostela</option>
           <option value="2">Neiba</option>
           <option value="3">Santa Cruz de Barahona</option>
           <option value="4">Dajabón</option>
           <option value="5">San Francisco de Macorís</option>
           <option value="6">Comendador</option>
           <option value="7">Santa Cruz de El Seibo</option>
           <option value="8">Moca</option>
           <option value="9">Hato Mayor del Rey</option>
           <option value="10">Salcedo</option>
           <option value="11">Duvergé</option>
           <option value="12">Jimaní</option>
           <option value="13">Salvaleón de Higüey</option>
           <option value="14">La Romana</option>
           <option value="15">Concepción de La Vega</option>
           <option value="16">Nagua</option>
           <option value="17">Bonao</option>
           <option value="18">San Fernando de Monte Cristi</option>
           <option value="19">Monte Plata</option>
           <option value="20">Bayaguana</option>
           <option value="21">Pedernales</option>
           <option value="22">Baní</option>
           <option value="23">San Felipe de Puerto Plata</option>
           <option value="24">Santa Bárbara de Samaná</option>
           <option value="25">San Cristóbal</option>
           <option value="26">San José de Ocoa</option>
           <option value="27">San Juan de la Maguana</option>
           <option value="28">San Pedro de Macorís</option>
           <option value="29">Cotuí</option>
           <option value="30">Santiago de los Caballeros</option>
           <option value="31">San Ignacio de Sabaneta</option>
           <option value="32">Santo Domingo Este</option>
           <option value="33">Santa Cruz de Mao</option>
         </select>
      </div>
    </div>

    <div class="form-row">

      <div class="form-group col-md-6">
          <label for="">Profesion</label>

          <select required class="form-control" value="profesion" class="form-control" name="profesion">
           <option value="NULL">--Seleccionar--</option>
           <option value="1">Medicina</option>
           <option value="2">Enfermeria</option>
           <option value="3">Odontologia</option>
           <option value="4">Bionoalis</option>
           <option value="5">Farmacia</option>
           <option value="6">Derecho</option>
           <option value="7">Ingenieria Industrial</option>
           <option value="8">Ingenieria Civil</option>
           <option value="9">Ingenieria Electromecanica</option>
           <option value="10">Psicologia Educatica</option>
           <option value="11">Psicologia Industrial</option>
           <option value="12">Psicologia Clinica</option>
           <option value="13">Lic. en Educacion</option>
           <option value="14">Arquitectura</option>
           <option value="15">Contabilidad</option>
           <option value="16">Mercadeo</option>
           <option value="0">Otra</option>
        </select>

      </div>

      <div class="form-group col-md-6">
          <label for="">Calificacion</label>
          <br>

      <div class="form-check form-check-inline">
          <input required  class="form-check-input"  type="radio" name="calificacion" value="5">
        <label class="form-check-label" for="inlineRadio1">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </label>
      </div>


      <div class="form-check form-check-inline">
          <input required  class="form-check-input"  type="radio" name="calificacion" value="4">
        <label class="form-check-label" for="inlineRadio1">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star "></span>
        </label>
      </div>

      <div class="form-check form-check-inline">
          <input required  class="form-check-input"  type="radio" name="calificacion" value="3">
        <label class="form-check-label" for="inlineRadio1">
          <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          <span class="fa fa-star "></span>
          <span class="fa fa-star "></span>
        </label>
      </div>

      <div class="form-check form-check-inline">
          <input required  class="form-check-input"  type="radio" name="calificacion" value="2">
        <label class="form-check-label" for="inlineRadio1">
          <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star "></span>
          <span class="fa fa-star "></span>
          <span class="fa fa-star "></span>
        </label>
      </div>

      <div class="form-check form-check-inline">
          <input required class="form-check-input"  type="radio" name="calificacion" value="1">
        <label class="form-check-label" for="inlineRadio1">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star "></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star "></span>
          <span class="fa fa-star "></span>

        </label>
      </div>


          </div>

      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="">Opinion</label>
          <textarea required id="opinion" class="form-control" maxlength="120" name="opinion" rows="4" cols="200"></textarea>
        </div>
      </div>
      <input class="btn btn-success" type="submit" name="submit" value="submit">


    </div>

  </form>

</div>


  </div>
