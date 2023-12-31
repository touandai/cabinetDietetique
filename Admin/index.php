<?php
/* On démarre la session */
session_start();
require '../connexion.php';

/* Racine du projet */
$document_root = "ECF-Nutritionniste";

$page = (isset($_GET['page'])) ? $_GET['page'] : "login";

/* Si l'utilisateur n'est pas connecté.e */
if(!isset($_SESSION['user_data'])) {
  header('location:/' . $document_root . '/monespace.php');
} 

/**
 * Récupération des informations de l'utilisateur connecté
 */
$userConnecte = $_SESSION['user_data'];

switch($page) {
  /* Tableau de bord */
  case 'tableau-de-bord':
  default:   
    require 'pages/tableau-de-bord.php';
    break;
  /* Déconnexion */
  case 'deconnexion';
    require 'pages/deconnexion.php';
    break;
  /* connexion */
  case 'connexion';
  require 'pages/connexion.php';
  break;
  /* Ajout patients*/
    case 'patients':
      require 'pages/patients.php';
       break;
  /* Avis*/
  case 'avis':
    require 'pages/avis.php';
    break;
  /* Gestion recettes supplementaires*/
  case 'gestionrecettes':
    require 'pages/gestion-recettes.php';
     break;
  /* recettes supplementaires à consulter*/
  case 'recettes':
    require 'pages/recettes-sup.php';
     break;
}

