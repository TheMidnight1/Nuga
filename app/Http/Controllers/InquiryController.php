<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    public function submitInquiry(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'product' => 'required|string',
            'quantity' => 'required|integer',
            // 'message' => 'nullable|string',
        ]);

        $details = $request->only(['name', 'email', 'phone', 'product', 'quantity']);

        // Debug the $details array
        // dd($details);

        // Test view rendering
        // return view('emails.inquiry', $details);

        // Send email
        Mail::send('emails.inquiry', $details, function ($message) use ($details) {
            $message->to('chillsandesh8@gmail.com') // Replace with your email
                ->subject('New Product Inquiry');
        });

        // Add success message to session
        return redirect()->back()->with('success', 'Inquiry submitted successfully. We will get back to you soon.');
    }
}
