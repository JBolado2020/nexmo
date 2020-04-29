<footer>
        <h4>Todos los derechos reservados a Tercer Escalón 2020</h4>
</footer>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Solicitud de producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="loginmodal-container">
                    <form onsubmit="return false;" method="POST">
                    <br>
                    <div class="form-group">
                        <label for="email">Tu correo:</label>
                        <input type="email" class="form-control" id="email" name="correo" required="true" placeholder="ejemplo@correo.com">
                    </div>

                    <div class="form-group">
                        <label for="textarea">Descripción</label>
                        <textarea class="form-control" id="textarea" rows="3" name="enterado" required="true"></textarea>
                    </div>
                    <input type="submit" onclick="enviar()" class="login loginmodal-submit" value="Enviar"/>
                    </form>
                </div>
      </div>
    </div>
  </div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src='js/css3-animate-it.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="js/page.js"></script>