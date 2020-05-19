<footer class="px-5 pt-5 mt-5 ">
    <div class="container-fluid">
      <div class="row">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-4 text-center"><img src="/media/logo-white.png" class="pr-2" width="80"
                alt="logo footer"><span class="h3 title-name text-white">dino.it</span></div>
            <div class="col-8 col-md-4">
              <ul class="custom-list text-white p-0 m-3 text-center text-md-left">
                <a class="custom-link" href="">
                  <li class="my-2">Chi siamo</li>
                </a>
                <a class="custom-link" href="">
                  <li class="my-2">Cosa facciamo</li>
                </a>
                <a class="custom-link" href="">
                  <li class="my-2">Lavora con noi</li>
                </a>
                <a class="custom-link" href="">
                  <li class="my-2">Diventa partner</li>
                </a>
              </ul>
            </div>
            <div class="col-12 col-md-4">
              <h5 class="mb-2 text-white text-center text-md-left">Iscrivi alla newsletter</h5>
              <form action="{{ route('newsletter') }}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-8">
                    <input type="email" class="form-control" id="footerInputEmail1" name="email">
                  </div>
                  <div class="col-4 pl-md-0">
                    <button type="submit" class="btn btn-reverse">Iscriviti</button>
                  </div>
                </div>
                <div class="form-group form-check">
             
                  <input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkbox">
                  <label class="form-check-label" for="exampleCheck1">
                    <small class="text-white">Accetto al trattamento
                      dei dati</small>
                  </label>
                </div>
              </form>
              <div class="row">
                <div class="col-12">
                  <div class="text-center text-md-left">
                    <a class="mx-2" type="button" role="button"><i class="fab fa-facebook-f text-white"></i></a>
                    <a class="mx-2" type="button" role="button"><i class="fab fa-twitter text-white"></i></a>
                    <a class="mx-2" type="button" role="button"><i class="fab fa-linkedin-in text-white"></i></a>
                    <a class="mx-2" type="button" role="button"><i class="fab fa-instagram text-white"></i></a>
                    <a class="mx-2" type="button" role="button"><i class="fab fa-youtube text-white"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr class="border-color-white">
          <div class="row">
            <div class="col-12">
              <p class="text-center text-muted"><small>Made with ❤️ in dino.it</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>