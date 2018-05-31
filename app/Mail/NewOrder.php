<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewOrder extends Mailable
{
    use Queueable, SerializesModels;


    public $order;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(['address' => config('app.admin_email'), 'name' => config('app.name')])
            ->to($this->order->billing_email, $this->order->billing_firstname.' '.$this->order->billing_lastname)
            ->subject('Thanks For Your Order')
            ->markdown('emails.neworder')
            ->with([
                'order_id' => $this->order->id,
                'order_person' => $this->order->billing_firstname.' '.$this->order->billing_lastname,
                'order_price' => $this->order->billing_total,
                'order_status' => ucfirst(str_replace('_',' ',$this->order->order_status)),
                'payment_status' => ucfirst(str_replace('_',' ',$this->order->payment_status)),
            ]);
    }
}
