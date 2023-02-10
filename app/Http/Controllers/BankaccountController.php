<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Account;
use App\Models\Banks;
use DB;

class BankaccountController extends Controller
{
    public function createaccount() {
        $banks = Banks::all();
        return view("createaccount", [
            'banks' => $banks,
        ]);
    }

    public function create(Request $request) {
        $testAccount = DB::select('select * from user_account where user_id = ?', [Auth::user()->id]);
        
        if(empty($testAccount)) {
            $account = Account::create();

            DB::connection()->insert(
                "insert into user_account (user_id, account_id) values (?, ?)",
                [Auth::user()->id, $account->id]
            );

            return redirect()->route("home");
        }

        else {
            return redirect()->route("createaccount");
        }
        

        
    }
}
