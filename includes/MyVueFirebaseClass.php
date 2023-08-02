<?php
namespace MyVueFirebasePlugin\Includes;

use Firebase\Auth\Token\Exception\InvalidToken;
use Kreait\Firebase\Auth;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class MyVueFirebaseClass {
    private $firebase;

    public function __construct() {
        $this->initialize_firebase();
        // Add more constructor code if needed
    }

    private function initialize_firebase() {
        // Replace the following with your actual Firebase configuration
        $firebase_config = array(
            'apiKey' => 'AIzaSyDeUAl_-Pr4fv_YJfQfVFFepX_0aiRlDpA',
            'authDomain' => 'my-vue-firebase-plugin.firebaseapp.com',
            'projectId' => 'my-vue-firebase-plugin',
            'storageBucket' => 'my-vue-firebase-plugin.appspot.com',
            'messagingSenderId' => '413819258515',
            'appId' => '1:413819258515:web:e37ba356e9bc83025a2f66',
            'measurementId' => 'G-WYX0FVP222'
        );

        try {
            // Initialize Firebase using the provided configuration
            $serviceAccount = ServiceAccount::fromJsonFile('/path/to/your/firebase_credentials.json');
            $this->firebase = (new Factory)
                ->withServiceAccount($serviceAccount)
                ->withDatabaseUri('https://' . $firebase_config['projectId'] . '.firebaseio.com')
                ->create();
        } catch (\Exception $e) {
            // Handle any errors that occur during Firebase initialization
            error_log('Firebase initialization error: ' . $e->getMessage());
        }
    }

    public function get_event_data($event_id) {
        try {
            // Replace 'events' with the path to your Firebase collection for events
            $database = $this->firebase->getDatabase();
            $event_data = $database->getReference('events/' . $event_id)->getValue();

            return $event_data;
        } catch (\Throwable $e) {
            // Handle any exceptions that occur during Firebase retrieval
            // For example, log the error or return a default value
            error_log('Error retrieving event data from Firebase: ' . $e->getMessage());
            return null;
        }
    }

    public function store_event_data($event_id, $event_data) {
        try {
            // Replace 'events' with the path to your Firebase collection for events
            $database = $this->firebase->getDatabase();
            $database->getReference('events/' . $event_id)->set($event_data);

            return true;
        } catch (\Throwable $e) {
            // Handle any exceptions that occur during Firebase storage
           
            error_log('Error storing event data in Firebase: ' . $e->getMessage());
            return false;
        }
    }

   
}
