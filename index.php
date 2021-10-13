<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="">
  <meta name="theme-color" content="#009688">
  
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>SUMAR EN API</title>
</head>

<body>
  
  <section class="suma-content">
   
    <div class="suma-box">
      <form class="suma-form" id="frmsumar" >
        <h3 class="suma-head"><i class="fa fa-lg fa-fw fa-plus"></i></h3>
        <div class="form-group">
          <label class="control-label" for="valor1">VALOR1</label>
          <input class="form-control" id="valor1" type="text" name="valor1" placeholder="valor1" autofocus>
        </div>
        <div class="form-group">
          <label class="control-label" for="valor2">valor2</label>
          <input class="form-control" type="text" id="valor2" name="valor2" placeholder="valor2">
        </div>

        <div class="form-group btn-container">
          <button class="btn btn-primary btn-block" type="submit" onclick="frmsumar(event);"><i class="fa  fa-lg fa-fw"></i>SUMAR</button>
        </div>
      </form>
    </div>
  </section>
  <!-- Essential javascripts for application to work-->
  <script src="/js/jquery-3.3.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="/js/plugins/pace.min.js"></script>

  <script src="sumar.js"></script>
</body>

</html>