<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Config;
use App\Ethereum;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'affiliate_id', 'referred_by',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function referrer()
    {
        return $this->belongsTo( 'App\User', 'referred_by' );
    }

    public function referrals()
    {
        return $this->hasMany( 'App\User', 'referred_by' );
    }

    public function balanceOf() {
        $eth = new Ethereum();
//0x9740Cd40296744a0aE2aFD115933a791Da4c2AD8
        $param = $eth->createAddrParam($this->eth_address);

        $params = ["to" => Config::get('eth.unicorngoCoinAddr'),
            "data" => '0x70a08231'.$param];

        $res = hexdec($eth->eth_call($params,'latest'));
        $format_number = number_format($res / (10**18), 0, '.', '');

        return $format_number;
    }
}
