 <?php
namespace App\Controllers;

use \Core\View;
use App\Models\Listing;

class Listings extends Authenticated
{
    #Show the index page
    public function indexAction(){
        //echo "Hello from the index action in the Listings controller";
        //echo "<p>Query string parameters: <pre></pre>" . htmlspecialchars(print_r($_GET, true)) . "</pre></p>";
        $listings = Listing::getAll();

        View::render('Listings/index.php', [
            'listings' => $listings
        ]);
    }

    public function listingFormAction() {
        View::render('Listings/listingForm.php');
    }

    #Show the add new listing page
    public function addNewAction(){
//        echo "Hello from the addNew action in the Listings controller";
        $listing = new Listing($_POST);
        if($listing->save()) {
            //also car needs to be available
            $this->redirect('/listings/successfulListing');
        }

    }

    public function successfulListingAction() {
        View::render('Listings/successfulListing.php');
    }

    public function editAction(){
        echo "Hello from the edit action in the Listings controller";
        echo '<p>Route parameters: <pre>' . htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
    }

}