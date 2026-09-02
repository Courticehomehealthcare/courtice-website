<?php
namespace App\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;
class VerifyEmailNotification extends Notification
{
    use Queueable;
    public $user;
    public function __construct($user)
    {
        $this->user = $user;
    }
    public function via(object $notifiable): array
    {
        return ['mail'];
    }
    public function toMail(object $notifiable): MailMessage
    {
        $verificationUrl = URL::temporarySignedRoute(
            'verify.email',
            now()->addHours(24),
            ['id' => $this->user->id, 'hash' => sha1($this->user->email)]
        );
        return (new MailMessage)
            ->subject('Verify Your Email Address - Courtice Home Healthcare')
            ->greeting('Hello ' . $this->user->name . '!')
            ->line('Thank you for registering with Courtice Home Healthcare.')
            ->line('Please verify your email address to complete your registration.')
            ->action('Verify Email', $verificationUrl)
            ->line('This link will expire in 24 hours.')
            ->line('If you did not create this account, no further action is required.')
            ->salutation('Warm regards, Courtice Home Healthcare Team');
    }
    public function toArray(object $notifiable): array
    {
        return [];
    }
}
