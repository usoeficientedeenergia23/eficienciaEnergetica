<?php 

class logoutController extends Controller {
  function __construct()
  {
  }

  function index()
  {
    Redirect::to('paginaPincipal');
  }
}