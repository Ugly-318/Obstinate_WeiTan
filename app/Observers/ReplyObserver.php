<?php

namespace App\Observers;

use App\Models\Reply;
use App\Notifications\TopicReplied;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class ReplyObserver
{
    // 对用户评论内容过滤
    public function creating(Reply $reply)
    {
        $reply->content = clean($reply->content, 'user_topic_body');

        // 判断内容为空的处理方式 拒绝保存入库
        if ($reply->content === '') {
            return false;
        }
    }

    //
    public function created(Reply $reply)
    {
        // 话题下没新增一条回复 进行 +1
        // $reply->topic->increment('reply_count', 1);

        // 创建成功后计算本话题下评论总数 对 `reply_count` 字段进行赋值
        // $reply->topic->reply_count = $reply->topic->replies->count();
        // $reply->topic->save();

        $reply->topic->updateReplyCount();

        // 通知话题作者有新的评论
        $reply->topic->user->notify(new TopicReplied($reply));
    }

    public function deleted(Reply $reply)
    {
        $reply->topic->updateReplyCount();
    }
}
