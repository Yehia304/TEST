<?php
namespace App\Services;

use App\Models\Token;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Services\RequestToken;
use function PHPUnit\Framework\isEmpty;

class SabreEPRToken {

    protected $requestToken;

    public function __construct(RequestToken $requestToken){
        $this->requestToken = $requestToken;

    }
    public function getSabreTokenREST($EPR){
        $response = Http::asForm()->withHeaders(['Authorization' => 'Basic '. $EPR])
            ->post('https://api.havail.sabre.com/v2/auth/token', array('grant_type' => 'client_credentials'));
        $array =  json_decode($response, true);
        return $array;
    }

    public function getSabreTokenSOAP(){
        $token = Token::latest()->first();
        $tokenused = '';

//        return $token;

        if ($token != NULL){
//            return 'token is not empty';
            $dateafter7 = $token->created_at->addDays(7);
            $datenow = Carbon::now();
//            return $datenow;
            if ($datenow >= $dateafter7){
                $tokenused = $this->requestToken->RequestToken();
            }
            else{
                $tokenused = $token->token;
            }
            return $tokenused;
        }
        else{
            $tokenused = $this->requestToken->RequestToken();
            return $tokenused;
        }

    }
}
