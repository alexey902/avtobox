<?php

namespace Autobox\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Autobox\Http\Controllers\TaskController;
class CustomersRequest extends Mailable
{
    use Queueable, SerializesModels;

  public $myrequest;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($myrequest)
    {
        $this->myrequest=$myrequest;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.newcustomerrequest');


    }

    /**
     * @param Input $input
     * @return CustomersRequest
     */

}
