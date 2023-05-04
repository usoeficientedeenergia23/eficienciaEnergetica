<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Latest compiled and minified bootstrap-select CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">

<!-- Todo plugin debe ir debajo de está línea -->
<!-- Toastr css -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<!-- Waitme css -->
<link rel="stylesheet" href="<?php echo PLUGINS.'waitme/waitMe.min.css'; ?>">

<!-- Lightbox -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css"/>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<link  rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' type='text/css'>


<!-- CDN VUEJs for dev v3 -->
<?php if (is_local()): ?>
  <script src="https://unpkg.com/vue@next"></script>
<?php else: ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.0.11/vue.runtime.global.prod.js"></script>
<?php endif; ?>

<!-- Estilos en header deben ir debajo de esta línea -->
<style>
  .btn {
    border-radius: 5px;
  }

  .bg-gradient {
    background: rgba(38, 38, 38, 1);
    background: -moz-linear-gradient(left, rgba(38, 38, 38, 1) 0%, rgba(28, 33, 28, 1) 100%);
    background: -webkit-gradient(left top, right top, color-stop(0%, rgba(38, 38, 38, 1)), color-stop(100%, rgba(28, 33, 28, 1)));
    background: -webkit-linear-gradient(left, rgba(38, 38, 38, 1) 0%, rgba(28, 33, 28, 1) 100%);
    background: -o-linear-gradient(left, rgba(38, 38, 38, 1) 0%, rgba(28, 33, 28, 1) 100%);
    background: -ms-linear-gradient(left, rgba(38, 38, 38, 1) 0%, rgba(28, 33, 28, 1) 100%);
    background: linear-gradient(to right, rgba(38, 38, 38, 1) 0%, rgba(28, 33, 28, 1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#262626', endColorstr='#1c211c', GradientType=1);
  }

  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>

<!-- Estilos registrados manualmente -->
<?php echo load_styles(); ?>

<!-- Estilos personalizados deben ir en main.css o abajo de esta línea -->
<link rel="stylesheet" href="<?php echo CSS.'main.css?v='.get_version(); ?>">
<link rel="stylesheet" href="<?php echo CSS.'menuP.css?v='.get_version(); ?>">
<link rel="stylesheet" href="<?php echo CSS.'formulario.css?v='.get_version(); ?>">
<link rel="stylesheet" href="<?php echo CSS.'firma.css?v='.get_version(); ?>">


