{if $post.user_id == $smarty.session.id || isVisibleTo($post.id,$post.user_id,$smarty.session.id)}
    <!--publication-->



    <div class="panel panel-default panel-feed" id="panel-feed-{$post.id}">
        <div class="panel-heading">
            {$imagePath=getProfilePic($post.user_id)}
            <h4>{$userFromID=getUserFromID($post.user_id)}
                <a href="{$BASE_URL}pages/users/profile.php?user={$userFromID.hashid}" style="text-decoration: none; color: inherit">
                    <img class="profilePic" width="40" height="40" style="border-radius:50%" src="../../images/users/{$imagePath}" alt="profilePic">
                    {$userFromID.name}
                </a>
            </h4>
        </div>

        <div class="panel-body">
            <!-- voting section -->
            <div class="vote-section" >
                <table style="text-align:center;">
                    {$vote = getVote($smarty.session.id, $post.id)}
                    <tr>
                        <td><i id="upvote-{$post.id}" class="fa fa-sort-asc upvote-btn"
                               style="{if $vote.positive == '1'} color:rgb(92,184,92); {/if}"}></i></td>
                    </tr>
                    <tr>
                        {if $post.user_id != $smarty.session.id}
                            <td class="votedifference-x" id="td-votedifference-{$post.id}">
                                {if $post.votedifference < 0} <i class="fa fa-minus-square-o" style="color:rgb(176, 49, 33)"></i>
                                {else} <i class="fa">{$post.votedifference}</i>
                                {/if}
                            </td>
                        {else}
                            <td class="votedifference" id="td-votedifference-{$post.id}"  data-toggle="tooltip" data-placement="bottom" title="Check who voted">
                                {if $post.votedifference < 0} <i class="fa fa-minus-square-o" style="color:rgb(176, 49, 33)"></i>
                                {else} <i class="fa">{$post.votedifference}</i>
                                {/if}
                            </td>
                        {/if}
                    </tr>
                    <tr>
                        <td><i id="downvote-{$post.id}" class="fa fa-sort-desc downvote-btn"
                               style="{if $vote.positive == '0'} color:rgb(176, 49, 33); {/if}"}></i>
                        </td>
                    </tr>
                </table>
            </div>

            <!-- publication -->
            <div class="post-msg-div">{$post.message}</div>
            {$tags = getTagNamesFromPost($post.id)}
            {if $tags != NULL}
                <p>
                    {foreach $tags as $tag}
                        <a href="{$BASE_URL}pages/posts/tagview.php?tagname={$tag.name}">#{$tag.name}</a> {if not $tag@last} , {/if}
                    {/foreach}
                </p>
            {/if}

            {if $post.url}
                {if (yt($post.url) != $post.url)}
                    {$yturl = yt($post.url)}
                {/if}
                {if $yturl}
                    <div class="video-container post-url-div">{$yturl}</div>
                {else}
                    <div class="post-url-div"><a href={$post.url}>{$post.url}</a></div>
                {/if}
            {/if}

            {$image=getImagePathFromPost($post.id)}

            {if ($image[0].path != NULL)}
                <img src="../../images/users/{$image[0].path}" alt="" class="img-responsive" style="border: 1px solid #fff;" />
            {/if}
        </div>

        <!--footer-->
        <div class="panel-footer clearfix ">
            <!-- section with the time and comments button -->
            <div class="fill-flow">
                <a href="{$BASE_URL}pages/posts/single_post.php?post_id={$post.id}" data-toggle="tooltip" data-placement="bottom" title="Check this post"
                   class="btn btn-default" id="clock-panel">
                    <i class="fa fa-clock-o"></i>
                    {if $post.start_date} {$post.start_date} {else} {$post.post_date} {/if}
                </a>

                {if $isRightFeed}
                    <button class="btn btn-default btn-comments rightFeed" id="btn-comments-{$post.id}" type="button" data-toggle="collapse" data-target="#comments-rightfeed-{$post.id}" aria-expanded="false" aria-controls="comments">
                        <i class="fa fa-comments"></i> Comments
                    </button>
                {else}
                    <button class="btn btn-default btn-comments" id="btn-comments-{$post.id}" type="button" data-toggle="collapse" data-target="#comments-{$post.id}" aria-expanded="false" aria-controls="comments">
                        <i class="fa fa-comments"></i> Comments
                    </button>
                {/if}
                {if $post.user_id != $smarty.session.id}
                    <button class="btn btn-default btn-repost" id="btn-repost-{$post.id}"><i class="fa fa-retweet"></i> Repost</button>
                    <a href="javascript:void" class="btn btn-default btn-flag-report" data-toggle="tooltip" data-placement="bottom" title="Report this post" data-toggle="modal" id="btn-report-{$post.id}"> <i class="fa fa-flag"></i></a>
                {/if}
                {if $post.user_id == $smarty.session.id}
                    <button class="btn btn-default btn-delete" id="btn-delete-{$post.id}"><i class="fa fa-trash-o"></i> Delete</button>
                    <button class="btn btn-default btn-edit" data-toggle="modal" data-target="#editModal" id="btn-edit-{$post.id}"><i class="fa fa-pencil"></i> Edit</button>
                {/if}
            </div>

            <!-- comment section-->
            {if $isRightFeed}
                <div class="collapse" id="comments-rightfeed-{$post.id}">
                    <div class="col-lg-20" id="comments_section">
                        <h4>Comments</h4>
                        <div class="input-group commentform" id="commentform-rightfeed-{$post.id}">
                            <textarea placeholder="Type comment" class="form-control" rows="1" style="resize:none"></textarea>
                            <span class="input-group-addon btn btn-primary btn-comment">Comment</span>
                            <div id="error_message"></div>
                        </div>
                    </div>
                </div>
            {else}
                <div class="collapse" id="comments-{$post.id}">
                    <div class="col-lg-20" id="comments_section">
                        <h4>Comments</h4>
                        <div class="input-group commentform" id="commentform-{$post.id}">
                            <textarea placeholder="Type comment" class="form-control" rows="1" style="resize:none"></textarea>
                            <span class="input-group-addon btn btn-primary btn-comment">Comment</span>
                            <div id="error_message"></div>
                        </div>
                    </div>
                </div>
            {/if}
        </div>
    </div>
{/if}

