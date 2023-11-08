<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ContactUsRequest;
use App\Interface\userInterface\ContactUsRepositoryInterface;
use App\Mail\ContactUsMail;
use App\Models\ContactUs;
use App\Notifications\ContactUsNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    private $contactUsRepository;

    public function __construct(ContactUsRepositoryInterface $contactUsRepository)
    {
        $this->contactUsRepository = $contactUsRepository;
    }

    public function store(ContactUsRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;

        if ($this->contactUsRepository->isOnline()) {
            $contactUs = $this->contactUsRepository->create($data);
            // Send the email to the user
            Mail::to(auth()->user()->email)->send(new ContactUsMail($contactUs));
            return redirect()->route('dashboard')->with('success', 'メッセージが正常に送信されました');
        } else {
            return redirect()->back()->with('error', 'メッセージの送信に失敗しました');
        }
    }
}
