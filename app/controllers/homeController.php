<?php 

class homeController extends Controller {
  function __construct()
  {
    parent::auth();
  }

  function index()
  {
    $data = 
    [
      'title' => 'Bienvenido',

    ];

    Redirect::to('paginaPrincipal');

    //View::render('flash', $data);
  }
}