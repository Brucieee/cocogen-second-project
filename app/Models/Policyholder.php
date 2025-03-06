<?php

// app/Models/Test.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policyholder extends Model
{
    use HasFactory;

    protected $fillable = ['firstName', 'middleName', 'lastName', 'dateOfBirth', 'placeOfBirth', 'sex', 'citizenship', 'contactNumber', 'email',
     'AutoExcelPlus', 'InternationalTravelPlus', 'DomesticTravelPlus', 'ProTech', 'CondoExcelPlus', 'branch', 'contactEmail', 'contactSMS', 'contactMessenger', 'contactCall',
    'unitNo', 'street', 'barangay', 'city', 'province', 'region', 'uploadID', 'uploadDisplayPicture', 'payment', 'bankWallet', 'otp' ];
}
