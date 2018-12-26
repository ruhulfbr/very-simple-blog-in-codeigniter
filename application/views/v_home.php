<div id="site_content">
    <?php include 'sidebar.php' ?>
    <div id="content">
        <?php if($this->session->userdata('user_id') && $this->session->userdata('user_type') != 'user')
        { ?>
        <h2><a style="color: green" href="<?=  base_url()?>index.php/blog/new_post/"><span class="glyphicon glyphicon-pencil"></span> Create a new post</a></h2>
        <?php } ?>
    <!-- insert the page content here -->
    
    <?php foreach($posts as $post)
    { ?>
    <h2><a style="color:#cc00ff" href="<?=  base_url()?>index.php/blog/post/<?=$post['post_id']?>"><?=$post['post_title'];?></a></h2>
        
        <?php if($this->session->userdata('user_id') && $this->session->userdata('user_type') != 'user')
        { ?>
        <p>
            <a href="<?=  base_url()?>index.php/blog/editpost/<?=$post['post_id']?>"><span class="glyphicon glyphicon-edit" title="Edit post"></span></a> | 
            <a href="<?=  base_url()?>index.php/blog/deletepost/<?=$post['post_id']?>"><span style="color:#f77;" class="glyphicon glyphicon-remove-circle" title="Delete post"></span></a>
        </p>
       <?php }?>
       <?php if($post['image']){ ?>
            <center><img style="width:70%;" src="<?php echo base_url(); ?><?=$post['image']?>"></center><br>
        <?php } ?>
        <p><?=  substr(strip_tags($post['post']), 0, 400).'...';?></p>
        <p><a href="<?=  base_url()?>index.php/blog/post/<?=$post['post_id']?>">Read More</a></p>
    <?php
    }?>
    <?=$pages?>
    </div>
</div>