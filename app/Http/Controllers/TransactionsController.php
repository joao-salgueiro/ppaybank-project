<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;
use App\Models\Transactions;



class TransactionsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'document_id' => 'required|exists:users,document_id',
            'amount' => 'required|numeric|min:0.01',
        ]);

        $sender = Auth::user();
        $receiver = Users::where('document_id', $request->document_id)->first();

        if ($sender->id === $receiver->id) {
            return back()->withErrors('You cannot transfer money to yourself.');
        }

        $amount = $request->amount;

        // Verifica saldo
        if ($sender->wallet->balance < $amount) {
            return back()->withErrors('Insufficient balance.');
        }

        // Transação simples
        \DB::transaction(function () use ($sender, $receiver, $amount) {
            // Debita o remetente
            $sender->wallet->decrement('balance', $amount);

            // Credita o destinatário
            $receiver->wallet->increment('balance', $amount);

            // Registra a transação
            Transactions::create([
                'payer_id' => $sender->id,
                'payee_id' => $receiver->id,
                'amount' => $amount,
            ]);
        });

        return back()->with('success', 'Transfer successful!');
    }
}
