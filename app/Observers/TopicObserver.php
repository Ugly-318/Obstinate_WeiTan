<?php

namespace App\Observers;

use App\Models\Topic;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class TopicObserver
{
    public function creating(Topic $topic)
    {
        //
    }

    public function updating(Topic $topic)
    {
        //
    }

    // 在 Topic 模型中保存时触发的 saving 事件中, 对 except 字段进行赋值
    public function saving(Topic $topic)
    {
        // 用户输入的内容进行过滤
        $topic->body = clean($topic->body, 'user_topic_body');

        // 对用户内容进行摘要操作
        $topic->excerpt = make_excerpt($topic->body);
    }
}
