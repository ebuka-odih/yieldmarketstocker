<?php

namespace App\Http\Controllers\Admin;

use App\Deposit;
use App\Http\Controllers\Controller;
use App\Mail\ApproveDeposit;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DepositsController extends Controller
{

    public function deposits()
    {
        $deposits = Deposit::all();
        return view('admin.transactions.deposits', compact('deposits'));
    }

    public function view_deposit($id)
    {
        $deposit = Deposit::findOFail($id);
        return view('admin.transactions.deposit-details', compact('deposit'));
    }

    public function approve_deposit($id)
    {
        $deposit = Deposit::findOrFail($id);
        $user = \App\User::findOrFail($deposit->user_id);
        $user->balance += $deposit->amount;
        $user->save();
        $deposit->status = 1;
        $deposit->save();
        Mail::to($user->email)->send(new ApproveDeposit($deposit));
        return redirect()->back()->with('success', "Deposit approved successfully");
    }

    public function deleteDeposit($id)
    {
        $deposit = Deposit::findOrFail($id);
        $deposit->delete();
        return redirect()->back();
    }

    public function addDeposit()
    {
        $users = User::where('admin', 0)->get();
        return view('admin.user.add-deposit', compact('users'));
    }

    public function adminProDeposit(Request $request)
    {
        $deposit = new Deposit();
        $deposit->amount = $request->amount;
        $deposit->user_id = $request->user_id;
        $deposit->payment_method_id = $request->payment_method_id;
        $deposit->save();
        return redirect()->back()->with('success', "Deposited Successfully");
    }

}
