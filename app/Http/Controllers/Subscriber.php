<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Newsletter\Facades\Newsletter;
//use Newsletter;

class Subscriber extends Controller
{

  public function addSubscriber( Request $request ) {

     $validatedData = $request->validate([
         'email' => 'required|email',
     ]);

     // Do additional validation and security checks here....

     // Sign up the user!
     
     Newsletter::subscribePending( $validatedData['email'] );

     if( Newsletter::lastActionSucceeded() ) {
         $status = json_encode( [ 'success' => true, 'message' => 'You have been added to the list! Please check your email to confirm.' ] );
     } else {
         $status = json_encode( [ 'success' => false, 'message' => 'There was an issue adding you to the list! Please try again or contact the admin.', 'error' => Newsletter::getLastError() ] );
     }

     return $status;
   }
}
