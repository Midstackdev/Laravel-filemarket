<?php

namespace App\Mail\Files;

use App\Models\File;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FileUpdatedRejected extends Mailable
{
    use Queueable, SerializesModels;

    public $user, $file;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(File $file)
    {
        $this->file = $file;
        $this->user = $file->user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         return $this->subject('Your file update has been rejected')
                    ->view('emails.files.updated.rejected');
    }
}
