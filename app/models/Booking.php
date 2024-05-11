<?php

class Booking extends Model
{
    public $errors= [];
    protected $table = 'bookings';
    protected $allowedColumns = [
        'user_id',
        'ticketNo',
        'qrpath',
        'date',
        'route_id',
     
    ];


}