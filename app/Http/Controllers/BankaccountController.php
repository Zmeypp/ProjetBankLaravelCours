<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Account;
use App\Models\Banks;
use App\Models\Balance;
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

            $balance = Balance::create([
                'balance' => $request->input('balance'),
            ]);

            DB::connection()->insert(
                "insert into account_balance (balance_id, account_id) values (?, ?)",
                [$balance->id, $account->id]
            );

            DB::connection()->insert(
                "insert into user_account (user_id, account_id) values (?, ?)",
                [Auth::user()->id, $account->id]
            );

            if($request->input('bank') == 1) {
                DB::connection()->insert(
                    "insert into account_bank (account_id, bank_id) values (?, ?)",
                    [$account->id, 1]
                );
            }
            if($request->input('bank') == 2) {
                DB::connection()->insert(
                    "insert into account_bank (account_id, bank_id) values (?, ?)",
                    [$account->id, 2]
                );
            }
            if($request->input('bank') == 3) {
                DB::connection()->insert(
                    "insert into account_bank (account_id, bank_id) values (?, ?)",
                    [$account->id, 3]
                );
            }
            if($request->input('bank') == 4) {
                DB::connection()->insert(
                    "insert into account_bank (account_id, bank_id) values (?, ?)",
                    [$account->id, 4]
                );
            }
            if($request->input('bank') == 5) {
                DB::connection()->insert(
                    "insert into account_bank (account_id, bank_id) values (?, ?)",
                    [$account->id, 5]
                );
            }
            if($request->input('bank') == 6) {
                DB::connection()->insert(
                    "insert into account_bank (account_id, bank_id) values (?, ?)",
                    [$account->id, 6]
                );
            }

            

            return redirect()->route("home");
        }

        else {
            return redirect()->route("createaccount");
        }
        

        
    }
}
