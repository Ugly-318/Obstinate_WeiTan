<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Reply;

class ReplyPolicy extends Policy
{
    public function update(User $user, Reply $reply)
    {
        // return $reply->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Reply $reply)
    {
        // 拥有删除回复权限的用户, 应当是回复的作者 或是 回复话题的作者
        return $user->isAuthorOf($reply) || $user->isAuthorOf($reply->topic);
    }
}
