<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Accueil');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'AccueilController::index');
$routes->get('/about', 'AboutController::index');
$routes->post('/a/(:any)', 'AccueilController::ajouter/$1');
$routes->post('/news/(:any)', 'AccueilController::newsAjouter/$1');
$routes->get('accueil', 'AccueilController::index');
$routes->get('produit/(:num)', 'AfficherProduitController::index/$1');
$routes->get('pannier', 'AfficherProduitController::pannierPage');
$routes->get('pannier/supprimer/(:num)', 'AfficherProduitController::supprimerPannier/$1');
$routes->get('pannier/(:num)', 'AfficherProduitController::pannier/$1');
$routes->get('about', 'AboutController::index');
$routes->get('contact', 'ContactController::index');
$routes->get('boutique', 'BoutiqueController::index');
$routes->get('clients', 'ClientController::index');
$routes->get('connexion', 'ConnexionController::index');
$routes->get('payer', 'PaimentsController::stripe');
$routes->get('deconnexion', 'ConnexionController::deconnexion');
$routes->get('inscription', 'ConnexionController::inscription');
$routes->post('inscription/(:any)', 'ConnexionController::ajouterinscription/$1');
$routes->post('commentaire/', 'CommentaireController::ajouterCommentaired/$1');
$routes->post('connexion/(:any)', 'ConnexionController::connexion/$1');
$routes->get('steev-admin', 'AdminController::index');
$routes->get('steev-admin/(:any)', 'AdminController::index/$1');
$routes->post('steev-admin/a/(:any)', 'AdminController::ajouter/$1');

$routes->get('modificationProduit/(:num)', 'AdminController::modificationProduit/$1');
$routes->post('modificationProduits/', 'AdminController::modificationProduitValidation/$1');
$routes->post('modificationCommentaire/', 'AdminController::modificationProduitValidation/$1');
$routes->post('modificationTitreHeader/', 'AdminController::modificationHeader/$1');
$routes->post('modificationImageHeader/', 'AdminController::modificationImageHeader/$1');

$routes->post('steev-admin/s/(:any)', 'AdminController::supprimerProduit/$1');

$routes->get('afficherProduit/(:num)', 'AdminController::AfficherProduit/$1');


$routes->get('client', 'Client::index');
$routes->post('client', 'Client::store');
$routes->get('client/(:num)', 'Client::show/$1');
$routes->post('client/(:num)', 'Client::update/$1');
$routes->delete('client/(:num)', 'Client::destroy/$1');




/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
