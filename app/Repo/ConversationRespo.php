<?php
namespace App\Repo;

use App\Models\Consultation;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Message;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;



class ConversationRespo
{
    private $user;
    private $m;
    private $c;
    public function __construct(User $user, Message $message, Consultation $consultation)
    {
        $this->user = $user;
        $this->m = $message;
        $this->c = $consultation;
    }

    public function getConversationDoctor($userID)
    {
       
        $conversations = $this->user->newQuery()->select('*')->where('id', '!=', $userID)->orderBy('lastLogin', 'desc')->get(); 
        return $conversations;
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
    // cette methode permet de verifier si dans la table user il y a des enregistrements  ou non
    public function verification()
    {
        return $this->user::all();
    }
    public function getMessagesFor($from,$to):Builder
    {
        return $this->m->newQuery()->whereRaw("((user_received=$from AND user_sent=$to) OR (user_received=$to AND user_sent=$from))")->orderBy('created_at','asc');
    } 
    public function verification_avant_debut_consulation($id)
    {
        return $this->c::whereRaw("(user_id=$id and status=0)");

        // return $this->c->join('users','users.id','=','consultations.user_id')->where('(user_id=$id and status=0)')->select('0');
    }
   public function insertion_user_consult(string $code_consult, int $u)
   {
     return $this->c->newQuery()->create(
        [
            'numero_consultation'=>$code_consult,
            'user_id'=>$u,
            'debut_consultation'=>Carbon::now()
        ]
     ) ;
   }  

   public function unreadMessageCount(int $userId)
   {
    return $this->m->newQuery()
    ->where('user_received',$userId)->groupBy('user_sent')
    ->selectRaw(("user_sent,COUNT(id) as count"))->whereRaw("(read_at = Null)")->get();
   }
}

?>