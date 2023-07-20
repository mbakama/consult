<?php
namespace App\Repo;

use App\Models\User;
use Carbon\Carbon;
use App\Models\Message;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;



class ConversationRespo
{
    private $user;
    private $m;
    public function __construct(User $user, Message $message)
    {
        $this->user = $user;
        $this->m = $message;
    }

    public function getConversationDoctor($userID)
    {
       
        return $this->user->newQuery()->select('*')->where('id', '!=', $userID)->orderBy('lastLogin', 'desc')->get(); 

    } 
    public function countMessages()
    {
        return $this->m->newQuery()->select('*')->get();
    }

    public function countUsersBySexe()
    {
       return $this->user->newQuery()->whereNot('userType','doctor')->where('sexe','femme')->get(); 
    }
    public function countUserBySexe()
    {
       return $this->user->newQuery()->whereNot('userType','doctor')->where('sexe','homme')->get(); 

    }
    public function countConsultingUsers()
    {
       return $this->user->newQuery()->whereNot('userType','doctor')->where('status',0)->get(); 
    }
    public function insertConversation(string $content,int $user_send, $user_receiv)
    {
        return $this->m->newQuery()->create([
            'contenu'=>$content, 
            'user_sent'=>$user_send, 
            'user_received'=>$user_receiv,
        ]);
    }
    public function verification()
    {
        return $this->user::all();
    }
    public function getMessagesFor($from,$to):Builder
    {
        return $this->m->newQuery()->whereRaw("((user_received=$from AND user_sent=$to) OR (user_received=$to AND user_sent=$from))")->oldest();
        // ->select('*')->where('id',$id)->where('id',$userID)->lastest()->get();
    }
}

?>